<?php

require_once './src/controllers/pathControllers.php';
// Index when user is logged in 
// include_once './src/templates/index-logged.php';

$pageTitle = 'The best web to buy cripto';

// Actual view
session_start();
// echo $_SESSION['email'];
if(isset($_SESSION['email'])){

    include_once BASE_PATH . '/src/templates/user/index-logged.php';

} else {

    include_once BASE_PATH.'/src/templates/index.php';
}