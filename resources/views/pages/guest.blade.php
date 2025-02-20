@extends('layouts.static_layout')


@section('navbar')
@include('include.inc')


@endsection
<!-- la partie dynamique de home-->
@section('main')
    


<section>
    <div class="block no-padding">
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-featured-sec">
                        <div class="new-slide-2">
                            <img src="images/resource/vector-2.png">
                        </div>
                        <div class="job-search-sec">
                            <div class="job-search">
                                <h3>Le moyen le plus simple d'obtenir votre nouvel emploi</h3>
                                <span>Trouver des emplois, des opportunités d'emploi et de carrière</span>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                            <div class="job-field">
                                                <input type="text" placeholder="Titre du poste, mots-clés ou nom de l'entreprise" />
                                                <i class="la la-keyboard-o"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                            <div class="job-field">
                                                <select data-placeholder="Ville, province ou région" class="chosen-city">
                                                    <option>New York </option>
                                                    <option>Istanbul</option>
                                                    <option>London</option>
                                                    <option>Russia</option>
                                                </select>
                                                <i class="la la-map-marker"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                            <button type="submit"><i class="la la-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <div class="or-browser">
                                    <span>Parcourir les offres d'emploi par</span>
                                    <a href="#" title="">Catégorie</a>
                                </div>
                            </div>
                        </div>
                        <div class="scroll-to">
                            <a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="scroll-here">
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Catégories populaires</h2>
                        <span>37 emplois en direct - 0 ajoutés aujourd'hui.</span>
                    </div><!-- Heading -->
                    <div class="cat-sec">
                        <div class="row no-gape">
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="la la-bullhorn"></i>
                                        <span>Design, Art & Multimedia</span>
                                        <p>(22 poste libre)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="la la-graduation-cap"></i>
                                        <span>Formation à l'éducation</span>
                                        <p>(6 poste libre)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="la la-line-chart "></i>
                                        <span>Comptabilité et Finance</span>
                                        <p>(3 poste libre)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="la la-users"></i>
                                        <span>Ressource humaine</span>
                                        <p>(3 poste libre)</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-sec">
                        <div class="row no-gape">
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="la la-phone"></i>
                                        <span>Telecommunications</span>
                                        <p>(22 poste libre)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="la la-cutlery"></i>
                                        <span>Restaurant / Service alimentaire</span>
                                        <p>(6 poste libre)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="la la-building"></i>
                                        <span>Construction / Installations</span>
                                        <p>(3 poste libre)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <i class="la la-user-md"></i>
                                        <span>Santé</span>
                                        <p>(3 poste libre)</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="browse-all-cat">
                        <a href="#" title="">Parcourir toutes les catégories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block double-gap-top double-gap-bottom">
        <div data-velocity="-.1" style="background: url(images/resource/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="simple-text-block">
                        <h3>Faites une différence avec votre CV en ligne!</h3>
                        <span>Votre CV en quelques minutes avec l'assistant de CV JobHunt est prêt!</span>
                        <a  title=""  class="signup-popup">Créer un compte</a>
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
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Emplois en vedette</h2>
                        <span>Principaux employeurs utilisant déjà des emplois et des talents.</span>
                    </div><!-- Heading -->
                    <div class="job-listings-sec">
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img src="images/resource/l1.png" alt="" /> </div>
                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                <span>Massimo Artemisis</span>
                            </div>
                            <span class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</span>
                            <span class="fav-job"><i class="la la-heart-o"></i></span>
                            <span class="job-is ft">À PLEIN TEMPS</span>
                        </div><!-- Job -->
                     
                      
                       
                       
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="browse-all-cat">
                        <a href="#" title="">Charger plus d'annonces</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Featured Candidates</h2>
                        <span>Every single one of our jobs has some kind of flexibility option</span>
                    </div><!-- Heading -->
                    <div class="team-sec">
                        <div class="row" id="team-carousel">
                            <div class="col-lg-3">
                                <div class="team">
                                    <div class="team-img"><img src="images/resource/t1.jpg" alt="" /></div>
                                    <div class="team-detail">
                                        <h3><a href="#" title="">Amanda Cook</a></h3>
                                        <span>I Knew You Were Trouble</span>
                                        <p>The Random Name Generator is a simple fiction writing tool…</p>
                                        <a href="#" title="">View Resume <i class="la la-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- Team -->
                            </div>
                            <div class="col-lg-3">
                                <div class="team">
                                    <div class="team-img"><img src="images/resource/t2.jpg" alt="" /></div>
                                    <div class="team-detail">
                                        <h3><a href="#" title="">İbrahim Agay</a></h3>
                                        <span>Developer</span>
                                        <p>The Random Name Generator is a simple fiction writing tool…</p>
                                        <a href="#" title="">View Resume <i class="la la-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- Team -->
                            </div>
                            <div class="col-lg-3">
                                <div class="team">
                                    <div class="team-img"><img src="images/resource/t3.jpg" alt="" /></div>
                                    <div class="team-detail">
                                        <h3><a href="#" title="">Ali Tufan</a></h3>
                                        <span>Senior UI / UX Designer</span>
                                        <p>The Random Name Generator is a simple fiction writing tool…</p>
                                        <a href="#" title="">View Resume <i class="la la-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- Team -->
                            </div>
                            <div class="col-lg-3">
                                <div class="team">
                                    <div class="team-img"><img src="images/resource/t4.jpg" alt="" /></div>
                                    <div class="team-detail">
                                        <h3><a href="#" title="">Juan Suso</a></h3>
                                        <span>IT Outsource Company</span>
                                        <p>The Random Name Generator is a simple fiction writing tool…</p>
                                        <a href="#" title="">View Resume <i class="la la-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- Team -->
                            </div>
                            <div class="col-lg-3">
                                <div class="team">
                                    <div class="team-img"><img src="images/resource/t2.jpg" alt="" /></div>
                                    <div class="team-detail">
                                        <h3><a href="#" title="">Senimae Zuis</a></h3>
                                        <span>Web Designer</span>
                                        <p>The Random Name Generator is a simple fiction writing tool…</p>
                                        <a href="#" title="">View Resume <i class="la la-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- Team -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div data-velocity="-.1" style="background: url(images/resource/parallax2.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading light">
                        <h2>Mots gentils des candidats heureux</h2>
                        <span>Ce que les autres ont pensé du service fourni par JobHunt</span>
                    </div><!-- Heading -->
                    <div class="reviews-sec" id="reviews-carousel">
                        <div class="col-lg-6">
                            <div class="reviews">
                                <img src="images/resource/r1.jpg" alt="" />
                                <h3>Augusta Silva <span>Web designer</span></h3>
                                <p>Sans JobHunt, je serais sans-abri, ils m'ont trouvé un emploi et m'ont rapidement réglé le problème! Je ne peux pas croire le service</p>
                            </div><!-- Reviews -->
                        </div>
                        <div class="col-lg-6">
                            <div class="reviews">
                                <img src="images/resource/r2.jpg" alt="" />
                                <h3>Ali Tufan <span>Web designer</span></h3>
                                <p>Sans JobHunt, je serais sans-abri, ils m'ont trouvé un emploi et m'ont rapidement réglé le problème! Je ne peux pas croire le service</p>
                            </div><!-- Reviews -->
                        </div>
                        <div class="col-lg-6">
                            <div class="reviews">
                                <img src="images/resource/r1.jpg" alt="" />
                                <h3>Augusta Silva <span>Web designer</span></h3>
                                <p>Sans JobHunt, je serais sans-abri, ils m'ont trouvé un emploi et m'ont rapidement réglé le problème! Je ne peux pas croire le service</p>
                            </div><!-- Reviews -->
                        </div>
                        <div class="col-lg-6">
                            <div class="reviews">
                                <img src="images/resource/r2.jpg" alt="" />
                                <h3>Ali Tufan <span>Web designer</span></h3>
                                <p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
                            </div><!-- Reviews -->
                        </div>
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
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Entreprises que nous avons aidées</h2>
                        <span>Certaines des sociétés que nous avons aidées à recruter d’excellents candidats au fil des ans.</span>
                    </div><!-- Heading -->
                    <div class="comp-sec">
                        <div class="company-img">
                            <a href="#" title=""><img src="images/resource/cc1.jpg" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="images/resource/cc2.jpg" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="images/resource/cc3.jpg" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="images/resource/cc4.jpg" alt="" /></a>
                        </div><!-- Client  -->
                        <div class="company-img">
                            <a href="#" title=""><img src="images/resource/cc5.jpg" alt="" /></a>
                        </div><!-- Client  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div data-velocity="-.1" style="background: url(images/resource/parallax3.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Conseils de carrière rapides</h2>
                        <span>Trouvé par les employeurs communiquent directement avec les gestionnaires d'embauche et les recruteurs.</span>
                    </div><!-- Heading -->
                    <div class="blog-sec">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="my-blog">
                                    <div class="blog-thumb">
                                        <a href="#" title=""><img src="images/resource/b1.jpg" alt="" /></a>
                                        <div class="blog-metas">
                                            <a href="#" title="">March 29, 2017</a>
                                            <a href="#" title="">0 Comments</a>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h3><a href="#" title="">Attirer plus d'attention sur les ventes et les bénéfices</a></h3>
                                        <p>Un travail est une activité régulière exercée en échange de devenir employé, de bénévolat, </p>
                                        <a href="#" title=""> Lire la suite<i class="la la-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="my-blog">
                                    <div class="blog-thumb">
                                        <a href="#" title=""><img src="images/resource/b2.jpg" alt="" /></a>
                                        <div class="blog-metas">
                                            <a href="#" title="">March 29, 2017</a>
                                            <a href="#" title="">0 Comments</a>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h3><a href="#" title="">11 conseils pour vous aider à obtenir de nouveaux clients</a></h3>
                                        <p>Un travail est une activité régulière exercée en échange devenant un employé, faisant du bénévolat, </p>
                                        <a href="#" title="" >Lire plus<i class="la la-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="my-blog">
                                    <div class="blog-thumb">
                                        <a href="#" title=""><img src="images/resource/b3.jpg" alt="" /></a>
                                        <div class="blog-metas">
                                            <a href="#" title="">March 29, 2017</a>
                                            <a href="#" title="">0 Comments</a>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h3><a href="#" title="">Un éditeur de journal surmené</a></h3>
                                        <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                        <a href="#" title="">Lire plus <i class="la la-long-arrow-right"></i></a>
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
<section>
    <div class="block gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Projob Site Stats</h2>
                        <span>Here we list our site stats and how many people we’ve helped find a job and companies have found <br />recruits. It's a pretty awesome stats area!</span>
                    </div><!-- Heading -->
                    <div class="stats-sec style2">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="stats">
                                    <span>18</span>
                                    <h5>Jobs Posted</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="stats">
                                    <span>38</span>
                                    <h5>Jobs Filled</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="stats">
                                    <span>67</span>
                                    <h5>Companies</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="stats">
                                    <span>92</span>
                                    <h5>Members</h5>
                                </div>
                            </div>
                        </div>
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
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>How It Works</h2>
                        <span>Each month, more than 7 million Jobhunt turn to website in their search for work, making over <br />160,000 applications every day.
                        </span>
                    </div><!-- Heading -->
                    <div class="how-to-sec style2 no-lines">
                        <div class="how-to">
                            <span class="how-icon"><i class="la la-user"></i></span>
                            <h3>Register an account</h3>
                            <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                        </div>
                        <div class="how-to">
                            <span class="how-icon"><i class="la la-file-archive-o"></i></span>
                            <h3>Specify & search your job</h3>
                            <p>Browse profiles, reviews, and proposals then interview top candidates. </p>
                        </div>
                        <div class="how-to">
                            <span class="how-icon"><i class="la la-list"></i></span>
                            <h3>Apply for job</h3>
                            <p>Use the Upwork platform to chat, share files, and collaborate from your desktop or on the go.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="block ">
        <div data-velocity="-.2" style="background: url(images/resource/parallax5.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Buy Our Plans And Packeges</h2>
                        <span>One of our jobs has some kind of flexibility option - such as telecommuting, a part-time schedule or a flexible or flextime schedule.</span>
                    </div><!-- Heading -->
                    <div class="plans-sec">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="pricetable style2">
                                    <div class="pricetable-head">
                                        <h3>Basic Jobs</h3>
                                        <h2><i>$</i>10</h2>
                                        <span>15 Days</span>
                                    </div><!-- Price Table -->
                                    <ul>
                                        <li>1 job posting</li>
                                        <li>0 featured job</li>
                                        <li>Job displayed for 20 days</li>
                                        <li>Premium Support 24/7</li>
                                    </ul>
                                    <a href="#" title="">BUY NOW</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="pricetable active style2">
                                    <div class="pricetable-head">
                                        <h3>Standard Jobs</h3>
                                        <h2><i>$</i>45</h2>
                                        <span>20 Days</span>
                                    </div><!-- Price Table -->
                                    <ul>
                                        <li>11 job posting</li>
                                        <li>12 featured job</li>
                                        <li>Job displayed for 30 days</li>
                                        <li>Premium Support 24/7</li>
                                    </ul>
                                    <a href="#" title="">BUY NOW</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="pricetable style2">
                                    <div class="pricetable-head">
                                        <h3>Golden Jobs</h3>
                                        <h2><i>$</i>80</h2>
                                        <span>2 Month</span>
                                    </div><!-- Price Table -->
                                    <ul>
                                        <li>44 job posting</li>
                                        <li>56 featured job</li>
                                        <li>Job displayed for 80 days</li>
                                        <li>Premium Support 24/7</li>
                                    </ul>
                                    <a href="#" title="">BUY NOW</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="pricetable style2">
                                    <div class="pricetable-head">
                                        <h3>Golden Jobs</h3>
                                        <h2><i>$</i>80</h2>
                                        <span>2 Month</span>
                                    </div><!-- Price Table -->
                                    <ul>
                                        <li>44 job posting</li>
                                        <li>56 featured job</li>
                                        <li>Job displayed for 80 days</li>
                                        <li>Premium Support 24/7</li>
                                    </ul>
                                    <a href="#" title="">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="block no-padding">
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="simple-text">
                        <h3>Une question?</h3>
                        <span>Nous sommes là pour vous aider. Consultez notre FAQ, envoyez-nous un email ou appelez-nous au 1 (800) 555-5555</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="account-popup-area signin-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>User Login</h3>
		<span>Click To Login With Demo User</span>
		<div class="select-user">
			<span id="c">Candidate</span>
			<span id="r">Recruteur</span>
		</div>
    <form id="fr1" method="post" action="{{route('candidate_login')}}">
            @csrf
			<div class="cfield">
				<input type="text" placeholder="Email" name="email"/>
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" name="password"/>
				<i class="la la-key"></i>
			</div>
			<p class="remember-label">
				<input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
			</p>
			<a href="#" title="">Forgot Password?</a>
			<button type="submit">Login</button>
        </form>
        <!-- recruteur login form-->
        <form id="form_2" method="POST" action="{{route('recruteur_login')}}">
            @csrf
			<div class="cfield">
				<input type="text" placeholder="Email" name="email"/>
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" name="password"/>
				<i class="la la-key"></i>
			</div>
			<p class="remember-label">
				<input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
			</p>
			<a href="#" title="">Forgot Password?</a>
			<button type="submit">Login</button>
        </form>
     
		<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>Sign Up</h3>
		<div class="select-user">
			<span id="can" >Candidate</span> 
			<span id="rec">Recruteur</span>
        </div>
        <!-- register candidate form-->
        <form id="form1" method="post" action="{{ route('register_candidate') }}">
            @csrf
            <div class="dropdown-field">
            <select data-placeholder="Please Select Specialism" class="chosen" name="civilite">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
                <option value="Mlle">Mlle</option>
                <option value="Pr">Pr</option>
                <option value="Dr">Dr</option>
                
            </select>
            </div>
			<div class="cfield">
				<input type="text" placeholder="Nom" name="nom" />
				<i class="la la-user"></i>
            </div>
            <div class="cfield">
				<input type="text" placeholder="Prenom" name="prenom" />
				<i class="la la-user"></i>
            </div>
            <div class="cfield">
				<input type="text" placeholder="Email" name="email"/>
				<i class="la la-envelope-o"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" name="password"/>
				<i class="la la-key"></i>
			</div>
		
			<button type="submit">Signup</button>
        </form>
        <!-- recruteur form-->
    <form id="form2" method="POST" action="{{route('register_recruteur')}}">
        @csrf
			<div class="cfield">
				<input type="text" placeholder="Nom" name="nom"/>
				<i class="la la-user"></i>
            </div>
            <div class="dropdown-field">
				<select data-placeholder="Please Select Specialism" class="chosen" name="type">
					<option value="prive">Privé</option>
					<option value="public">Public</option>
					
				</select>
            </div>
            <div class="cfield">
				<input type="text" placeholder="Email" name="email"/>
				<i class="la la-envelope-o"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" name="password"/>
				<i class="la la-key"></i>
			</div>
			
			<div class="cfield">
				<input type="text" placeholder="Phone Number" name="num_tel"/>
				<i class="la la-phone"></i>
			</div>
			<button type="submit">Signup</button>
		</form>
		<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div><!-- SIGNUP POPUP -->

@endsection

