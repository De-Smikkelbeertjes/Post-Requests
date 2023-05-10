<?php

include ('./library/Api.php');

$api = new ApiLibrary('https://example.com/api', 'YOUR_API_KEY');
$data = [
'name' => '',
'email' => '',
'phone' => ''
];
$result = $api->createData($data);