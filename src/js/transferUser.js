const selectCoins = document.querySelector('#coins');
const inputAmountSent = document.querySelector('#amount');
const btnTransfer = document.querySelector('#btnTransfer');
const inputEmailUser = document.querySelector('#emailUser');
const pMsgError = document.querySelector('#msgError');

btnTransfer.disabled = true;

const coinsValidation = {
    quantity: false,
    email: false,
}

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

    if(actualCoin?.name <= 0 || valueInputAmount > actualCoin.name){
        pMsgError.textContent = 'You dont have the funds.';
        coinsValidation.quantity = false;
    }else{
        pMsgError.textContent = '';
        coinsValidation.quantity = true;
    }

    validationForm();
}

function validateEmail(){
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(inputEmailUser.value.match(mailformat)){
        coinsValidation.email = true;
        pMsgError.textContent = '';
    }else{
        coinsValidation.email = false;
        pMsgError.textContent = 'Enter a valid email.';
    }

    validationForm();
}

function validationForm(){
    if(coinsValidation.quantity & coinsValidation.email){
        btnTransfer.disabled = false;
        console.log(coinsValidation)
    }else{
        btnTransfer.disabled = true;
    }
}

selectCoins.addEventListener('change', getCoins);
inputAmountSent.addEventListener('keydown', showTotal);
inputAmountSent.addEventListener('keyup', showTotal);
inputEmailUser.addEventListener('keydown', validateEmail);
inputEmailUser.addEventListener('keyup', validateEmail);