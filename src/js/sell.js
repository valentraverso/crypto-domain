const amount = document.querySelector("#amount");
const currentPrice = document.querySelector("#currentPrice");
const quantity = document.querySelector("#quantity");
const coins = document.querySelector("#coins");
const coin = document.querySelector("#coin");
const amountPay = document.querySelector("#amountPay");
const img = document.querySelector("#img");
const btnFormSell = document.querySelector("#btnFormSell");
const coinavAilable = document.querySelector("#coinavAilable");

btnFormSell.disabled = true;
const objForm = {};


function showInformation() {


  coin.textContent = objForm.actualCoin;
  img.src = "../img/" + objForm.actualCoin + ".png";

  currentPrice.textContent = "Current Price: " + objForm.cotization + " €";
  quantity.textContent = "Quantity: " + (amount.value / objForm.cotization).toFixed(7) + " " + objForm.actualCoin;
  amountPay.textContent = amount.value + " €";
  coinavAilable.textContent = "You have " + objForm.userCoins + " " + objForm.actualCoin + " = €" + (objForm.userCoins * objForm.cotization).toFixed(4);

}

function getInformation(e) {
  objForm["actualCoin"] = e.target.value;
  fetch('https://min-api.cryptocompare.com/data/price?fsym=' + objForm.actualCoin + '&tsyms=EUR&api_key=897076d9099dc0fb454eba5610052b06fd3edc1746963be7b5a11ee40138db8d')
    .then((response) => response.json())
    .then((data) => {
      objForm["cotization"] = data["EUR"];
      fetch('../src/funcs/getCoinsUser.php')
        .then(response => response.json())
        .then(data => {
          objForm["userCoins"] = data[objForm.actualCoin];
          showInformation();
        })
    })


}

function logNum(e) {
  const coinsName = 'BTCETHLUNDOGE';

  if (!coinsName.includes(coins.value)) {
    e.preventDefault();
    return
  }

  amountPay.textContent = amount.value + " €";
  quantity.textContent = "Quantity: " + (amount.value / objForm.cotization).toFixed(7);

  if ((objForm.userCoins* objForm.cotization) >= amount.value) {
    coinavAilable.textContent = "You have " + objForm.userCoins + " " + objForm.actualCoin + " = €" + (objForm.userCoins * objForm.cotization).toFixed(4);
    coinavAilable.className = "text-black";
    btnFormSell.disabled = false;
  } else {
    coinavAilable.textContent = "You do not have enough " + objForm.actualCoin + ". Sorry baby!"
    coinavAilable.className = "text-red-600";
    btnFormSell.disabled = true;
  }
}



function confirmation(event) {
  event.preventDefault();
  Swal.fire({
    title: 'Are you sure you want to sell this amount?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, sell!'
  }).then((result) => {
    if (result.isConfirmed) {
      event.preventDefault();
      Swal.fire(
        'Cripto succesfully sold!',
        'Your money is now in your wallet.',
        'success'
      ).then((result) => {
        fetch()
        document.querySelector("#formSell").submit();
      })
    }
  })
}

coins.addEventListener('change', getInformation);
amount.addEventListener('keydown', logNum);
amount.addEventListener('keyup', logNum);