<?php

try
{
	require_once('common.php');

	buildChapterList();

	require_once('html/header.php');

	if(isset($_REQUEST['chapter']))
		showChapter($_REQUEST['chapter']);
	else
		showHome();

	require_once('html/footer.php');
}
catch(Exception $e)
{
	die($e->getMessage());
}
