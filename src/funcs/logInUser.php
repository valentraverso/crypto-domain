<?php
require_once('../controllers/pathControllers.php');
require_once(BASE_PATH.'/src/controllers/UserController.php');

$email = $_POST['email'];
$password = md5($_POST['password']);

$user = new Users();
$userMatched = $user->readUserData("WHERE email='$email' AND password='$password' AND status = '1'");

if ($userMatched){
    session_start();
    $_SESSION['id_user'] = $userMatched['id_user'];
    header('Location: ../../index.php');
}else{
    header('Location: ../../user/login.php?msg=error');
}
?>