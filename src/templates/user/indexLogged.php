<?php 
// Head
$pageTitle = 'The best web to buy cripto';
include_once BASE_PATH.'/src/templates/components/head.php';

// Navbar
include_once BASE_PATH.'/src/templates/components/navbarLoggedUser.php';

require_once BASE_PATH.'/src/controllers/UserControllers.php';

$user = new Users();

$email = $_SESSION['email'];

$userInfo = $user->readUserData("WHERE email = '$email'");

print_r($userInfo);

// Actual View
include_once BASE_PATH.'/src/templates/components/pricesBtcChart.php';

// Footer
include_once BASE_PATH.'/src/templates/components/footer.html';
?>