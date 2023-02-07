const url = 'https://min-api.cryptocompare.com/data/v2/histoday?fsym=ETH&tsym=EUR&limit=6';

let prices = [];

fetch(url)
    .then(
        response=>response.json()    
    ).then(
        data => {data.Data.Data.forEach(item => 
            prices.push(item.high))
            createChart()
        }        
    )
    

function createChart(){

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
    
    new Chart(
        document.getElementById("chartLine"),
        configLineChart
    );
}
