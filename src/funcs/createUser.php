<?php
$email = $_POST['email'];
$password = md5($_POST['password']);
$firstName = $_POST['first-Name'];
$lastName = $_POST['last-Name'];
$birthDate = $_POST['birth-Date'];
$favCoin = $_POST['favorite-coin'];

require_once('.../controllers/userControllers.php');

$user = new Users();

$user->createUser($email, $password, $firstName, $lastName, $birthDate, $favCoin);