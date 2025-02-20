

<!-------------------- navbar------------------>
<div class="menu-sec">
    <div class="container">
        <div class="logo">
            <a href="index.html" title=""><img class="hidesticky" src="images/resource/logo.png" alt="" /><img class="showsticky" src="images/resource/logo10.png" alt="" /></a>
        </div>

        <!-- if guest-->
        @if (!auth::guard('candidate')->check()&&!auth::guard('recruteur')->check() )
      

        <div class="btn-extars">
            <a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Poster des emplois</a>
            <ul class="account-btns">
                <li class="signup-popup"><a title=""><i class="la la-key"></i> S'inscrire</a></li>
                <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Connecter</a></li>
            </ul>
        </div><!-- Btn Extras -->
        @endif


        <!-- if candidate -->
        @if (auth::guard('candidate')->check())


        <div class="my-profiles-sec">
            <span><img src="{{ asset('uploads/candidat/'.auth::guard('candidate')->user()->photo)}}" style='max-width:70px;width:70px;' alt="" /><i class="la la-bars"> {{auth::guard('candidate')->user()->nom}}
                 {{auth::guard('candidate')->user()->prenom}}</i></span>
        </div>

        <div class="wishlist-dropsec">
            <span><i class="la la-heart"></i><strong>1</strong></span>
            <div class="wishlist-dropdown">
                <ul class="scrollbar">
       
                    <li>
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="images/resource/l5.png" alt="" /> </div>
                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                <span>Massimo Artemisis</span>
                            </div>
                        </div><!-- Job -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- end candidate -->

        <!-- if recruteur-->
        @elseif(auth::guard('recruteur')->check())
        <div class="btns-profiles-sec">
        @if(isset(auth::guard('recruteur')->user()->logo))
            <span><img src="{{auth::guard('recruteur')->user()->logo}}" alt="" style="max-width:40px" /> Menu <i class="la la-angle-down"></i></span>
         

        @elseif(!isset(auth::guard('recruteur')->user()->logo))
            <span><img src="images/resource/profile.jpg" alt="" /> Menu <i class="la la-angle-down"></i></span>
         @endif
                                         
            <ul>
                <li><a href="{{url('recruteur/'.auth::guard('recruteur')->user()->id.'/profile')}}" title=""><i class="la la-file-text"></i>Profile</a></li>
                <li><a href="{{url('offre/create')}}" title=""><i class="la la-briefcase"></i>Poster Offre</a></li>
                <li><a href="{{url('recruteur/'.auth::guard('recruteur')->user()->id.'/offres')}}" title=""><i class="la la-money"></i>Voir les offres</a></li>
              <!--  <li><a href="employer_resume.html" title=""><i class="la la-paper-plane"></i>Resumes</a></li> 
                <li><a href="employer_packages.html" title=""><i class="la la-user"></i>Packages</a></li>
                <li><a href="employer_post_new.html" title=""><i class="la la-file-text"></i>Post a New Job</a></li>
                <li><a href="employer_job_alert.html" title=""><i class="la la-flash"></i>Job Alerts</a></li>-->
                <li><a href="{{url('recruteur/'.auth::guard('recruteur')->user()->id.'/edit')}}" title=""><i class="la la-lock"></i>Changer Profile</a></li>
                <li><a href="{{route('logout')}}" title=""><i class="la la-unlink"></i>Logout</a></li>
            </ul>
        </div>


        @endif




     
      
       
        
<nav>
    <ul>
        <li >
            <a href="{{url('recruteur')}}" title="">Home</a>

        </li>
        @if (!auth::guard('recruteur')->check())
        <li class="menu-item-has-children">
            <a href="#" title="">Recruteurs</a>
        
        </li>
        @endif
        @if (!auth::guard('candidate')->check())
        <li class="menu-item-has-children">
            <a href="" title="">Candidates</a>
           
        </li>
        @endif
        <li class="menu-item-has-children">
            <a href="blog_list2.html" title="">Blog</a>
            <ul>
                <li><a href="blog_list2.html">Blog List 2</a></li>
                <li><a href="blog_single.html">Blog Single</a></li>
            </ul>
        </li>
        @if (!auth::guard('recruteur')->check())
        <li >
        <a href="{{route('offreListe')}}" title="">Emploi</a>
           
        </li>
        <li class="menu-item-has-children">
            <a href="#" title="">Pages</a>
            <ul>
                <li><a href="about.html" title="">About Us</a></li>
                <li><a href="404.html" title="">404 Error</a></li>
                <li><a href="contact.html" title="">Contact Us 1</a></li>
                <li><a href="contact2.html" title="">Contact Us 2</a></li>
                <li><a href="faq.html" title="">FAQ's</a></li>
                <li><a href="how_it_works.html" title="">How it works</a></li>
                <li><a href="login.html" title="">Login</a></li>
                <li><a href="pricing.html" title="">Pricing Plans</a></li>
                <li><a href="register.html" title="">Register</a></li>
                <li><a href="terms_and_condition.html" title="">Terms & Condition</a></li>
            </ul>
        </li>
    </ul>
    @endif
     
</nav><!-- Menus -->
    </div>
</div>

<!-- profile side bar-->
@if(auth::guard('candidate')->check())
<div class="profile-sidebar">
	<span class="close-profile"><i class="la la-close"></i></span>
	<div class="can-detail-s">
		<div class="cst"><img src="{{ asset('uploads/candidat/'.auth::guard('candidate')->user()->photo)}}" alt="" /></div>
		<h3>{{auth::guard('candidate')->user()->nom}} {{auth::guard('candidate')->user()->prenom}}</h3>
	
		<p>Member Since, 2017</p>
		<p><i class="la la-map-marker"></i>{{auth::guard('candidate')->user()->adress}}</p>
	</div>
	<div class="tree_widget-sec">
		<ul>
        <li><a href="{{url('candidat')}}" title=""><i class="fa fa-tachometer"></i>Dashboard</a></li>
        <li><a href="{{url('resumevide')}}" title=""><i class="la la-file-text"></i>Crée Mon CV</a></li>
			<li><a href="{{url('profil')}}" title=""><i class="la la-file-text"></i>Mon Profil</a></li>
            <li><a href="{{url('resume')}}" title=""><i class="la la-briefcase"></i>Mon Resumé</a></li>
            
			<li><a href="{{url('candidate/offres')}}" title=""><i class="la la-money"></i>Liste des Offres</a></li>
			<li><a href="{{url('/listpost/'. auth::guard('candidate')->user()->id  )}}" title=""><i class="la la-paper-plane"></i>Mes Offres</a></li>
			
			
			<!-- <li><a href="candidates_change_password.html" title=""><i class="la la-flash"></i>Change Password</a></li> -->
       
		</ul>
	</div>
</div>
@endif
