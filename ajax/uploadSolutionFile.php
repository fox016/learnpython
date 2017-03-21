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
	$binaryFile = file_get_contents($tmpName);

	// Blacklist Python code TODO
	$blacklist = array();

	// Write Python file to tmp directory
	$pyFile = "/tmp/{$userid}_{$filename}";
	$outfile = "/tmp/{$userid}_{$filename}.txt";
	file_put_contents($pyFile, $binaryFile);

	// Add test code to file
	$challengeId = $_POST['challengeId'];
	$testCode = file_get_contents("../challenges/$challengeId.py");
	file_put_contents($pyFile, $testCode, FILE_APPEND | LOCK_EX);

	// Execute Python file
	$command = "python $pyFile > $outfile";
	system($command, $result);
	$output = file_get_contents($outfile);
	
	// If Python error occurred
	if($result !== 0)
		returnError(NULL, NULL, NULL, "Python error");

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
	$rc = $db->updateChallengeCode($userid, $challengeId, $binaryFile);
	if($rc != 0)
		$db->returnError("Error updating code");
	$db->commit();
	echo json_encode(array("correct" => true));
/*
	// TODO fork for timer (run python process in background, kill background process when timer runs out)

	$parent_pid = null;
	$child_pid = null;

	$pid = pcntl_fork();
	if($pid == -1)
		throw new Exception("Failed to start timer");
	else if($pid) // Parent
	{
		$parent_pid = posix_getpid();
		for($i = 0; $i < 40; $i++)
		{
			sleep(1);
			echo "$i\n";
		}
		posix_kill($child_pid, SIGTERM);
	}
	else // Child
	{
		$child_pid = posix_getpid();
		sleep(10);
		posix_kill($parent_pid, SIGTERM);
		die("Time's up");
	}

	echo json_encode(array("correct" => true));
*/
}
catch(Exception $e)
{
	die($e->getMessage());
}
