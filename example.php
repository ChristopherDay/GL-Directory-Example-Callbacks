<?php




	$keys array(
		"request" => "Your unique 64 character request key",
		"response" => "Your unique 64 character response key"
	);

	$todayUTC = gmdate("Y-m-d");
	$userID = $_REQUEST["user"];
	$responseKey = $_REQUEST["key"];

	$key = hash("sha256", $todayUTC . $userID . $keys["response"]);

	if ($key === $responseKey) {
		/* valid vote for today */
	} else {
		/* invalid vote for today */
	}