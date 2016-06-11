# 4D-Twilio
A 4D Component for Twilio

## This component is still in under development

Be sure that you have an active Twilio account. The following keys are required
1. sid
2. toke
3. number (OPTIONAL) - If you use this in your config, messaging_service_sid has no effect
4. messaging service sid (OPTIONAL) - In order to use this, number should not be added in config. Nice to have if you want to show your Brand name to you SMS receipient rather than a mobile-number

# Installation
1. Drop Twilio.4dbase into your 4D Application's Components folder
2. Under Resources, rename config-sample.json to config.sample
3. Enter your Twilio keys
4. Now your ready to rock and roll.

# Messaging
$sent:=_twl_sms_send("+4712345678";"Hey! I am your SMS")
