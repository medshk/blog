

<!-------------------- navbar------------------>
<div class="menu-sec">
    <div class="container">
        <div class="logo">
            <a href="index.html" title=""><img class="hidesticky" src="images/resource/logo.png" alt="" /><img class="showsticky" src="images/resource/logo10.png" alt="" /></a>
        </div>

        <!-- if guest-->
        @if (!auth::guard('candidate')->check() )
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
            <span><i class="la la-heart"></i><strong>3</strong></span>
            <div class="wishlist-dropdown">
                <ul class="scrollbar">
                    <li>
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="images/resource/l1.png" alt="" /> </div>
                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                <span>Massimo Artemisis</span>
                            </div>
                        </div><!-- Job -->
                    </li>
                    <li>
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="images/resource/l2.png" alt="" /> </div>
                                <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                <span>StarHealth</span>
                            </div>
                        </div><!-- Job -->
                    </li>
                    <li>
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>
                                <h3><a href="#" title="">Marketing Director</a></h3>
                                <span>Tix Dog</span>
                            </div>
                        </div><!-- Job -->
                    </li>
                    <li>
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>
                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                <span>Massimo Artemisis</span>
                            </div>
                        </div><!-- Job -->
                    </li>
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
        <div class="btn-extars">
            <a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Poster </a>
        </div>
    
            
        @endif
        <!-- end candidate -->
<nav>
    <ul>
        <li >
            <a href="#" title="">Home</a>
        
        </li>
        <li class="menu-item-has-children">
            <a href="#" title="">Recruteurs</a>
            <ul>
                <li><a href="employer_list1.html" title=""> Recruteur Liste </a></li>
                <li><a href="employer_single1.html" title="">Recruteur Single </a></li>
                <li class="menu-item-has-children">
                    <a href="#" title="">Recruteur Dashboard</a>
                    <ul>
                        <li><a href="employer_manage_jobs.html" title="">Gestion d'emploi </a></li>
                        <li><a href="employer_packages.html" title="">Paquet</a></li>
                        <li><a href="employer_post_new.html" title="">Nouveau poste</a></li>
                        <li><a href="employer_profile.html" title="">Recruteur Profile</a></li>
                        <li><a href="employer_resume.html" title=""> Résumé</a></li>
                        <li><a href="employer_transactions.html" title="">Transaction</a></li>
                        <li><a href="employer_job_alert.html" title="">Notification</a></li>
                        <li><a href="employer_change_password.html" title="">Changer Modepasse</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a href="#" title="">Candidates</a>
            <ul>
                <li><a href="candidates_list.html" title="">Candidates List </a></li>
                <li><a href="candidates_single.html" title="">Candidates Single </a></li>
                <li class="menu-item-has-children">
                    <a href="#" title="">Candidates Dashboard</a>
                    <ul>
                        <li><a href="candidates_my_resume.html" title="">Candidates Resume</a></li>
                        <li><a href="candidates_my_resume_add_new.html" title="">Candidates Resume new</a></li>
                        <li><a href="candidates_profile.html" title=""> Profile</a></li>
                        <li><a href="candidates_shortlist.html" title="">Liste des traveaux</a></li>
                        <li><a href="candidates_job_alert.html" title="">Alerte d'emploi</a></li>
                        <li><a href="candidates_dashboard.html" title="">Candidates Dashboard</a></li>
                        <li><a href="candidates_cv_cover_letter.html" title="">CV </a></li>
                        <li><a href="candidates_change_password.html" title="">Changer Motedepasse</a></li>
                        <li><a href="candidates_applied_jobs.html" title="">Emplois appliqués</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a href="blog_list2.html" title="">Blog</a>
            <ul>	
                <li><a href="blog_list2.html">Blog List 2</a></li>
                <li><a href="blog_single.html">Blog Single</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a href="#" title="">Emploi</a>
            <ul>
                <li><a href="job_list_modern.html">Job List Modern</a></li>
                <li><a href="job_single2.html">Job Single 2</a></li>
            </ul>
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
</nav><!-- Menus -->
    </div>
</div>