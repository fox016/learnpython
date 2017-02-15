<?php

try
{
	require_once(__DIR__ . '/../vendor/autoload.php');
	require_once(__DIR__ . '/../common.php');
	require_once(__DIR__ . '/../../util/util-security.php');

	$id_token = $_POST['id_token'];
	$client = new Google_Client(['client_id' => CLIENT_ID]);
	$payload = $client->verifyIdToken($id_token);
	if($payload)
	{
		$userid = $payload['sub'];
		//$cookie = buildCookie('userid', $userid);
		//echo json_encode($cookie);
	}
	else
		throw new Exception("Invalid Google token");
}
catch(Exception $e)
{
	die($e->getMessage());
}
