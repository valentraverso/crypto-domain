<?php
require_once '../src/controllers/pathControllers.php';

$pageTitle = 'Wallet';

session_start();

$id = $_SESSION['id_user'];

require_once BASE_PATH.'/src/controllers/WalletController.php';

$wallet = new Wallet;

$coin = $wallet->getWallet("WHERE id_user=$id");
$coinObj = json_decode($coin['json_coins']);

include BASE_PATH.'/src/templates/user/walletUser.php';
?>