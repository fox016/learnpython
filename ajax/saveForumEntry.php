<?php

try
{
	require_once(__DIR__ . '/../common.php');
	$userid = getCookie('userid');
	if($userid === null)
		die("You cannot submit a forum entry without logging in");

	require_once(__DIR__ . "/../db/DBchallenges.php");
	$db = new DBchallenges();
	$challenge = $db->getChallenge($_POST['challengeId'], $userid);

	// If not answered
	if($challenge['completed_date_time'] === null)
		die("You must complete the challenge before submitting a forum entry");

	// Update code
	$rc = $db->updateChallengeCode($userid, $challenge['challenge_id'], $_POST['codeInput']);
	if($rc != 0)
		die("Error saving to forum: " . $rc);
	$db->commit();
	die(json_encode(array("rc" => $rc)));
}
catch(Exception $e)
{
	die($e->getMessage());
}
