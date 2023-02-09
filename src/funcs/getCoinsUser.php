<?php
session_start();

$idUser = $_SESSION['id_user'];

require_once "../controllers/pathControllers.php";
require_once BASE_PATH.'/src/controllers/WalletController.php';

$wallet = new Wallet();
$walletAdmin = $wallet->getWallet("WHERE id_wallet = '$idUser'");
$total = $walletAdmin['json_coins'];

echo $total;