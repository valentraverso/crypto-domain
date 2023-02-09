<?php
require_once('../controllers/pathControllers.php');
require_once BASE_PATH . "/src/apiCoin.php";
require_once(BASE_PATH.'/src/controllers/transactionsController.php');
require_once(BASE_PATH.'/src/controllers/WalletController.php');

session_start();
$idUser = $_SESSION["id_user"];

$coin = $_POST["coin"];
$amount = $_POST["amount"];

$showCoin = new Coins();
$price = $showCoin->setCoin($coin, "EUR")["RAW"][$coin]["EUR"]["PRICE"];

$amountCoin = bcdiv($amount/$price,"1",5);

$wallet = new Wallet();

$walletUser = $wallet->getWallet("WHERE id_user=$idUser");
$coinObjUser = ($walletUser['json_coins']);
$coinUser= (json_decode($coinObjUser,true)[$coin]);

$walletUser = $wallet->getWallet("WHERE id_user=$idUser");
$coinObjUser = ($walletUser['json_coins']);
$eurUser= (json_decode($coinObjUser,true)["EUR"]);

$walletMaster = $wallet->getWallet("WHERE id_user=0");
$coinObjMaster = ($walletMaster['json_coins']);
$eurMaster = (json_decode($coinObjMaster,true)["EUR"]);

$walletMaster = $wallet->getWallet("WHERE id_user=0");
$coinObjMaster = ($walletMaster['json_coins']);
$coinMaster = (json_decode($coinObjMaster,true)[$coin]);


if($eurMaster - $amount >= 0 && $coinUser - $amountCoin >= 0 ){
    echo "You can sell";
    $walletRec = 0;
    
    $walletSend = $_SESSION["id_user"];
    
    
    
    $transaction = new Transaction();
    $transaction -> createTransaction($walletSend, $walletRec, $coin, $amountCoin, $price);
    
    
    $wallet->updateWallet($coinObjMaster, '$.EUR',$eurMaster - $amount,0);
    
    $walletMaster = $wallet->getWallet("WHERE id_user=0");
    $coinObjMaster = ($walletMaster['json_coins']);
    $coinMaster = (json_decode($coinObjMaster,true)[$coin]);
    $eurMaster = (json_decode($coinObjMaster,true)["EUR"]);
    
    $wallet->updateWallet($coinObjMaster, '$.'.$coin.'',$coinMaster + $amountCoin, 0);
    
    
    $wallet->updateWallet($coinObjUser, '$.'.$coin.'',$coinUser - $amountCoin, $idUser);
    $walletUser = $wallet->getWallet("WHERE id_user=$idUser");
    $coinObjUser = ($walletUser['json_coins']);
    $eurUser= (json_decode($coinObjUser,true)["EUR"]);

    $wallet->updateWallet($coinObjUser, '$.EUR',$eurUser + $amount,$idUser);
    
    header("Location: ../../user/wallet-user.php");
} else{
    echo "You can not sell";
    header("Location: ../../user/sell-coins.php?money=noMoney");
}





