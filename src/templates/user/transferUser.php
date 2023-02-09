<?php
include BASE_PATH.'/src/templates/components/head.php';
include BASE_PATH.'/src/templates/components/navbarLoggedUser.php';
?>
<script src ="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
<div class="h-screen bg-gray-100 pt-5 grid">
<h1 class="mb-10 text-center text-2xl font-bold">Transfer to your panas</h1>
<!-- select coin -->
<div class="w-80 max-w-2xl mx-auto">
<form action="<?php echo BASE_URL .'/src/funcs/sell.php';?>" id="formSell">
	<label for="coins" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select the coin for sell</label>
    <select id="coins" name="coin" class="bg-yellow border border-maroon text-gray-900 text-sm rounded-lg focus:ring-purple focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-purple dark:placeholder-gray-400 dark:text-purple dark:focus:ring-purple dark:focus:border-purple">
      <option disabled selected>Choose from your wallet</option>
      <option value="BTC">Bitcoin</option>
      <option value="ETH">Ethereum</option>
      <option value="LUN">Luna</option>
      <option value="DOGE">Doge Coin</option>
    </select>
</div>
<!-- select quantity money -->
<div class="max-w-2xl mx-auto">
  <p class="ml-4 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">How much do you want to transfer?</p>
    	<input class="w-80 h-11 p-4 mr-0 border rounded-lg text-gray-800 border-purple bg-white" name="amount" placeholder="100BTC" min='0' id="amount" type="number" required/>
      <br>
        <span id='quantityWallet'></span>
</div>
<div class="max-w-2xl mx-auto mt-5">
  <p class="ml-4 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Who is the receiver?</p>
    	<input class="w-80 h-11 p-4 mr-0 border rounded-lg text-gray-800 border-purple bg-white" name="reciever" placeholder="admin@gmail.com" type="email" required/>
</div>
<!-- resumen -->
    <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
      <div class="rounded-lg">
      <div class="mt-6 mb-6 w-80 rounded-lg border bg-white p-6 shadow-md md:w-1/2grid justify-items-center">
        <div class="flex justify-between">
          <p class="text-lg font-bold">Total</p>
          <div class="">
            <p class="mb-1 text-lg font-bold" id="amountPay"></p>
          </div>
        </div>
        <button type="submit" class="mt-6 w-full rounded-md bg-purple py-1.5 font-medium text-blue-50 hover:bg-maroon" id="btnTransfer">Transfer</button>
      </div>
      </form>
    </div>
  </div>
<script src="<?php echo BASE_URL;?>/src/js/transferUser.js"></script>
<?php
include_once BASE_PATH.'/src/templates/components/footer.html';
?>