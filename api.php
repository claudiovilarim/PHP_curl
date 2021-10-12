<?php

// MÉTODO HTTP
echo "Método: ";
echo $_SERVER['REQUEST_METHOD'];
ECHO "\n";

// HEADERS
$headers = getallheaders();
print_r($headers);

// POST
echo "\nPOST:\n";
$input = file_get_contents('php://input');
$array = json_decode($input, true);
$_POST = !empty($array) ? $array : $_POST;
print_r($_POST);