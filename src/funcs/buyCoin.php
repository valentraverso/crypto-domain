<?php

require_once "../controllers/pathControllers.php";
require_once BASE_PATH . "/src/controllers/CoinsController.php";
// require_once BASE_PATH . "/src/controllers/DbConnection.php";
require_once BASE_PATH . "/src/apiCoin.php";

/**
 * @ $quantity_money - our money to invest;
 * @ $selected_coin - name of coin;
 * @ $price - current price;
 * @ $quantity_coin - how much coins we can buy with $quantity_money;
 */

session_start();
$walletRec = $_SESSION["id_user"];

if (isset($_POST['quantity-money']) && isset($_POST['select-coin'])) {
    $quantity_money = $_POST['quantity-money'];
    $selected_coin = $_POST['select-coin'];
  
    $displayCoin = new Coins();

    $price = $displayCoin->setCoin($selected_coin, "EUR")["RAW"][$selected_coin]["EUR"]["PRICE"];
    $quantity_coin = $quantity_money/$price;

    $transaction = new Coin();
    $transaction->createTransaction("1", $walletRec , "1", $quantity_coin, $price);

  header("Location: ../../user/wallet-user.php"); 
  } 
  
?>