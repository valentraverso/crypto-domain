<?php
require_once '../src/controllers/pathControllers.php';

session_start();
require_once BASE_PATH.'/src/funcs/userLoginConfirmation.php';

$pageTitle = 'Sell Cryptos - Crypto Domain';

// Actual view
include_once BASE_PATH.'/src/templates/user/sellUser.php';