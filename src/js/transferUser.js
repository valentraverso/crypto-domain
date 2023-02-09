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

const actualCoin = {};

function showCoins(data){
    inputAmountSent.value = '';

    const spanQuantity = document.querySelector('#quantityWallet');
    
    const valueSelectCoins = selectCoins.value;

    actualCoin.name = data[valueSelectCoins];
    
    spanQuantity.textContent  = 'You have ' + data[valueSelectCoins] + ' ' + valueSelectCoins;
}

function showTotal(e){
    const spanTotal = document.querySelector('#amountPay');

    const valueSelectCoins = selectCoins.value;
    const valueInputAmount = inputAmountSent.value;

    const coinsName = 'BTCETHLUNDOGE';

    if(coinsName.includes(valueSelectCoins)){
        spanTotal.textContent =  valueInputAmount + ' ' + valueSelectCoins;  
    }else{
        e.preventDefault();
    } 


}

selectCoins.addEventListener('change', getCoins);
inputAmountSent.addEventListener('keydown', showTotal);
inputAmountSent.addEventListener('keyup', showTotal);