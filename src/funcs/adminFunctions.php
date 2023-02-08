<?php
$apiKey = $_GET['apiKey'];

if($apiKey !== 'AdminInDaHood'){
    header('location:../src/hackerPage.php');
    die();
}

$idUser = $_GET['idUser']; 
$typeAction = $_GET['typeAction'];

require_once "../controllers/pathControllers.php";
require_once BASE_PATH."/src/controllers/UserController.php";
require_once BASE_PATH.'/src/controllers/WalletController.php';
require_once BASE_PATH.'/src/apiCoin.php';

switch($typeAction){
    case 'deactivate':
        $user = new Users();
        $user->disactivateUser($idUser);
        break;
    case 'activate':
        $user = new Users();
        $user->activateUser($idUser);
        break;
    case 'balance':
        $wallet = new Wallet();
        $coins = new Coins(); 

$walletAdmin = $wallet->getWallet("WHERE id_wallet = '$idUser'");
$objWallet = json_decode($walletAdmin['json_coins']);

$getCotizacion = $coins->setCoin("BTC,ETH,LUN,DOGE", "EUR");

$totales = $wallet->getTotales($getCotizacion, $objWallet);

echo json_encode($totales);
break; 
}
?>