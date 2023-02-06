<?php 
// Head
$pageTitle = 'The best web to buy cripto';
include_once BASE_PATH.'/src/templates/components/head.php';

// Navbar
include_once BASE_PATH.'/src/templates/components/navbarLoggedUser.php';

require_once BASE_PATH.'/src/controllers/UserController.php';

$user = new Users();

$userInfo = $user->readUserData('WHERE id_user = '.$_SESSION['id_user'].'');
?>
<div class="relative overflow-hidden bg-center" style="background-image: url('<?php echo BASE_URL?>/img/crypto-background-index.webp')">
        <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
          <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div>
              <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Welcome <?php echo $userInfo['first_name'];?>!</h1>
              <p class="mt-4 text-xl text-black">Let's buy cripto <b>{ Crypto Domain }</b></p>
            </div>
          </div>
        </div>
      </div> 
<?php

// Actual View
include_once BASE_PATH.'/src/templates/components/pricesBtcChart.php';

// Footer
include_once BASE_PATH.'/src/templates/components/footer.html';
?>