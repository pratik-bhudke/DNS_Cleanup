<?php

header('Content-Type: application/json');

include('methods.php');

$get_data = callAPI('GET', $GET_DNS_ENDPOINT, false);
echo $get_data;

?>