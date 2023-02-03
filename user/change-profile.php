<?php
session_start();
require_once '../src/controllers/pathControllers.php';

$pageTitle = 'Edit your profile - Crypto Domain';

// Actual view
include_once BASE_PATH.'/src/templates/user/profileEditUser.php';