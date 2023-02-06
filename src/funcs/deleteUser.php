<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../controllers/pathControllers.php"; 
require_once ("../controllers/UserController.php");
require_once ("../controllers/WalletController.php");

session_start();
$idUser = $_SESSION['id_user'];


$user = new Users();

$user->deleteUser($idUser);

$wallet = new Wallet();
$wallet->deleteWallet($idUser);

session_destroy();
header('Location: ../../index.php');




?>