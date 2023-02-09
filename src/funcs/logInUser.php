<?php
require_once('../controllers/pathControllers.php');
require_once(BASE_PATH.'/src/controllers/UserController.php');

$email = $_POST['email'];
$password = md5($_POST['password']);

$user = new Users();
$userMatched = $user->readUserData("WHERE email='$email' AND password='$password'");



if ($userMatched){
    switch($userMatched["status"]){
        case "0":
            header('Location: ../../user/login.php?msg=inactive');
            break;
        case "1":
            session_start();
            $_SESSION['id_user'] = $userMatched['id_user'];
            header('Location: ../../index.php');
            break;
    }
}else{
    header('Location: ../../user/login.php?msg=error');
}
?>