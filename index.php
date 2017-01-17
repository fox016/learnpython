<?php

try
{
	require_once('html/header.php');

	if(isset($_REQUEST['chapter']))
		require_once("html/chapter" . $_REQUEST['chapter'] . ".php");
	else
		require_once('html/home.php');

	require_once('html/footer.php');
}
catch(Exception $e)
{
	die($e->getMessage());
}
