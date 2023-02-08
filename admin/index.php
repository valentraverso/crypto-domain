<?php
session_start();

$pageTitle = 'Admin Home';

require_once '../src/controllers/pathControllers.php';
require_once BASE_PATH.'/src/controllers/UserController.php';

require_once BASE_PATH.'/src/templates/components/head.php';

$user = new Users();

$admin = $user->readUserData("WHERE id_user = ". $_SESSION['id_user']." AND ROLE = 1");

if(isset($admin)){
    ?>
    <h1>Admin is in da House</h1>
    <img src='<?php echo BASE_URL.'./img/admin.jpg';?>'>
    <?php
    require_once BASE_PATH.'/src/controllers/WalletController.php';
    require_once BASE_PATH.'/src/controllers/AdminController.php';
    require_once BASE_PATH.'/src/apiCoin.php';

    $admin = new Admin();
    $wallet = new Wallet();
    $coins = new Coins(); 

    $walletAdmin = $wallet->getWallet("WHERE id_wallet = 0");
    $objWallet = json_decode($walletAdmin['json_coins']);

    $getCotizacion = $coins->setCoin("BTC,ETH,LUN,DOGE", "EUR");

    $totales = $wallet->getTotales($getCotizacion, $objWallet);

    print_r($totales);

    echo "<h2>The admin have in the bank:</h2>";

    $users = $admin->getAllUsers();
    ?>
<div class="align-baseline shadow-md rounded-lg">
        <table class="h-auto text-sm text-left text-gray-500" height="300px">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Email
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Name
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Birth
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Buy</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Sell</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach($users as $user){
                    ?>
                    
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        <?php echo $user['id_user']; ?>
                    </th>
                    <td class="px-6 py-4">
                    <?php echo $user['email']; ?>
                    </td>
                    <td class="px-6 py-4">
                    <?php echo $user['first_name'] . " "  . $user['last_name']; ?>
                    </td>
                    <td class="px-6 py-4">
                    <?php echo $user['birth_date']; ?>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">See Wallet</a>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Deactivate</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr class="font-semibold text-gray-900">
                    <th scope="row" class="px-6 py-3 text-base">Total Users:</th>
                    <td class="px-6 py-3"><?php echo sizeof($user); ?></td>
                </tr>
            </tfoot>
        </table>
</div>
    <?php
}else{
    header("location: ../");
}