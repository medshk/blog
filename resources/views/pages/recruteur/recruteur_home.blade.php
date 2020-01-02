@extends('layouts.static_layout')


@section('navbar')
@include('include.inc')


@endsection
<!-- la partie dynamique de home-->
@section('main')
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Welcome  {{auth::guard('recruteur')->user()->nom}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="block  gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Statistiques</h2>
                        <span></span>
                    </div><!-- Heading -->
                    <div class="job-grid-sec">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="job-grid">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="images/resource/jg6.png" alt="" /> </div>
                                        <h3><a title="">Stock Market Value</a></h3>
                                        <span>Graph</span>
                                        <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    </div>
                                    
                                    <a onclick="getdata();displayChart()" title="" class="signup-popup">SHOW CHART</a>
                                </div><!-- JOB Grid -->
                            </div>
                            <!-- exchage rate chart-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="job-grid">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="images/resource/jg6.png" alt="" /> </div>
                                        <h3><a title="">Forex Exchange Rate</a></h3>
                                        <span>Graph</span>
                                        <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    </div>
                                    
                                    <a onclick="getExchangedata();displayExchangeChart()" title="" class="signup-popup">SHOW CHART</a>
                                </div><!-- JOB Grid -->
                            </div>
                            <!-- cryptocurrencies exchange rate-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="job-grid">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="images/resource/jg6.png" alt="" /> </div>
                                        <h3><a title="">Cryptocurrencies Exchange Rate</a></h3>
                                        <span>Graph</span>
                                        <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    </div>
                                    
                                    <a onclick="getCryptodata();displayCryptoChart();" title="" class="signup-popup">SHOW CHART</a>
                                </div><!-- JOB Grid -->
                            </div>
                           
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>

<!-- top highest rate candidate section-->
<section>
<div class="block gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading">
                    <h2>Top Highest Candidates Registered</h2>
                    <span>Some of the candidates we've helped build excellent carrier over the years.</span>
                </div><!-- Heading -->
                <div class="top-company-sec">
                    <div class="row" id="companies-carousel">
                        @foreach ($candidates as $can)
                            
                       
                        <div class="col-lg-3">
                            <div class="team">
                                <div class="team-img"><img src="images/resource/t1.jpg" alt="" /></div>
                                <div class="team-detail">
                                <h3><a href="#" title="">{{$can->prenom}} {{$can->nom}}</a></h3>
                                    <span>WEB DESIGHNER</span>
                                <p>{{$can->highRate}} points past the years</p>
                                    <a href="#" title="">View Resume <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div><!-- Team -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>	
</div>
</section>


<!-- --------------------statistiques charts------------------------------------>
<div class="account-popup-area signin-popup-box" id="myChart"  >
   <div id="tester" class="heading" ></div>
    
   
        
            <div class="dropdown-field col-lg-3"  id="selectDiv" >
                <select id="mySelect" onchange="getdata()" class="chosen">
              <option value="MSFT" selected="selected">MicroSoft</option>
              <option value="AAPL">Apple</option>
              <option value="AMZN">Amazon</option>
              <option value="GOOGL">Alphabet</option>
              <option value="FB">Facebook</option>
              <option value="CSCO">Cisco</option>
              <option value="INTC">Intel</option>
              <option value="CMCSA">Comcast</option>
              <option value="PEP">Pepsico</option>
              <option value="ADBE">Adobe</option>
            </select>
                </div>
        

</div>

<!-- Exchange rate chart-->

<div class="account-popup-area signin-popup-box" id="myChart2"  >
    <div id="tester2" class="heading" ></div>
     
    
         
    <div class="dropdown-field col-lg-3"  id="exchangeChartselectDiv" >
        <select id="exchangeSelect" onchange="getExchangedata()" class="chosen">
      <option value="USD" selected="selected">Dollar</option>
      <option value="EUR">EURO</option>
      <option value="DZD">DINAR</option>
      <option value="GBP">Pound</option>
      <option value="CHF">franc Suisse</option>
     
    </select>
    <span style="color:#fb236a;">from<span>
        </div>
        <div class="dropdown-field col-lg-3"  id="exchangeChartselectDiv2" >
           <select id="exchangeSelect2" onchange="getExchangedata()" class="chosen">
         <option value="USD" >Dollar</option>
         <option value="EUR">EURO</option>
         <option value="DZD" selected="selected">DINAR</option>
         <option value="GBP">Pound</option>
         <option value="CHF">franc Suisse</option>
        
       </select>
       <span style="color:#fb236a;">to<span>

       
           </div>
            
         
 
 </div>

 <!-- Cryptocurrencies Exchange rate chart-->

 <div class="account-popup-area signin-popup-box" id="myChart3"  >
    <div id="tester3" class="heading" ></div>
     
    
         
             <div class="dropdown-field col-lg-3"  id="cryptoSelectDiv" >
                 <select id="cryptoChartselectDiv" onchange="getCryptodata()" class="chosen">
                    <option value="USD" selected="selected">Dollar</option>
                    <option value="EUR">EURO</option>
                    <option value="DZD">DINAR</option>
                    <option value="GBP">Pound</option>
                    <option value="CHF">franc Suisse</option>
             </select>
                 </div>
         
 
 </div>

<script src="{{asset('js/mychart.js?1500')}}"></script>
@endsection

