<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../controllers/pathControllers.php');
require_once(BASE_PATH.'/src/controllers/UserController.php');
require_once(BASE_PATH.'/src/controllers/WalletController.php');

$user = new Users();
$idUser = $user->readUserData("ORDER BY id_user DESC");

$idWallet = $idUser['id_user'] + 1;
$email = $_POST['email'];
$password = md5($_POST['password']);
$firstName = $_POST['first-Name'];
$lastName = $_POST['last-Name'];
$birthDate = $_POST['birth-Date'];
$favCoin = $_POST['favorite-coin'];
$status = 1; //0 not active 1 active
$role = 0; //0 user 1 admin

$wallet = new Wallet();
$wallet->createWallet($idWallet);

$user->createUser($idWallet, $email, $password, $firstName, $lastName, $birthDate, $favCoin, $status, $role);

session_start();
$_SESSION['email'] = $email;
header("location: ../../index.php");



?>