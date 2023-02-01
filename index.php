<?php
// Head
include_once './src/templates/head.php';

//Navbar
include_once './src/templates/navbar.php';

// Actual view
include_once './src/templates/index.php';

$url = "https://bitpay.com/api/rates";
$json = json_decode(file_get_contents($url));
$dollar = $btc = 0;
foreach($json as $obj){
  echo '1 bitcoin = $'. $obj->rate .' '. $obj->name .' ('. $obj->code .')<br>';
}