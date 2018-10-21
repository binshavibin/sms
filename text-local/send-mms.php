    <?php
    	// Account details
    	$apiKey = urlencode('Your apiKey');
     
    	// Message details
            $numbers = 447123456789 .",". 447987654321;
    	$sender = 'YourNumber';
    	$message = 'This is your message';
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
