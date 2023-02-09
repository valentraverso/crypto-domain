<?php
include BASE_PATH.'/src/templates/components/head.php';
include BASE_PATH.'/src/templates/components/navbarLogin.php';
?>
<div class="flex  items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <div>
      <h2 class="mt-6 text-center text-2xlgit add tracking-tight text-gray-900">Sign in to your account</h2>
    </div>
    <form class="mt-8 space-y-6" action="<?php echo BASE_URL . '/src/funcs/logInUser.php' ?>" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="-space-y-px rounded-md shadow-sm">
        <div>
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
        </div>
        <?php
         if(isset($_GET['msg'])){
          switch($_GET['msg']){
              case 'error':
                  echo '<p id="errorMessageLogin">Username or password is wrong!</p>';
                  break;
              case 'emptyFields':
                  echo '<p id="errorMessageLogin">All fields must be filled!</p>';
                  break;
              case"inactive":
                echo '<p id="errorMessageLogin">You are banned!</p>';
                  break;
              } 
        }
        ?>
      </div>
      <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
      <button class="transition duration-200 group relative flex w-full justify-center rounded-md border border-transparent bg-yellow py-2 px-4 text-sm font-medium text-black hover:bg-purple hover:text-white hover:font-bold focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
        <img src="<?php echo BASE_URL; ?>/img/google.png" alt="Logo Google" width="20px">  
        Continuar con Google
      </button>
      <button class="transition duration-200 group relative flex w-full justify-center rounded-md border border-transparent bg-yellow py-2 px-4 text-sm font-medium text-black hover:bg-purple hover:text-white hover:font-bold focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
      <img src="<?php echo BASE_URL; ?>/img/apple.png" alt="Logo Google" width="20px">
        Continuar con Apple
      </button>
      <div class="flex items-center space-x-4">
        <a href="sign-up.php" class="transition duration-200 group relative flex w-full justify-center rounded-md border border-transparent bg-maroon py-2 px-4 text-sm font-medium text-white hover:bg-purple hover:font-bold focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Sign Up
        </a>         
        <button type="submit" class="transition duration-200 group relative flex w-full justify-center rounded-md border border-transparent bg-orange py-2 px-4 text-sm font-medium text-white hover:bg-purple hover:font-bold focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
            </svg>
          </span>
          Log in
        </button>
      </div>
    </form>
  </div>
</div>