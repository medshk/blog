async function getdata() {
	var e = document.getElementById("mySelect");

	 const API_KEY = 'RA4MIZAJZPEMD0Z3';
    let StockSymbol = e.options[e.selectedIndex].value;
    alert(StockSymbol);
    let API_Call = `https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol=${StockSymbol}&outputsize=compact&apikey=${API_KEY}`;
    let stockChartXValuesFunction = [];
    let stockChartYValuesFunction = [];
   

    
      let response = await fetch(API_Call);
      let data = await response.json();
    let xAxe = [];
     let yAxe = [];
     
      for (var key in data['Time Series (Daily)']) {
            xAxe.push(key);
           yAxe.push(data['Time Series (Daily)'][key]['1. open']);
          }
       xAxe.reverse();
       yAxe.reverse();
TESTER = document.getElementById('tester');
Plotly.purge(TESTER);
// it workeeeeeeeeeeeed yey!
	Plotly.plot( TESTER, [{
		x: xAxe,
	y: yAxe,
	mode:'line',
		name:'USD',
		line:{
		color:'rgb(255, 7, 115)'
	}
		
	}], {
	title:`${StockSymbol} Stock Market Value` ,
  yaxis:{title:'USD'},
  autosize: false,
  width: 1100,
  height: 500,
  

} 
	
	);

}
//getdata();


// exchange rate data funciton

async function getExchangedata() {
  
	var e = document.getElementById("exchangeSelect");
  var e1 = document.getElementById("exchangeSelect2");
	 const API_KEY = 'RA4MIZAJZPEMD0Z3';
    let fromSymbol = e.options[e.selectedIndex].value;
    let toSymbol = e1.options[e1.selectedIndex].value;
 
    let API_Call = `https://www.alphavantage.co/query?function=FX_INTRADAY&from_symbol=${fromSymbol}&to_symbol=${toSymbol}&interval=5min&apikey=${API_KEY}`;
    let stockChartXValuesFunction = [];
    let stockChartYValuesFunction = [];
   

    
      let response = await fetch(API_Call);
      let data = await response.json();
    let xAxe = [];
     let yAxe = [];
     
      for (var key in data['Time Series FX (5min)']) {
            xAxe.push(key);
           yAxe.push(data['Time Series FX (5min)'][key]['1. open']);
          }
         
       xAxe.reverse();
       yAxe.reverse();
TESTER = document.getElementById('tester2');
Plotly.purge(TESTER);
// it workeeeeeeeeeeeed yey!
	Plotly.plot( TESTER, [{
		x: xAxe,
	y: yAxe,
	mode:'line',
		name:`${toSymbol}`,
		line:{
		color:'rgb(255, 7, 115)'
	}
		
	}], {
	title:`from ${fromSymbol} to ${toSymbol} exchange rate` ,
  yaxis:{title:`${toSymbol}`},
  autosize: false,
  width: 1100,
  height: 500,
  

} 
	
	);

}

function displayChart()
{

  document.getElementById("myChart").style.display = "block";
  document.getElementById("tester").style.width = "1100px";
  document.getElementById("tester").style.position = "absolute";
  document.getElementById("tester").style.left = "9.5%";
  document.getElementById("tester").style.top = "4%";
 document.getElementById("tester").addEventListener('click',function ()
 {
  event.stopPropagation();
    }  ); 

  //
  document.getElementById("selectDiv").style.top = "4.1%";
  document.getElementById("selectDiv").style.left = "8.4%";
  document.getElementById("selectDiv").style.width = "200px";
 document.getElementById("selectDiv").addEventListener('click',function ()
 {
  event.stopPropagation();
    }  ); 
  }

  function displayExchangeChart()
{

  document.getElementById("myChart2").style.display = "block";
  document.getElementById("tester2").style.position = "absolute";
  document.getElementById("tester2").style.width = "1100px";
  document.getElementById("tester2").style.left = "9.5%";
  document.getElementById("tester2").style.top = "4%";
 document.getElementById("tester2").addEventListener('click',function ()
 {
  event.stopPropagation();
    }  ); 

  //
  document.getElementById("exchangeChartselectDiv").style.top = "4.1%";
  document.getElementById("exchangeChartselectDiv").style.left = "8.4%";
  document.getElementById("exchangeChartselectDiv").style.width = "200px";
 document.getElementById("exchangeChartselectDiv").addEventListener('click',function ()
 {
  event.stopPropagation();
    }  ); 
    //
    document.getElementById("exchangeChartselectDiv2").style.top = "4.1%";
    document.getElementById("exchangeChartselectDiv2").style.left = "8.4%";
    document.getElementById("exchangeChartselectDiv2").style.width = "200px";
   document.getElementById("exchangeChartselectDiv2").addEventListener('click',function ()
   {
    event.stopPropagation();
      }  ); 
  }


