const selectCoins = document.querySelector('#coins');

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

    spanQuantity.textContent  = 'You have ' + data[valueSelectCoins] + valueSelectCoins;
}

selectCoins.addEventListener('change', getCoins);