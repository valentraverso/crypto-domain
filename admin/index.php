<?php
session_start();

$pageTitle = 'Admin Home';

require_once '../src/controllers/pathControllers.php';
require_once BASE_PATH.'/src/controllers/UserController.php';
require_once BASE_PATH.'/src/controllers/WalletController.php';

require_once BASE_PATH.'/src/templates/components/head.php';

$user = new Users();

$admin = $user->readUserData("WHERE id_user = ". $_SESSION['id_user']." AND ROLE = 1");

if(isset($admin)){
    ?>
    <h1>Admin is in da House</h1>
    <img src='<?php echo BASE_URL.'./img/admin.jpg';?>'>
    <?php
    $wallet = new Wallet;
    $walletAdmin = $wallet->getWallet("WHERE id_wallet = 0");

    echo "<h2>The admin have in the bank:</h2>";
    print_r($walletAdmin['json_coins']);
}else{
    header("location: ../");
}