<?php

include('constants.php');

function callAPI($method, $url, $data){
	global $API_CLIENT_KEY;
	global $API_CLIENT_SECRET;
	
	$curl = curl_init();
	switch ($method){
		case "POST":
			curl_setopt($curl, CURLOPT_POST, 1);
			if ($data)
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			break;
		case "PUT":
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
			if ($data)
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
			break;
		default:
			if ($data)
				$url = sprintf("%s?%s", $url, http_build_query($data));
	}
	// OPTIONS:
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'Authorization: sso-key '.$API_CLIENT_KEY.':'.$API_CLIENT_SECRET,
		'Content-Type: application/json',
	));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	//curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	// EXECUTE:
	$result = curl_exec($curl);
	if(!$result){
		if(strcmp($method, "PUT"))//If PUT method, then no response is received
			die("Connection Failure");
	}
	curl_close($curl);
	return $result;
}

?>