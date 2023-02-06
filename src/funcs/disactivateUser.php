<?php

require_once "../controllers/pathControllers.php";
require_once "../controllers/UserController.php";

session_start();

$idUser = $_SESSION["id_user"]; 

$user = new Users();
$user->disactivateUser($idUser);

session_destroy();
header("Location: ../../index.php");

?>