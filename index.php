<?php
require_once './src/controllers/pathControllers.php';

$pageTitle = 'The best web to buy cripto';

// Actual view
session_start();
if(isset($_SESSION['id_user'])){
    include_once BASE_PATH . '/src/templates/user/index-logged.php';
} else {
    include_once BASE_PATH.'/src/templates/index.php';
}

require_once BASE_PATH.'/src/controllers/WalletController.php';

$coin = new Wallet();

$coinQuery = $coin->getWallet("WHERE id_user = ".$_SESSION['id_user']);
$monedas = $coinQuery['json_coins'];
$idWallet = $coinQuery['id_wallet'];

$coin->updateWallet($monedas, '$.EUR', 100, 11);