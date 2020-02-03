

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
            <span><img src="images/resource/mp1.jpg" alt="" /><i class="la la-bars"> {{auth::guard('candidate')->user()->nom}}
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
            <span><img src="images/resource/profile.jpg" alt="" />{{auth::guard('recruteur')->user()->nom}}<i class="la la-angle-down"></i></span>
            <ul>
                <li><a href="recruteur/{{auth::guard('recruteur')->user()->id}}/profile" title=""><i class="la la-file-text"></i>Company Profile</a></li>
                <li><a href="recruteur/{{auth::guard('recruteur')->user()->id}}/offres" title=""><i class="la la-briefcase"></i>Manage Jobs</a></li>
                <li><a href="employer_transactions.html" title=""><i class="la la-money"></i>Transactions</a></li>
                <li><a href="employer_resume.html" title=""><i class="la la-paper-plane"></i>Resumes</a></li>
                <li><a href="employer_packages.html" title=""><i class="la la-user"></i>Packages</a></li>
                <li><a href="{{url('offre/create')}}" title=""><i class="la la-file-text"></i>Post a New Job</a></li>
                <li><a href="employer_job_alert.html" title=""><i class="la la-flash"></i>Job Alerts</a></li>
                <li><a href="recruteur/{{auth::guard('recruteur')->user()->id}}/edit" title=""><i class="la la-lock"></i>Change Password</a></li>
                <li><a href="{{route('logout')}}" title=""><i class="la la-unlink"></i>Logout</a></li>
            </ul>
        </div>


        @endif




     
      
       
        
<nav>
    <ul>
        <li >
            <a href="#" title="">Home</a>

        </li>
        @if (!auth::guard('recruteur')->check())
            
        
        <li ">
            <a href="" title="">Recruteurs</a>
           
        </li>
        @endif

        @if (!auth::guard('candidate')->check())
        <li >
            <a href="#" title="">Candidates</a>
           
        </li>
        @endif
        <li ">
            <a href="blog_list2.html" title="">Blog</a>
            <ul>
                <li><a href="blog_list2.html">Blog List 2</a></li>
                <li><a href="blog_single.html">Blog Single</a></li>
            </ul>
        </li>
        @if (!auth::guard('recruteur')->check())
        <li >
            <a href="#" title="">Emploi</a>
           
        </li>
        @endif
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
</nav><!-- Menus -->
    </div>
</div>

<!-- profile side bar-->
@if(auth::guard('candidate')->check())
<div class="profile-sidebar">
	<span class="close-profile"><i class="la la-close"></i></span>
	<div class="can-detail-s">
		<div class="cst"><img src="images/resource/es1.jpg" alt="" /></div>
		<h3>David CARLOS</h3>
		<span><i>UX / UI Designer</i> at Atract Solutions</span>
		<p><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6300110602170a15060f021a061110535b5b23040e020a0f4d000c0e">[email&#160;protected]</a></p>
		<p>Member Since, 2017</p>
		<p><i class="la la-map-marker"></i>Istanbul / Turkey</p>
	</div>
	<div class="tree_widget-sec">
		<ul>
			<li><a href="candidates_profile.html" title=""><i class="la la-file-text"></i>My Profile</a></li>
			<li><a href="candidates_my_resume.html" title=""><i class="la la-briefcase"></i>My Resume</a></li>
			<li><a href="candidates_shortlist.html" title=""><i class="la la-money"></i>Shorlisted Job</a></li>
			<li><a href="candidates_applied_jobs.html" title=""><i class="la la-paper-plane"></i>Applied Job</a></li>
			<li><a href="candidates_job_alert.html" title=""><i class="la la-user"></i>Job Alerts</a></li>
			<li><a href="candidates_cv_cover_letter.html" title=""><i class="la la-file-text"></i>Cv & Cover Letter</a></li>
			<li><a href="candidates_change_password.html" title=""><i class="la la-flash"></i>Change Password</a></li>
        <li><a href="{{route('logout')}}" title=""><i class="la la-unlink"></i>Logout</a></li>
		</ul>
	</div>
</div>
@endif
