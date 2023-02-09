<?php
include BASE_PATH.'/src/templates/components/head.php';
include BASE_PATH.'/src/templates/components/navbarLogin.php';
?>

<div class="flex  items-center justify-center  px-4 sm:px-6 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <div class = "relative px-4 flex flex-col justify-center items-center bg-white">
      <h2 class="mt-6 text-center text-2xlgit add tracking-tight text-gray-900 font-bold text-3xl">Join us!</h2>
      <p class="text-xl">Create a free Cypto Domain Account</p>
    </div>
    <form class="" action="<?php echo BASE_URL.'/src/funcs/createUser.php'; ?>" method="POST">
      <div class="-space-y-px rounded-md px-6 space-y-4 md:space-y-6 ">
          <div>
              <label for="firstName" class="sr-only">First Name</label>
              <input id="firstName" name="first-Name" type="text" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="First Name">
            </div>
            <div>
                <label for="lastName" class="sr-only">Last Name</label>
                <input id="lastName" name="last-Name" type="text" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Last Name">
            </div>
            <div>
                <label for="birthDate" class="sr-only">Birth Date</label>
                <input id="birthDate" name="birth-Date" type="date" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
            </div>
            <div>
              <label for="email-address" class="sr-only">Email address</label>
              <input id="email-address" name="email" type="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
            </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
        </div>
        <div>
          <label for="repeatPassword" class="sr-only">Repeat Password</label>
          <input id="repeatPassword" name="repeat-password" type="password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Repeat Password">
        </div>
        <div class="mb-5">
        <label
          for="favCoin"
          class="mb-3 block text-base font-medium text-[#07074D]"
          required
        >
        </label>
        <select
          name="favorite-coin"
          id="favCoin"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        required>
        <option value='BTC' disabled>Select your favorite Coin</option>
        <option value='BTC'>BTC</option>
        <option value="ETH">ETH</option>
        <option value="LUN">LUNA</option>
        <option value="DOGE">DOGE</option>
    </select>
      </div>
      <?php
         if(isset($_GET['msg'])){
          switch($_GET['msg']){
              case 'birth':
                  echo '<p class="text-red text-center">You must be over 18 to buy cripto. Sorry baby.</p>';
                  break;
              case 'email':
                  echo '<p class="text-red text-center">This email is already used!</p>';
                  break;
              } 
        }
        ?>
      </div>
      <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
      <div class="flex items-center space-x-4">
          <button type="reset" class="transition duration-200 group relative flex w-full justify-center rounded-md border border-transparent bg-purple py-2 px-4 text-sm font-medium text-white hover:bg-yellow hover:text-purple hover:font-bold focus:outline-none ">
            Clear form
          </button>
          <a href="login.php" class="transition duration-200 group relative flex w-full justify-center rounded-md border border-transparent bg-orange py-2 px-4 text-sm font-medium text-white hover:bg-yellow hover:text-purple hover:font-bold focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                  <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                    </svg>
                </span>
                  Log in  
          </a>  
          <button type="submit" class="transition duration-200 group relative flex w-full justify-center rounded-md border border-transparent bg-maroon py-2 px-4 text-sm font-medium text-white hover:bg-yellow hover:text-purple hover:font-bold focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Sign Up
            </button>
      </div>
    </form>
  </div>
</div>