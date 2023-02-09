const selectCoins = document.querySelector('#coins');
const inputAmountSent = document.querySelector('#amount');
const btnTransfer = document.querySelector('#btnTransfer');

btnTransfer.disabled = true;

function getCoins(){
    fetch('../src/funcs/getCoinsUser.php')
    .then(response => response.json())
    .then(data => {
        showCoins(data);
    })
}

function showCoins(data){
    const spanQuantity = document.querySelector('#quantityWallet');
    
    const valueSelectCoins = selectCoins.value;
    
    spanQuantity.textContent  = 'You have ' + data[valueSelectCoins] + ' ' + valueSelectCoins;
}

function showTotal(){
    const spanTotal = document.querySelector('#amountPay');

    const valueSelectCoins = selectCoins.value;
    const valueInputAmount = inputAmountSent.value;

    spanTotal.textContent =  valueInputAmount + ' ' + valueSelectCoins;
}

selectCoins.addEventListener('change', getCoins);
inputAmountSent.addEventListener('keyup', showTotal);