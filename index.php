<?php
require_once './src/controllers/pathControllers.php';
// Index when user is logged in 
// include_once './src/templates/index-logged.php';

$pageTitle = 'The best web to buy cripto';

// Actual view
include_once BASE_PATH.'/src/templates/index.php';