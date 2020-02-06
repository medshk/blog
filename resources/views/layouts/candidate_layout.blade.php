@extends('layouts.static_layout')


@section('navbar')
@include('include.inc')


@endsection

<!-- static candidate dashboard -->
@section('main')
    

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block no-padding">
        <div class="container">
             <div class="row no-gape">
                 <aside class="col-lg-3 column border-right">
                     <div class="widget">
                     <div class="tree_widget-sec">
		<ul>
			<li><a href="{{url('profil')}}" title=""><i class="la la-file-text"></i>Mon Profil</a></li>
            <li><a href="{{url('resume')}}" title=""><i class="la la-briefcase"></i>Mon Resumé</a></li>
            <!-- <li><a href="{{route('logout')}}" title=""><i class="la la-unlink"></i>Logout</a></li> -->
			<li><a href="{{url('candidate/offres')}}" title=""><i class="la la-money"></i>Liste des Offres</a></li>
			<li><a href="{{url('/listpost/'. auth::guard('candidate')->user()->id  )}}" title=""><i class="la la-paper-plane"></i>Mes Offres</a></li>
			
			<li><a href="{{url('resumevide')}}" title=""><i class="la la-file-text"></i>Crée Mon CV</a></li>
			<!-- <li><a href="candidates_change_password.html" title=""><i class="la la-flash"></i>Change Password</a></li> -->
       
		</ul>
	</div>
                     </div>
                     <div class="widget">
                         <div class="skill-perc">
                             <h3>Skills Percentage </h3>
                             <p>Put value for "Cover Image" field to increase your skill up to "15%"</p>
                             <div class="skills-bar">
                                 <span>85%</span>
                                 <div 
                                     class="second circle" 
                                     data-size="155"
                                     data-thickness="60">
                                </div>
                             </div>
                         </div>
                     </div>
                 </aside>
                 <div class="col-lg-9 column">
                     <div class="padding-left">
                         
                           @yield('content')
                        
                     </div>
                </div>
             </div>
        </div>
    </div>
</section>
@endsection
