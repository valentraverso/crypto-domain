<?php
require_once '../controllers/pathControllers.php';
require_once BASE_PATH . "/src/apiCoin.php";
require_once BASE_PATH.'/src/controllers/UserController.php';
require_once BASE_PATH.'/src/controllers/transactionsController.php';
require_once BASE_PATH.'/src/controllers/WalletController.php';

session_start();
$idUser = $_SESSION["id_user"];

$coin = $_POST["coin"];
$amount = $_POST["amount"];
$recieverEmail = $_POST['reciever'];

function getWalletReciever($recieverEmail){
    $user = new Users();
    $queryUser = $user->readUserData("WHERE email = '$recieverEmail'");

    $idUser = $queryUser['id_user'];

    if(!$idUser){
        header('location:../../user/transfer-user.php?msgError=user');
        die();
    }

    $wallet = new Wallet();
    $queryWallet = $wallet->getWallet("WHERE id_user = '$idUser'");

    $userWallet = $queryWallet['id_wallet'];

    return $userWallet;
}

$idRecieverWallet = getWalletReciever($recieverEmail);

$wallet = new Wallet();
$senderWallet = $wallet->getWallet("WHERE id_user = '$idUser'");

$coins = new Coins();
$queryCoins = $coins->setCoin($coin, "EUR");

$actualCotization = $queryCoins['RAW'][$coin]['EUR']['PRICE'];

$transaction = new Transaction();
$createTransaction = $transaction->createTransaction($idRecieverWallet, $senderWallet['id_wallet'], $coin, $amount, $actualCotization);

$coinToTransfer = "$.$coin";

$monedasJson = json_decode($senderWallet['json_coins']);
$restActualWallet = $monedasJson->$coin - $amount;

$sendRestCoins = $wallet->updateWallet($senderWallet['json_coins'], $coinToTransfer, $restActualWallet, $senderWallet['id_wallet']);

$recieverWallet = $wallet->getWallet("WHERE id_wallet = '$idRecieverWallet'");

$recieverMonedas = json_decode($recieverWallet['json_coins']);
$sumRecieverWallet = $recieverMonedas->$coin + $amount;

$addCoinsReciever = $wallet->updateWallet($recieverWallet['json_coins'], $coinToTransfer, $sumRecieverWallet, $idRecieverWallet);

header('location:../../user/wallet-user.php');