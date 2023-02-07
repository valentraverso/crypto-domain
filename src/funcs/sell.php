<?php
require_once('../controllers/pathControllers.php');
require_once BASE_PATH . "/src/apiCoin.php";
require_once(BASE_PATH.'/src/controllers/transactionsController.php');

session_start();

$idUser = $_SESSION["id_user"];
$coin = $_GET["coin"];
$amount = $_GET["amount"];

$showCoin = new Coins();
$price = $showCoin->setCoin($coin, "EUR")["RAW"][$coin]["EUR"]["PRICE"];

$amountCoin = bcdiv($amount/$price,"1",5);

$walletRec = 0;

$walletSend = $_SESSION["id_user"];



$transaction = new Transaction();
$transaction -> createTransaction($walletSend, $walletRec, $coin, $amountCoin, $price);

header("Location: ../../user/wallet-user.php");
