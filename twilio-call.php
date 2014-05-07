<?php
  require("Services/Twilio.php");

	$tel_from = "+8150xxxxyyyy"; // From a Twilio number in your account : CallerID
	$tel_to = "+8180xxxxyyyy"; // Call any number

	$sid = "AC**********************"; // Your Twilio account sid
	$token = "**********************"; // Your Twilio auth token

	$client = new Services_Twilio($sid, $token);
	$call = $client->account->calls->create(
			$tel_from,
			$tel_to,
			'http://URL/twiML/call-test.php'
	);
?>
