<?php

try
{
	// Include common functions and global vars
	require_once('common.php');

	// Initiate chapter list
	buildChapterList();

	// Include HTML header and nav bar
	include_once('html/header.php');

	// Dynamic content
	if(isset($_REQUEST['chapter']))
		showChapter($_REQUEST['chapter']);
	else if(isset($_REQUEST['challengeSet']))
		showChallengeSet($_REQUEST['challengeSet']);
	else if(isset($_REQUEST['challenge']))
		showChallenge($_REQUEST['challenge']);
	else if(isset($_REQUEST['forum']))
		showChallenge($_REQUEST['forum'], true);
	else
		showHome();

	// Close tags from HTML header
	include_once('html/footer.php');
}
catch(Exception $e)
{
	die($e->getMessage());
}
