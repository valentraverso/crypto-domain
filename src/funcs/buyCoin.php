<?php

require_once "../controllers/pathControllers.php";
require_once BASE_PATH . "/src/controllers/CoinsController.php";
require_once BASE_PATH . "/src/controllers/WalletController.php";
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
    $quantity_coin = bcdiv($quantity_money/$price,"1",5);

$wallet = new Wallet();

$walletUser = $wallet->getWallet("WHERE id_user=$walletRec"); // usuario
$coinObjUser = $walletUser['json_coins'];
$idWalletUser = $walletUser['id_wallet'];
$actualWallet = (json_decode($coinObjUser, true)["EUR"]); // EUR en wallet

$walletAdmin = $wallet->getWallet("WHERE id_user=0"); // admin
$coinObjAdmin = $walletAdmin['json_coins'];
$idWalletAdmin = $walletUser['id_wallet'];
$eurMaster = (json_decode($coinObjAdmin,true)[$selected_coin]); //coins en wallet admin

if($actualWallet >= $quantity_money && $eurMaster >= $quantity_coin){
    echo "Buy it!";

  $selected_coin = $_POST['select-coin'];
    echo $selected_coin;
    print_r($actualWallet);
    echo "<hr>" . $quantity_money;
    echo $walletRec; 

  $transaction = new Coin();

  $transaction->createTransaction("0", $walletRec , "1", $quantity_coin, $price); 

  $wallet->updateWallet($coinObjUser, '$.EUR', $actualWallet - $quantity_money, $walletRec); //user: eur

  $walletUser = $wallet->getWallet("WHERE id_user=$walletRec"); 
  $coinObjUser = $walletUser['json_coins'];
  $idWalletUser = $walletUser['id_wallet'];
  $walletCoins = (json_decode($coinObjUser,true)[$selected_coin]);

  $wallet->updateWallet($coinObjUser, '$.'.$selected_coin.'', $walletCoins+$quantity_coin, $walletRec); //user: coin

  $walletAdmin = $wallet->getWallet("WHERE id_user=0"); 
  $coinObjAdmin = $walletAdmin['json_coins'];
  $idWalletAdmin = $walletUser['id_wallet'];
  $eurMaster = (json_decode($coinObjAdmin, true)["EUR"]); 

  $wallet->updateWallet($coinObjAdmin, '$.EUR', $eurMaster + $quantity_money, 0); //admin: eur

  $walletAdmin = $wallet->getWallet("WHERE id_user=0"); 
  $coinObjAdmin = $walletAdmin['json_coins'];
  $idWalletAdmin = $walletUser['id_wallet'];
  $coinMaster = (json_decode($coinObjAdmin,true)[$selected_coin]);

  $wallet->updateWallet($coinObjAdmin, '$.'.$selected_coin.'', $coinMaster-$quantity_coin, 0); //admin: coin

   header("Location: ../../user/wallet-user.php");  

}else{
    header("Location: ../../user/buy-coins.php?msg=msg");
    die();
}
} 

?>
