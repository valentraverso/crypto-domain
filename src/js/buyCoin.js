const putMoney = document.getElementById("quantity-money");
putMoney.addEventListener("input", chooseHowMuch);

function chooseHowMuch(){
    let inputValue = putMoney.value;
    let total = document.getElementById("totalBuy");
    total.innerHTML = inputValue;
}


const selectOptionCoin = document.getElementById("coins");
selectOptionCoin.addEventListener("change", chooseCoin);

function chooseCoin(){
    let selectOptionValue = selectOptionCoin.value;
    let nameCoin = document.getElementById("name-coin");
    nameCoin.innerHTML = selectOptionValue;
    currentPrice();
}

function currentPrice(){
    let selectOptionValue = selectOptionCoin.value;
    console.log(selectOptionValue);

    const key = 'e3319673d7c34bea9da98ecfca6b05dacca0a98fab41749c867516f41458121a'
    fetch("https://min-api.cryptocompare.com/data/pricemultifull?fsyms="+selectOptionValue+"&tsyms=EUR&api_key="+key)
    .then((response) => response.json())
    .then((data) => {
        let priceCoin = data.RAW[selectOptionValue].EUR.PRICE;
        let priceDisplay = document.getElementById("price-coin");
        priceDisplay.innerHTML = priceCoin;
        let inputValue = putMoney.value;
    quantityCoins(priceCoin, inputValue);
    })
}

function quantityCoins(priceCoin, inputValue){
    let quantity = inputValue/priceCoin;
    let quantityDisplay = document.getElementById("quantity-coin");
    quantityDisplay.innerHTML = quantity;
}

// Confirmation

const btnBuy = document.getElementById("btnBuy"); 
btnBuy.addEventListener("click", confirmPurchase);


function confirmPurchase(event){
    const putMoney = document.getElementById("quantity-money");
    const selectCoin = document.getElementById("coins");

    fetch('../src/funcs/getCoinsUser.php')
    .then(response => response.json())
    .then(data => {

 if(putMoney.value<=data.EUR && selectCoin.value){
    event.preventDefault();
    Swal.fire({
        title: 'Buy coins',
        text: "Do you want to continue with you purchase?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#F08A5D',
        cancelButtonColor: '#6A2C70',
        confirmButtonText: 'Yes!'
      }).then((result) => {
        if (result.isConfirmed) { 
        event.preventDefault();
          Swal.fire(
            'Congratulations!',
            'Your purchase was processed correctly.',
            'success'
          ).then((res)=>{
            if (res.isConfirmed){
                //document.querySelector("#formSell").submit();;
        }})}else{
            event.preventDefault();
            Swal.fire(
                'Canceled!',
                'Your purchase was canceled.',
                'success').then((res)=>{
                    if (res.isConfirmed){
               // document.querySelector("#formSell").submit(); 
            }}
            )
        }
      })
 }

})

}