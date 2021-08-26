<?php

	$responseKey = "Your unique 64 character response key";
	$todayUTC = gmdate("Y-m-d");
	$userID = $_REQUEST["user"];
	$responseKey = $_REQUEST["key"];

	$key = hash("sha256", $todayUTC . $userID . $responseKey);

	if ($key === $responseKey) {
		/* valid vote for today */
	} else {
		/* invalid vote for today */
	}