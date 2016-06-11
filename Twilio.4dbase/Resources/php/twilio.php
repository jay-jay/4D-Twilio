<?php
/* 
	James Borillo
	PHP Library specific for 4D
*/

function sendSms($mobile, $message, $sid, $token, $messaging_service_sid, $mobile_from) {
    // Get the PHP helper library from twilio.com/docs/php/install
    require_once('lib/twilio/sdk/Services/Twilio.php'); // Loads the library

    $client = new Services_Twilio($sid, $token);

    $sms = $client->account->messages->create(array(
        'To' => $mobile,
        'From' => $mobile_from,
        'MessagingServiceSid' => $messaging_service_sid,
        'Body' => $message,
    ));
    
    $response = (string)$sms; // Return JSON
    
    return $response;
}
