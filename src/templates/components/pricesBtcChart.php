<?php 
require_once BASE_PATH . "/src/apiCoin.php";

$showCoin = new Coins();
$arrayCoins = $showCoin->setCoin("BTC,ETH,LUN,DOGE", "EUR");

?>

<section class="flex flex-col align-center justify-center items-center">
        <h2 class='text-5xl font-bold mt-0 mb-4 drop-shadow-xl text-transparent bg-clip-text bg-gradient-to-r from-maroon to-pink-400 py-12'>Prices</h2>
        <div class="flex justify-center pb-24 align-center shadow-md rounded-lg mb-12">
            <div>
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full">
                    <thead class="border-b bg-grey">
                      <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Coin name
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Actual Price
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Change in last 24hs
                        </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
foreach($arrayCoins['DISPLAY'] as $key => $value){
  echo '<tr class="bg-white border-b">
  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">'
    . $key .
  '</td>
  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">'
  . $value['EUR']['PRICE'] .
  '</td>
  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">'
  . $value['EUR']['CHANGEPCT24HOUR'] .
  '</td>
</tr>';}
?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </section>