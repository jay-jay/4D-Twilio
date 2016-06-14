# 4D-Twilio
A 4D v14 Component for Twilio

It will work with 4D v15 as well. Just convert this component.

## This component is under development.... Test before using in production.


## Be sure that you have an active Twilio account. The following keys are required
1. sid
2. token
3. number - Your mobile number. If you use this in your config, messaging_service_sid has no effect
4. messaging_service_sid (OPTIONAL) - In order to use this, number should be left empty in the config. Nice to have if you want to show your Brand name to your SMS receipient rather than your mobile number.

## Installation
1. Drop Twilio.4dbase into your 4D Application's Components folder
2. Under Resources, rename config-sample.json to config.json
3. Enter your Twilio keys in your config
4. Now your ready to rock and roll.

## Messaging
$sent:=_twl_sms_send("+4712345678";"Hey! I am your SMS")

## VOICE
In roadmap...

Contributos are highly appreciated.
