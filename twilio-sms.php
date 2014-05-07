<?php
require('Services/Twilio.php');

$account_sid = "ACXXXXXX"; // Your Twilio account sid
$auth_token = "YYYYYY"; // Your Twilio auth token

$client = new Services_Twilio($account_sid, $auth_token);
$message = $client->account->messages->sendMessage(
  '+1xxxxyyyy', // From a Twilio number in your account
  '+8180xxxxyyyy', // Text any number
  "TwilioならSMSの送信も簡単です。"
);

print $message->sid;
