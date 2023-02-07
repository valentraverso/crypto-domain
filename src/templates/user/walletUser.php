<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pageTitle = "Wallet";

require_once '/Applications/XAMPP/xamppfiles/htdocs/develop-your-project-in-php/src/controllers/pathControllers.php';

include BASE_PATH.'/src/templates/components/head.php';
include BASE_PATH.'/src/templates/components/navbarLoggedUser.php';
include_once BASE_PATH.'/src/templates/components/dynamicChart.php';
include_once BASE_PATH.'/src/templates/components/footer.html';


?>