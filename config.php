<?php
	session_reset();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("264762211997-4fg27s5bqmuoh0kqai0v2m064aaiip14.apps.googleusercontent.com");
	$gClient->setClientSecret("aIViTSt09uQYQF2ammGiGM7h");
	$gClient->setApplicationName("Voting");
	$gClient->setRedirectUri("http://127.0.0.1/charity/votetime.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
