<?php
require_once '../src/controllers/pathControllers.php';
require_once BASE_PATH.'/src/controllers/WalletController.php';

$wallet = new Wallet;

$id = $_SESSION['id_user'];

$coin = $wallet->getWallet("WHERE id_user=$id");
$coinObj = json_decode($coin['json_coins']);
?>

<div class="container max-w-lg m-auto min-h-max my-8">
    <canvas id="doughnut-chart" width="300" height="300"></canvas>
</div>

<script>

let coinAmount = <?php echo json_encode($coinObj); ?>;

new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["BTC (€)", "ETH (€)", "DOGE (€)", "LUN (€)"],
      datasets: [
        {
          label: "EUR Amount",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
          data: [coinAmount.BTC,coinAmount.ETH,coinAmount.DOGE,coinAmount.LUN]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Your Wallet'
      }
    }
});

</script>


