<?php
include BASE_PATH.'/src/templates/components/head.php';
include BASE_PATH.'/src/templates/components/navbarLoggedUser.php';

require_once BASE_PATH . "/src/apiCoin.php";

?>
<div class="h-screen bg-gray-100 pt-20 grid">
    <h1 class="mb-10 text-center text-2xl font-bold">Buy criptos</h1>

<!-- select quantity money -->
<div class="max-w-2xl mx-auto">
  <p class="ml-4 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">How much do you want to buy in € (EUR)?</p>

  <form id="formSell" class="m-4 flex" action="../src/funcs/buyCoin.php" method="post">
    	<input id="quantity-money" name="quantity-money" class="w-80 h-11 p-4 mr-0 border rounded-lg text-gray-800 border-purple bg-white" placeholder="100" required/>
</div>

<!-- select coin -->

<div class="w-80 max-w-2xl mx-auto">
	<label for="coins" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an option</label>
        <select name="select-coin" id="coins" class="bg-yellow mb-4 border border-maroon text-gray-900 text-sm rounded-lg focus:ring-purple focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-purple dark:placeholder-gray-400 dark:text-purple dark:focus:ring-purple dark:focus:border-purple">
        <option selected>Choose your coin</option>
        <option value="BTC">BTC</option>
        <option value="ETH">ETH</option>
        <option value="LUN">LUN</option>
        <option value="DOGE">DOGE</option>
    </select>
	<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>

<!-- resumen -->
    <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
      <div class="rounded-lg">
        <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
          <img src="../img/coin.png" alt="product-image" class="w-full rounded-lg sm:w-40" />
          <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
            <div class="mt-5 sm:mt-0">
              <h2 id="name-coin" class="text-lg font-bold text-gray-900">Bitcoin</h2>
              <p class="mt-1 text-xs text-gray-700"><b>Current price in € (EUR): </b><span id="price-coin" ></span></p>
              <p class="mt-1 text-xs text-gray-700"><b>Quantity: </b><span id="quantity-coin" ></span></p>
            </div>
          </div>
        </div>

      <!-- total -->
      <div class="mt-6 mb-6 rounded-lg border bg-white p-6 shadow-md md:w-1/2grid justify-items-center">
        <div class="flex justify-between">
          <p class="text-lg font-bold">Total in € (EUR):</p>
          <div class="">
            <p class="mb-1 text-lg font-bold"><span id="totalBuy">00.00</span></p>
          </div>
        </div>
      
        <input id="btnBuy" type="submit" value="Buy it" class="mt-6 w-full rounded-md bg-purple py-1.5 font-medium text-blue-50 hover:bg-maroon"></input>
      </div>
    </form>
    </div>
  </div>
<?php
    include_once BASE_PATH.'/src/templates/components/footer.html';
?>