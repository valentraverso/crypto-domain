<div class="flex justify-center my-12">
    <form action="<?php echo BASE_URL.'/src/funcs/addFunds.php';?>" method="POST" class="w-full max-w-sm">
      <div class="flex items-center border-b border-teal-500 py-2">
        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" name="money" type="number" placeholder="€" aria-label="Full name">
        <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
          Add Funds
        </button>
      </div>
    </form>
</div>