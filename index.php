<?php

try
{
	require_once('common.php');

	buildChapterList();

	include_once('html/header.php');

	if(isset($_REQUEST['chapter']))
		showChapter($_REQUEST['chapter']);
	else if(isset($_REQUEST['challengeSet']))
		showChallengeSet($_REQUEST['challengeSet']);
	else if(isset($_REQUEST['challenge']))
		showChallenge($_REQUEST['challenge']);
	else
		showHome();

	include_once('html/footer.php');
}
catch(Exception $e)
{
	die($e->getMessage());
}
