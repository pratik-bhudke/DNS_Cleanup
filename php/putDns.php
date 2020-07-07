<?php

include('methods.php');

$data = $_POST['data'];
if($data) {
	$get_data = callAPI('PUT', $PUT_DNS_ENDPOINT, $data);
	if(!$get_data)
		echo "true";
	else
		echo "false";
} else {
	echo "false";
}

?>