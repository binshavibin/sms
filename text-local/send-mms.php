    <?php
    	// Account details
    	$apiKey = urlencode('hstIXnOGjEc-wulrfQ1WjUzBnBlT33HexzxaY2xe86');
     
    	// Message details
            $numbers = 9632587412;
    	$sender = '7412589632';
    	$message = 'Binsha Test';
    	$url = 'https://api.txtlocal.com/image-logo.png';
     
    	// Prepare data for POST request
    	$data = array('apikey' => $apiKey, 'numbers' => $numbers, 'message' => $message, 'url' => $url);
     
    	// Send the POST request with cURL
    	$ch = curl_init('https://api.txtlocal.com/send_mms/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	curl_close($ch);
     
    	// Process your response here
    	echo $response;
    ?>
