
let amount = document.querySelector("#amount");

let currentPrice = document.querySelector("#currentPrice");

let quantity = document.querySelector("#quantity");

let coins = document.querySelector("#coins");

let coin = document.querySelector("#coin");

let amountPay = document.querySelector("#amountPay");


coins.addEventListener('change', (e) => {
    moneda = coin.textContent=e.target.value;
    fetch('https://min-api.cryptocompare.com/data/price?fsym='+e.target.value+'&tsyms=EUR&api_key=897076d9099dc0fb454eba5610052b06fd3edc1746963be7b5a11ee40138db8d')
        .then((response) => response.json())
        .then((data) => {currentPrice.textContent = "Current Price: " + data["EUR"] +" €";
        quantity.textContent = "Quantity: " + (amount.value/data["EUR"]).toFixed(7) + " "+moneda;
        amountPay.textContent = amount.value +" €";
        window.globalPrice = data["EUR"];
    }
)})



amount.addEventListener('keyup', logNum);

function logNum(e) {

        amountPay.textContent = amount.value +" €";
        quantity.textContent = "Quantity: " + (amount.value/globalPrice).toFixed(7);

}

function confirmation(event){
    // var opcion = confirm("Are you sure you want to sell?");
    // if (opcion == true) {
    //     return true
	// } else {
	//     return false
	// }
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
              document.querySelector("#formSell").submit();
          })
        //   document.querySelector("#formSell").submit();
        }
      })
}

