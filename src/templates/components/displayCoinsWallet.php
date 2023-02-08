<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once BASE_PATH . "/src/apiCoin.php";
require_once BASE_PATH . "/src/controllers/WalletController.php";

$id = $_SESSION['id_user'];

$showCoin = new Coins();
$arrayCoins = $showCoin->setCoin("BTC,ETH,LUN,DOGE", "EUR");

$wallet = new Wallet();
$arrayWalletCoins = $wallet->getWallet("WHERE id_user=$id");

$jsonEncode = json_decode($arrayWalletCoins['json_coins']);

$priceBTC = $arrayCoins['RAW']['BTC']['EUR']['PRICE'];
$priceETH = $arrayCoins['RAW']['ETH']['EUR']['PRICE'];
$priceDOGE = $arrayCoins['RAW']['DOGE']['EUR']['PRICE'];
$priceLUN = $arrayCoins['RAW']['LUN']['EUR']['PRICE'];

?>

<div class="flex justify-around">
    <div class="min-h-max ">
        <canvas id="doughnut-chart" width="400" height="400"></canvas>
    </div>
    
    <div class="align-baseline shadow-md rounded-lg">
        <table class="h-auto text-sm text-left text-gray-500" height="200px">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Coin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Amount
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Cotization
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Price
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
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        BTC
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $jsonEncode->BTC; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $priceBTC." €";?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $priceBTC * $jsonEncode->BTC." €";?>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buy</a>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Sell</a>
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        ETH
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $jsonEncode->ETH; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $priceETH."€";?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $priceETH * $jsonEncode->ETH." €";?>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buy</a>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Sell</a>
                    </td>
                </tr>
                <tr class="bg-white">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        DOGE
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $jsonEncode->DOGE; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $priceDOGE."€";?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $priceDOGE * $jsonEncode->DOGE." €";?>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buy</a>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Sell</a>
                    </td>
                </tr>
                <tr class="bg-white">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        LUN
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $jsonEncode->LUN; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $priceLUN."€";?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $priceLUN * $jsonEncode->LUN." €";?>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buy</a>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Sell</a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="font-semibold text-gray-900">
                    <th scope="row" class="px-6 py-3 text-base">Total</th>
                    <td class="px-6 py-3"><?php echo $priceBTC * $jsonEncode->BTC + $priceETH * $jsonEncode->ETH + $priceDOGE * $jsonEncode->DOGE + $priceLUN * $jsonEncode->LUN . " €" ?></td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>

<script>
let coinAmount = <?php echo json_encode($coinObj); ?>;

new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["BTC (€)", "ETH (€)", "DOGE (€)", "LUN (€)"],
      datasets: [
        {
          label: "EUR Amount",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
          data: [coinAmount.BTC,coinAmount.ETH,coinAmount.DOGE,coinAmount.LUN]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Your Wallet'
      }
    }
});
</script>


