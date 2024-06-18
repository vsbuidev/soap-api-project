<?php
require_once '../src/UserService.php';

$options = [
    'uri' => 'http://localhost/soap-api-project/public/server.php'
];
$server = new SoapServer(null, $options);
$server->setClass('UserService');
$server->handle();
