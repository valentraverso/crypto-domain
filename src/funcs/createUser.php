<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../controllers/UserController.php');

$user = new Users();
$idUser = $user->readUserData("ORDER BY id_user DESC");

$idWallet = $idUser['id_user'] + 1;
$email = $_POST['email'];
$password = md5($_POST['password']);
$firstName = $_POST['first-Name'];
$lastName = $_POST['last-Name'];
$birthDate = $_POST['birth-Date'];
$favCoin = $_POST['favorite-coin'];
$status = 1; //0 desactivado 1 active
$role = 0; //0 user 1 admin


$user->createUser($idWallet, $email, $password, $firstName, $lastName, $birthDate, $favCoin, $status, $role);