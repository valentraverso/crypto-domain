<?php

class Coins{
    private $accessKey = 'e3319673d7c34bea9da98ecfca6b05dacca0a98fab41749c867516f41458121a';
    private $targetCoin = 'EUR';
    
  
    public function setCoin($nameCripto, $fiat){
        $initCurl = curl_init('https://min-api.cryptocompare.com/data/pricemultifull?fsyms='. $nameCripto.'&tsyms='.$fiat.'&api_key='.$this->accessKey);

        curl_setopt($initCurl, CURLOPT_RETURNTRANSFER, true);

        $json = curl_exec($initCurl);
        curl_close($initCurl);

        $arr_result = json_decode($json, true);

        return $arr_result;
    }

}
