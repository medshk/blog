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
                        <h3>Employer Single</h3>
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
                                             <span><i class="la la-map-marker"></i>{{$user->adress}}</span><span class="job-is ft">Full time</span>
                                             <ul class="tags-jobs">
                                                 <li><i class="la la-file-text"></i> Applications 1</li>
                                                 <li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
                                                 <li><i class="la la-eye"></i> Views 5683</li>
                                             </ul>
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
                                         <h3>About Business Network</h3>
                                         <p>Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered inset one echidna cassowary some parrot and much as goodness some froze the sullen much connected bat wonderfully on instantaneously eel valiantly petted this along across highhandedly much. </p>
                                         <p>Repeatedly dreamed alas opossum but dramatically despite expeditiously that jeepers loosely yikes that as or eel underneath kept and slept compactly far purred sure abidingly up above fitting to strident wiped set waywardly far the and pangolin horse approving paid chuckled cassowary oh above a much opposite far much hypnotically more therefore wasp less that hey apart well like while superbly orca and far hence one.Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy.</p>
                                         <ul>
                                             <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                                             <li>Proficient in Photoshop, Illustrator, bonus points for familiarity with Sketch (Sketch is our preferred concepting)</li>
                                             <li>Cross-browser and platform testing as standard practice</li>
                                             <li>Experience using Invision a plus</li>
                                             <li>Experience in video production a plus or, at a minimum, a willingness to learn</li>
                                         </ul>
                                         <p>Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered inset one echidna cassowary some parrot and much as goodness some froze the sullen much connected bat wonderfully on instantaneously eel valiantly petted this along across highhandedly much. </p>
                                         <p>Repeatedly dreamed alas opossum but dramatically despite expeditiously that jeepers loosely yikes that as or eel underneath kept and slept compactly far purred sure abidingly up above fitting to strident wiped set waywardly far the and pangolin horse approving paid chuckled cassowary oh above a much opposite far much hypnotically more therefore wasp less that hey apart well like while superbly orca and far hence one.Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy.</p>
                                     </div>
                                     <div class="recent-jobs">
                                         <h3>Jobs from Business Network</h3>
                                         <div class="job-list-modern">
                                             <div class="job-listings-sec no-border">
                                                <div class="job-listing wtabs noimg">
                                                    <div class="job-title-sec">
                                                        <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                        <span>Massimo Artemisis</span>
                                                        <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                                    </div>
                                                    <div class="job-style-bx">
                                                        <span class="job-is ft">Full time</span>
                                                        <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                        <i>5 months ago</i>
                                                    </div>
                                                </div>
                                                <div class="job-listing wtabs noimg">
                                                    <div class="job-title-sec">
                                                        <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                                        <span>Massimo Artemisis</span>
                                                        <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                                    </div>
                                                    <div class="job-style-bx">
                                                        <span class="job-is pt ">Part time</span>
                                                        <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                        <i>5 months ago</i>
                                                    </div>
                                                </div><!-- Job -->
                                                <div class="job-listing wtabs noimg">
                                                    <div class="job-title-sec">
                                                        <h3><a href="#" title="">Regional Sales Manager South</a></h3>
                                                        <span>Massimo Artemisis</span>
                                                        <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                                    </div>
                                                    <div class="job-style-bx">
                                                        <span class="job-is ft ">Full time</span>
                                                        <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                        <i>5 months ago</i>
                                                    </div>
                                                </div><!-- Job -->
                                                <div class="job-listing wtabs noimg">
                                                    <div class="job-title-sec">
                                                        <h3><a href="#" title="">Marketing Dairector</a></h3>
                                                        <span>Massimo Artemisis</span>
                                                        <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
                                                    </div>
                                                    <div class="job-style-bx">
                                                        <span class="job-is ft ">Full time</span>
                                                        <span class="fav-job"><i class="la la-heart-o"></i></span>
                                                        <i>5 months ago</i>
                                                    </div>
                                                </div><!-- Job -->
                                            </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 column">
                                     <div class="job-overview">
                                         <h3>Company Information</h3>
                                         <ul>
                                             <li><i class="la la-eye"></i><h3>Viewed </h3><span>164</span></li>
                                             <li><i class="la la-file-text"></i><h3>Posted Jobs</h3><span>{{$offres->count()}}</span></li>
                                             <li><i class="la la-map"></i><h3>Locations</h3><span>United States, San Diego</span></li>
                                             <li><i class="la la-bars"></i><h3>Categories</h3><span>Arts, Design, Media</span></li>
                                             <li><i class="la la-clock-o"></i><h3>Since</h3><span>2002</span></li>
                                             <li><i class="la la-users"></i><h3>Team Size</h3><span>15</span></li>
                                             <li><i class="la la-user"></i><h3>Followers</h3><span>15</span></li>
                                         </ul>
                                     </div><!-- Job Overview -->
                                     <div class="quick-form-job">
                                         <h3>Contact Business Network</h3>
                                         <form>
                                             <input type="text" placeholder="Enter your Name *" />
                                             <input type="text" placeholder="Email Address*" />
                                             <input type="text" placeholder="Phone Number" />
                                             <textarea placeholder="Message should have more than 50 characters"></textarea>
                                             <button class="submit">Send Email</button>
                                             <span>You accepts our <a href="#" title="">Terms and Conditions</a></span>
                                         </form>
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
