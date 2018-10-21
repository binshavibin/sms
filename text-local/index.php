

<?php
	// Textlocal account details
	$username = 'youremail@address.com';
	$hash = 'Your API hash';

	// Prepare data for POST request
	$data = array('username' => $username, 'hash' => $hash);

	// Send the POST request with cURL
	$ch = curl_init('http://api.txtlocal.com/get_templates/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);

	// Process your response here
	echo $response;
?>
