<?php
        include BASE_PATH.'/src/templates/components/head.php';
        include BASE_PATH.'/src/templates/components/navbar.php';
?>
<main>
    <div class="relative overflow-hidden bg-white">
        <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
          <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-lg">
              <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">It's time to be millionare</h1>
              <p class="mt-4 text-xl text-gray-500">Let's buy cripto <b>{ Crypto Domain }</b></p>
            </div>
            <div>
              <div class="mt-10">
                <a href="<?php echo BASE_URL.'/user/sign-up.php'; ?>" class="inline-block rounded-md border border-transparent bg-yellow py-3 px-8 text-center text-gray font-medium hover:bg-maroon hover:text-white">Create Account</a>
              </div>
            </div>
          </div>
        </div>
      </div>      
      <?php
        include BASE_PATH.'/src/templates/components/pricesBtcChart.php';
      ?>
</main>
<?php
    include_once BASE_PATH.'/src/templates/components/footer.html';
?>