<?php

//DNS Provider Details
$API_BASE_URL = "https://api.godaddy.com";
$API_CLIENT_KEY = "api-authentication-key";
$API_CLIENT_SECRET = "api-authentication-secret";

//Domain to query
$DOMAIN = "your-domain.com";

//Optional DNS Record Type to query
$DNS_RECORD_TYPE = "A";

//DNS Provider APIs
$GET_API = "/v1/domains/".$DOMAIN."/records/".$DNS_RECORD_TYPE;
$PUT_API = "/v1/domains/".$DOMAIN."/records/".$DNS_RECORD_TYPE;

//Calculated API Endpoint
$GET_DNS_ENDPOINT = $API_BASE_URL.$GET_API;
$PUT_DNS_ENDPOINT = $API_BASE_URL.$PUT_API;

?>