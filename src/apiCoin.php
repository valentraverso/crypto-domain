<?php

class Coins{
    private $access_key = '36c48c1dc62cae4ef868c4edccc7de33';
  
    public function setCoin(){
        $initCurl = curl_init('http://api.coinlayer.com/live?access_key='.$this->access_key);

        curl_setopt($initCurl, CURLOPT_RETURNTRANSFER, true);

        $json = curl_exec($initCurl);
        curl_close($initCurl);

        $arr_result = json_decode($json, true);

        print_r($arr_result);
    }

}

$showCoin = new Coins();

echo $showCoin->setCoin();