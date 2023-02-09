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

coins.addEventListener('change', (e) => {
    moneda = coin.textContent=e.target.value;
    img.src="../img/"+e.target.value+".png";
    fetch('https://min-api.cryptocompare.com/data/price?fsym='+e.target.value+'&tsyms=EUR&api_key=897076d9099dc0fb454eba5610052b06fd3edc1746963be7b5a11ee40138db8d')
        .then((response) => response.json())
        .then((data) => {currentPrice.textContent = "Current Price: " + data["EUR"] +" €";
        quantity.textContent = "Quantity: " + (amount.value/data["EUR"]).toFixed(7) + " "+moneda;
        amountPay.textContent = amount.value +" €";
        window.globalPrice = data["EUR"];
    }
)
// coinavAilable.textContent = "You have "+getCoins()+" "+moneda;
countCoins1();
})



amount.addEventListener('keyup', logNum);
amount.addEventListener('keydown', logNum);

function logNum(e) {
  const coinsName = 'BTCETHLUNDOGE';

    if(!coinsName.includes(coins.value)){
        e.preventDefault();
        return
    }
  amountPay.textContent = amount.value +" €";
  quantity.textContent = "Quantity: " + (amount.value/globalPrice).toFixed(7);
  // console.log(compareCoins())
  if ((compareCoins()*globalPrice)>=amount.value){
    countCoins2();
    coinavAilable.className = "text-black";
    btnFormSell.disabled = false;
  } else{
    coinavAilable.textContent = "You do not have enough "+moneda+". Sorry baby!"
    coinavAilable.className = "text-red-600";
    btnFormSell.disabled = true;
  }
}



function confirmation(event){
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
          ).then((result)=>{
              fetch()
              document.querySelector("#formSell").submit();
          })
        }
      })
}

function countCoins1(){
  fetch('../src/funcs/getCoinsUser.php')
  .then(response => response.json())
  .then(data => {
    coinavAilable.textContent = "You have "+data[coins.value]+ " "+moneda;
  })
}

function countCoins2(){
  fetch('../src/funcs/getCoinsUser.php')
  .then(response => response.json())
  .then(data => {
    coinavAilable.textContent = "You have "+data[coins.value]+ " "+moneda+ " = €"+ (data[coins.value]*globalPrice).toFixed(4);
  })
}

let totalCoin;

function compareCoins(){
  fetch('../src/funcs/getCoinsUser.php')
  .then(response => response.json())
  .then(data => {
    totalCoin =data[coins.value];
  })
  return totalCoin;
}
// getCoins();

// console.log(moneda)