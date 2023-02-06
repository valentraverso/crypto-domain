<?php 
require_once BASE_PATH . "/src/apiCoin.php";

$showCoin = new Coins();
$arrayCoins = $showCoin->setCoin("BTC,LUN,ETH", "EUR");

?>

<section>
        <h2 class='font pl-5 text-2xl font-bold'>Prices</h2>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full">
                    <thead class="border-b">
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
echo '<pre>';
 print_r($arrayCoins);
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
</tr>';
  }
?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </section>