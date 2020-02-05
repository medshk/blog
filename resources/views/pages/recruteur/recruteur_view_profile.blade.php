@extends('layouts.static_layout')
@section('navbar')
    @include('include.inc')
@endsection
@section('main')


<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Profile Entreprise</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 column">
                     <div class="job-single-sec style3">
                         <div class="job-head-wide">
                             <div class="row">
                                 <div class="col-lg-10">
                                     <div class="job-single-head3 emplye">
                                         <div class="job-thumb">
                                           @if(isset($user->logo))
                                            <img src="{{asset($user->logo)}}" alt="" />
                                            @endif
                                          </div>
                                         <div class="job-single-info3">
                                             <h3>{{$user->nom}}</h3>
                                             <span><i class="la la-map-marker"></i>{{$user->adress}}</span>
                                         </div>
                                     </div><!-- Job Head -->
                                 </div>
                                 <div class="col-lg-2">
                                     <div class="share-bar">
                                         <a href="#" title="" class="share-google"><i class="la la-google"></i></a><a href="#" title="" class="share-fb"><i class="fa fa-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="fa fa-twitter"></i></a>
                                     </div>
                                     <div class="emply-btns">
                                         <a class="seemap" href="#" title=""><i class="la la-map-marker"></i> See On Map</a>
                                         <a class="followus" href="#" title=""><i class="la la-paper-plane"></i> Follow us</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="job-wide-devider">
                             <div class="row">
                                 <div class="col-lg-8 column">
                                     <div class="job-details">
                                         <h3>A propos de <b>{{$user->nom}}</b></h3>
<br>
<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
 
<div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat:35.7300362 , lng: -0.5852167};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 10, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARNL0H7Pvr1Rfo16dBoM55iuPOdjomTvs&sensor=false&callback=initMap">
    </script>
 
                                        <h3>Adresse :</h3>
                                          <h4>{{$user->adress}}</h4>
<br><br>
                                        <h3>site web :</h3>
                                          <h4>{{$user->site_web}}</h4>
                                          <br><br>

                                        <h3>numuro de téléphone :</h3>
                                          <h4>{{$user->num_tel}}</h4>
                                          <br><br>
                                          
                                      </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</section>

@endsection
