<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once '../controllers/pathControllers.php';
require_once BASE_PATH.'/src/controllers/WalletController.php';

$coin = new Wallet();

$money = $_POST['money'];

$coinQuery = $coin->getWallet("WHERE id_user = ".$_SESSION['id_user']);
$monedasJson = json_decode($coinQuery['json_coins']);
$monedas = $coinQuery['json_coins'];
$idWallet = $coinQuery['id_wallet'];

$newEur = $monedasJson->EUR + $money;

$coin->updateWallet($monedas, '$.EUR', $newEur, $idWallet);
header('Location: ../../user/wallet-user.php');
?>