<?php
require_once './src/controllers/pathControllers.php';

$pageTitle = 'The best web to buy cripto';

// Actual view
session_start();
if(isset($_SESSION['id_user'])){
    include_once BASE_PATH . '/src/templates/user/index-logged.php';
} else {
    include_once BASE_PATH.'/src/templates/index.php';
}