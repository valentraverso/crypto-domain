<?php
$apiKey = $_GET['apiKey'];
$idUser = $_GET['idUser']; 

if($apiKey !== 'AdminInDaHood'){
    header('location:../src/hackerPage.php');
    die();
}

require_once "../controllers/pathControllers.php";
require_once BASE_PATH."/src/controllers/UserController.php";

$user = new Users();
$user->disactivateUser($idUser);
?>