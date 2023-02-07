window.addEventListener("load", onLoadChart);

const chart = document.querySelector("#chart");
const btcBtn = document.querySelector("#btcBtn")
const ethBtn = document.querySelector("#ethBtn")
const dogeBtn = document.querySelector("#dogeBtn")
const lunBtn = document.querySelector("#lunBtn")
const beforeCanvas = document.querySelector("#beforeCanvas")
const canvas = document.querySelector("#chartLine")
let chartHeader = document.querySelector("#chartHeader")


btcBtn.addEventListener("click", createNewChart);
ethBtn.addEventListener("click", createNewChart);
dogeBtn.addEventListener("click", createNewChart);
lunBtn.addEventListener("click", createNewChart);

let coin = "BTC";
let myChart;
chartHeader.innerText = "BTC";

function onLoadChart(){
    const url = `https://min-api.cryptocompare.com/data/v2/histoday?fsym=BTC&tsym=EUR&limit=6`;
    let prices = [];
    fetch(url)
        .then(
            response=>response.json()    
        ).then(
            data => {data.Data.Data.forEach(item => 
                prices.push(item.high))
                createChart(prices)
            }        
        )
}

function createNewChart(event){
    
    myChart.destroy();
    coin = event.srcElement.innerText;
    chartHeader.innerText = event.srcElement.innerText;
    const url = `https://min-api.cryptocompare.com/data/v2/histoday?fsym=${coin}&tsym=EUR&limit=6`;
        
    let prices = [];
    
    fetch(url)
        .then(
            response=>response.json()    
        ).then(
            data => {data.Data.Data.forEach(item => 
                prices.push(item.high))
                createChart(prices)
            }        
        ) 
}

function createChart(prices){

    const labels = ["DAY 1", "DAY 2", "DAY 3", "DAY 4", "DAY 5", "DAY 6", "DAY 7"];
    const data = {
        labels: labels,
        datasets: [
        {
            label: "Prices",
            backgroundColor: "grey",
            borderColor: "maroon",
            data: [prices[0], prices[1], prices[2], prices[3], prices[4], prices[5], prices[6]],
        },
        ],
    };
    
    const configLineChart = {
        type: "line",
        data,
        options: {},
    };
    
    myChart = new Chart(
        document.getElementById("chartLine"),
        configLineChart
    );
}
