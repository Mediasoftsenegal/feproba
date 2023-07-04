<?php
	require 'connexion.php';

	$user_login = 'moustapha@sismar.sn';
	$api_key = '1EXaUXENt6HgCoPI3906fr3oVsLJo1DJ'; 
	$sms_recipients = array('+33600000000');
	$sms_text = 'test text ' . date('Y-m-d H:i:s');
	$sms_type = SMS_MONDE; // ou encore SMS_STANDARD,SMS_MONDE
	$sms_mode = INSTANTANE; // ou encore DIFFERE
	$sms_sender = 'FEPROBA';

?>