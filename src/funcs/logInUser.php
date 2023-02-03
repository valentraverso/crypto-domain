<?php
require_once('../controllers/UserController.php');

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