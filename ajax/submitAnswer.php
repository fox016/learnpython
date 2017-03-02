<?php

try
{
	require_once(__DIR__ . '/../common.php');
	$userid = getCookie('userid');
	if($userid === null)
		die("You cannot submit an answer without logging in");

	require_once(__DIR__ . "/../db/DBchallenges.php");
	$db = new DBchallenges();
	$challenge = $db->getChallenge($_POST['challenge_id'], $userid);
	appLog("save answer", LOG_DEBUG, json_encode($challenge));

	// If already answered
	if($challenge['completed_date_time'] !== null)
		die("You have already successfully completed this challenge");

	// If incorrect
	if($challenge['solution'] !== $_POST['solution'])
		die(json_encode(array("correct" => false)));

	// If correct
	$rc = $db->markChallengeComplete($userid, $challenge['id']);
	if($rc != 0)
		die("Error marking complete: " . $rc);
	$db->commit();
	die(json_encode(array("correct" => true)));

}
catch(Exception $e)
{
	die($e->getMessage());
}
