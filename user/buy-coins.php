<?php
require_once '../src/controllers/pathControllers.php';

$pageTitle = 'Buy Cryptos - Crypto Domain';

session_start();
require_once BASE_PATH.'/src/funcs/userLoginConfirmation.php';

// Actual view
include_once BASE_PATH.'/src/templates/user/buyUser.php';