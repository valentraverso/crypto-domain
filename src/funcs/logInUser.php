<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../controllers/pathControllers.php');
require_once(BASE_PATH.'/src/controllers/UserController.php');

$email = $_POST['email'];
$password = md5($_POST['password']);

$user = new Users();
$userMatched = $user->readUserData("WHERE email='$email' AND password='$password'");

if ($userMatched){
    session_start();
    $_SESSION['email'] = $email;
    header('Location: ../../index.php');
}else{
    header('Location: ../../user/login.php?msg=error');
}
?>