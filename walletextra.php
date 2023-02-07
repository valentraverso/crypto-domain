require_once BASE_PATH.'/src/controllers/WalletController.php';

$coin = new Wallet();

$coinQuery = $coin->getWallet("WHERE id_user = ".$_SESSION['id_user']);
$monedas = $coinQuery['json_coins'];
$idWallet = $coinQuery['id_wallet'];

$coin->updateWallet($monedas, '$.EUR', 0, 11);