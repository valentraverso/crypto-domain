<?php
// Head
include_once './templates/head.php';

// Actual view
include_once './templates/index.php';

$url = "https://bitpay.com/api/rates";
$json = json_decode(file_get_contents($url));
$dollar = $btc = 0;
foreach($json as $obj){
  echo '1 bitcoin = $'. $obj->rate .' '. $obj->name .' ('. $obj->code .')<br>';
}