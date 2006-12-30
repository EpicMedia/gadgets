<?php
	$request    =	$_GET['u'];
	$user		=	$_GET['n'];
	$password	=	$_GET['p'];

	$session	=	curl_init();

	curl_setopt($session, CURLOPT_URL				, $request);
	curl_setopt($session, CURLOPT_HTTPAUTH			, CURLAUTH_BASIC);
	curl_setopt($session, CURLOPT_USERPWD			, $user . ":" . $password);
	curl_setopt($session, CURLOPT_POST				, false);
	curl_setopt($session, CURLOPT_HEADER			, false);
	curl_setopt($session, CURLOPT_HTTPHEADER		, array('Accept: application/xml', 'Content-Length: 0', 'Content-Type: application/xml'));
	curl_setopt($session, CURLOPT_RETURNTRANSFER	, true);

	if(ereg("^(https)",$request)) {
		curl_setopt($session, CURLOPT_SSL_VERIFYPEER, false);
	}

	$response   = curl_exec($session);
	curl_close($session);

	header('Content-Type: application/xml');

	echo $response;
?>