$(document).ready(function(){
  
 
  $("#myChart").click(function(){
    $("#myChart").hide();
    $("html").removeClass("js no-touch cssanimations csstransitions no-scroll");
    $("html").addClass("js no-touch cssanimations csstransitions");
   
  });
 

 
  
});

// hide exchange rate chart
$(document).ready(function(){
  
 
  $("#myChart2").click(function(){
    $("#myChart2").hide();
    $("html").removeClass("js no-touch cssanimations csstransitions no-scroll");
    $("html").addClass("js no-touch cssanimations csstransitions");
   
  });
 

 
  
});



// cryptocurrencies chart 

async function getCryptodata() {
  
	var e = document.getElementById("cryptoChartselectDiv");
  
	 
    let toSymbol = e.options[e.selectedIndex].value;
    var  btc;
   btc= await fetchdata("BTC",toSymbol).then(function(result){
        return result;
      });
     var mkr= await fetchdata("MKR",toSymbol).then(function(result){
        return result;
      });
     var eth = await fetchdata("ETH",toSymbol).then(function(result){
        return result;
      });
      var bch= await fetchdata("BCH",toSymbol).then(function(result){
        return result;
      });
     
      var dash= await fetchdata("DASH",toSymbol).then(function(result){
        return result;
      });
     /*  var ltc= await fetchdata("LTC",toSymbol).then(function(result){
        return result;
      });*/
      
        
TESTER = document.getElementById('tester3');
Plotly.purge(TESTER);
// it workeeeeeeeeeeeed yey!
	Plotly.plot( TESTER, [{
		x: ['Bitcoin','Maker','Ethereum','Bitcoin Cach','Dash','Litecoin'],
	y: [btc,mkr,eth,bch,dash/*,ltc*/],
	type:'bar',
		name:`${toSymbol}`,
		bar:{
		color:'rgb(255, 7, 115)'
	}
		
	}], {
	title:`Cryptocurrencies exchange rate` ,
  yaxis:{title:`${toSymbol}`},
  autosize: false,
  width: 1100,
  height: 500,
  

} 
	
	);

}

async function fetchdata(from,to){
  var API_KEY = 'RA4MIZAJZPEMD0Z3';
  
let API_Call = `https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE&from_currency=${from}&to_currency=${to}&apikey=${API_KEY}`;

let value =[];



  let response = await fetch(API_Call);
  let data = await response.json();


   return data[ "Realtime Currency Exchange Rate"]["5. Exchange Rate"];
 
   
    }

function displayCryptoChart()
{
 // getCryptodata() ;
  document.getElementById("myChart3").style.display = "block";
  document.getElementById("tester3").style.position = "absolute";
  document.getElementById("tester3").style.width = "1100px";
  document.getElementById("tester3").style.left = "9.5%";
  document.getElementById("tester3").style.top = "4%";
 document.getElementById("tester3").addEventListener('click',function ()
 {
  event.stopPropagation();
    }  ); 

  //
  document.getElementById("cryptoSelectDiv").style.top = "4.1%";
  document.getElementById("cryptoSelectDiv").style.left = "8.4%";
  document.getElementById("cryptoSelectDiv").style.width = "200px";
 document.getElementById("cryptoSelectDiv").addEventListener('click',function ()
 {
  event.stopPropagation();
    }  ); 
  }

  //hide cryptocurrencies chart div 

  $(document).ready(function(){
  
 
    $("#myChart3").click(function(){
      $("#myChart3").hide();
      $("html").removeClass("js no-touch cssanimations csstransitions no-scroll");
      $("html").addClass("js no-touch cssanimations csstransitions");
     
    });
   
  
   
    
  });