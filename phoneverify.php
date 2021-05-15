    <?php
    	// Account details
    	$apiKey = urlencode('hTM8sodpcGI-6VOnDvyji9QpTedDqwI3y0UGgzTaKg');
    	
    	// Message details
    	$numbers = array($_POST["phone"]);
    	$sender = urlencode('TXTLCL');
        $otp = $_POST["otp"];
    	$message = rawurlencode('Your PCE-LM-Portal activation key is ' . $otp);
        echo $message;
     
    	$numbers = implode(',', $numbers);
     
    	// Prepare data for POST request
    	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    	// Send the POST request with cURL
    	$ch = curl_init('https://api.textlocal.in/send/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
        echo $ch, $array;
    	curl_close($ch);
    	
    	// Process your response here
    	echo $response;
    ?>