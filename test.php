<?php

require_once 'httpclient.php';

$username = "curer";
$password = "88888888";
$params = array(
	'media' => "@/Applications/XAMPP/xamppfiles/htdocs/httpclient/test.jpg"
);

$client = new HTTPClient();
$client->timeout = 3600;

$headers = array();
$info = $username . ":" . $password;
$authorization = "Basic " . base64_encode($info);
$headers[] = "Authorization: $authorization";

$url = 'http://192.168.1.200/statusnet/index.php/api/file/upload.json';
$response = $client->post($url, $params, true, $headers);
$statuscode = $client->http_code;

var_dump($response)

?>