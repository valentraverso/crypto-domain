<?php

$apiKey = $_GET['apiKey'];
$idUser = $_GET['idUser'];

if($apiKey !== 'AdminInDaHood'){
    header('location:../src/hackerPage.php');
}

require_once '../controllers/pathControllers.php';
require_once BASE_PATH.'/src/controllers/WalletController.php';
require_once BASE_PATH.'/src/apiCoin.php';

$wallet = new Wallet();
$coins = new Coins(); 

$walletAdmin = $wallet->getWallet("WHERE id_wallet = '$idUser'");
$objWallet = json_decode($walletAdmin['json_coins']);

$getCotizacion = $coins->setCoin("BTC,ETH,LUN,DOGE", "EUR");

$totales = $wallet->getTotales($getCotizacion, $objWallet);

echo json_encode($totales);