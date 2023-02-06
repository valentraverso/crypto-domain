<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



/*

$ch = curl_init('http://api.coinlayer.com/live?access_key='.$access_key);

curl_setopt($ch, CURLOPT_RETURNTRABSFER, true);


$response = curl_exect($ch);
curl_close($ch);

$data = json_decode($response, true);


echo '<pre>';
print_r($data);*/

//
$access_key = '723502a750375a37c07eba3c8eeca19b';

$ch = curl_init('http://api.coinlayer.com/list?access_key='.$access_key);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$arr_result = json_decode($json, true);

echo '<pre>';
print_r($arr_result);



?>