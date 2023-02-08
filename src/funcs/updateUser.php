<?php
session_start();
$idUser = $_SESSION['id_user'];

require_once('../controllers/pathControllers.php');
require_once(BASE_PATH.'/src/controllers/UserController.php');

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];

$user = new Users();

$user->updateUserData($idUser, $firstName, $lastName);
header('Location: ../../user/change-profile.php');
?>