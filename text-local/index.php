<?php
	


	// Account details
	$apiKey = urlencode('hstIXnOGjEc-wulrfQ1WjUzBnBlT33HexzxaY2xe86');
	
	// Message details
	$numbers = array(9656144192);
	$sender = urlencode('Binsha');
	$message = rawurlencode('Binsha testing sms api');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.txtlocal.com/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>
