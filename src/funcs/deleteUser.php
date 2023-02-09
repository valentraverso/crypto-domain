<?php
require_once "../controllers/pathControllers.php"; 
require_once "../controllers/UserController.php";
require_once "../controllers/WalletController.php";

session_start();
$idUser = $_SESSION['id_user'];

$user = new Users();
$user->deleteUser($idUser);

$wallet = new Wallet();
$wallet->deleteWallet($idUser);

session_destroy();
header('Location: ../../index.php');
?>