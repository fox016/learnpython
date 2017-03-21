<?php

try
{
	// Get user id
	require_once('../common.php');
	$userid = getCookie('userid');

	// Get file from browser
	$file = $_FILES['file'];
	$filename = $file['name'];
	$tmpName = $file['tmp_name'];
	$userPython = file_get_contents($tmpName);

	// Blacklist Python code
	$blacklist = array(
		"/mysql/i", "/natefoxc/i", "/subprocess/i", "/learnpython/i", "/popen/i", "/from commands/i", "/import commands/i", "/spawn/i", "/os.system/i",
		"/open\(.*,.*\)/i", "http/i"
	);
	foreach($blacklist as $regex)
	{
		$rc = preg_match($regex, $userPython, $matches);
		if($rc === 1)
			throw new Exception("Invalid Python: use of $regex");
	}

	// Write Python file to tmp directory
	$pyFile = "/tmp/{$userid}_{$filename}";
	$outfile = "/tmp/{$userid}_{$filename}.txt";
	file_put_contents($pyFile, $userPython, LOCK_EX);

	// Add test code to file
	$challengeId = $_POST['challengeId'];
	$testCode = file_get_contents("../challenges/$challengeId.py");
	file_put_contents($pyFile, $testCode, FILE_APPEND | LOCK_EX);

	// Execute Python file (with timer)
	$command = "timeout 30 python $pyFile &> $outfile";
	system($command, $result);
	$output = file_get_contents($outfile);
	
	// If Python error occurred
	if($result !== 0)
		returnError(NULL, NULL, NULL, "Python error: $output");

	// Test output against solution
	$solution = file_get_contents("../challenges/$challengeId.sol");
	$testLines = explode("\n", $testCode);
	$outputLines = explode("\n", $output);
	$solutionLines = explode("\n", $solution);
	for($i = 0; $i < count($testLines); $i++)
	{
		if(!isset($outputLines[$i]))
			returnError($testLines[$i], $solutionLines[$i], NULL, "Not enough lines in output");
		if($outputLines[$i] !== $solutionLines[$i])	
			returnError($testLines[$i], $solutionLines[$i], $outputLines[$i], "Incorrect value");
	}

	// Mark challenge complete and save code in forum
	require_once(__DIR__ . "/../db/DBchallenges.php");
	$db = new DBchallenges();
	$rc = $db->markChallengeComplete($userid, $challengeId);
	if($rc != 0)
		$db->returnError("Error marking complete");
	$rc = $db->updateChallengeCode($userid, $challengeId, $userPython);
	if($rc != 0)
		$db->returnError("Error updating code");
	$db->commit();
	echo json_encode(array("correct" => true));
}
catch(Exception $e)
{
	die($e->getMessage());
}
