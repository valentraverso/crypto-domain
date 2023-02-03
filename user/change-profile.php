<?php

session_start();
if(!isset($_SESSION['id_user'])){
  header('Location: ../');
} 
require_once '../src/controllers/pathControllers.php';

$pageTitle = 'Edit your profile - Crypto Domain';

// Actual view
include_once BASE_PATH.'/src/templates/user/profileEditUser.php';