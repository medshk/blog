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
							<div class="container">
								<div class="row">
									<div class="col-lg-6">
										<div class="skills-btn">
											<a href="#" title="">Photoshop</a>
											<a href="#" title="">Designers</a>
											<a href="#" title="">Illustrator</a>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="action-inner">
											<a href="#" title=""><i class="la la-paper-plane"></i>Save Resume</a>
											<a href="#" title=""><i class="la la-envelope-o"></i>Contact David</a>
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


	<!-- <form action="{{url('single/'.$candidat->id)}}" method="POST"> -->

	<section class="overlape">
		<div class="block remove-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="cand-single-user">
							<div class="share-bar circle">
				 				<a href="#" title="" class="share-google"><i class="la la-google"></i></a><a href="#" title="" class="share-fb"><i class="fa fa-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="fa fa-twitter"></i></a>
				 			</div>
				 			<div class="can-detail-s">
				 				<div class="cst"><img src="{{ asset('uploads/candidat/'.$candidat->photo)}}" alt="" /></div>
				 				<h3>{{$candidat->nom}} {{$candidat->prenom}}</h3>
				 				<p> {{$candidat->date_naissance}}</p>
				 				<p> <span>LinkedIn</span>{{$candidat->lien_linkedin}}"</p>
				 				<p><i class="la la-map-marker"></i>{{$candidat->adress}}</p>
				 			</div>

							 <div class="download-cv">
				 				<a href="#" title="">Download <i class="la la-download"></i></a>
				 			</div>


							 
				 			
				 		</div>
				 		<ul class="cand-extralink">
				 		
				 			<li><a href="#education" title="">Formations</a></li>
				 			<li><a href="#experience" title="">Experience</a></li>
				 			<li><a href="#portfolio" title="">Diplome et Certification</a></li>
				 			<li><a href="#skills" title="">Comptences</a></li>
				 			<li><a href="#awards" title="">CV et Lettre de Motivation</a></li>
				 		</ul>
						
						 @foreach($cvs as $cv)
						 @if($cv->idCandidate == $candidat->id) 
						<br>
						

				 		<div class="cand-details-sec">
						 <div>
						 <h2> {{$cv->titre}} </h2>
						 </div>
				 			<div class="row">
				 				<div class="col-lg-8 column">
				 					<div class="cand-details" id="about">
				 						
				 						<div class="edu-history-sec" id="education">
				 							<h2>Formations</h2>

											 @foreach($formations as $formation)
												@if($formation->idCv == $cv->id)

														
		 							<div class="edu-history">
		 								<i class="la la-graduation-cap"></i>
		 								<div class="edu-hisinfo">
		 									<h3>{{$formation->lieu}}</h3>
		 									<i>{{$formation->date_de_debut}} - {{$formation->date_de_fin}}</i>
		 									<span>{{$formation->diplome}} <i>{{$formation->domaine}}</i></span>
		 									
		 								</div>
				 							</div>
											 @endif
											 @endforeach
				 							
				 						</div>
				 						<div class="edu-history-sec" id="experience">
				 							<h2>Travail et Experience</h2>
											 
							   @foreach($experiences as $experience)
												@if($experience->idCv == $cv->id)
				 							
												<div class="edu-history style2">
		 								<i></i>
		 								<div class="edu-hisinfo">
		 									<h3>{{$experience->intitule}} </h3>
		 									<i>{{$experience->date_de_debut}} - {{$experience->date_de_fin}}</i>
		 									<p>{{$experience->description}}</p>
		 								</div>
										 @endif
											 @endforeach
				 						</div>
										 </div>
				 						<!-- <div class="mini-portfolio" id="portfolio">
				 							<h2>Diplome et Certification</h2>
				 							<div class="mp-row">
				 								<div class="mp-col">
				 									<div class="mportolio"><img src="images/resource/hh.jpg" alt="" /><a href="#" title=""><i class="la la-search"></i></a></div>
				 								</div>
				 								<div class="mp-col">
				 									<div class="mportolio"><img src="images/resource/dd.jpg" alt="" /><a href="#" title=""><i class="la la-search"></i></a></div>
				 								</div>
				 								
				 							</div>
				 						</div> -->
				 						<div class="progress-sec" id="skills">
				 							<h2>Compétences</h2>
											 
								 @foreach($competences as $competence)
												@if($competence->idCv == $cv->id)
				 							<div class="progress-sec">
				 								<span>{{$competence->description}}p</span>
				 								<div class="progressbar"> <div class="progress" style="width: 90%;"><span>90%</span></div> </div>
				 							</div>

 @endif
											 @endforeach
				 							
				 						
				 							
				 						
				 							</div>
										<div class="mini-portfolio" id="portfolio">
										@foreach($documents as $document)
												@if($document->idCv == $cv->id)

				 							<h2>Autre Documents</h2>
				 							<div class="mp-row">
				 								<div class="mp-col">
				 									<div class="mportolio"><img src="{{ asset('uploads/candidat/'.$document->fichier)}}" alt="" /><a href="#" title=""><i class="la la-search"></i></a></div>
				 								</div>
				 								
				 								
				 							</div>
											 
 @endif
											 @endforeach
				 							

				 						</div> 




				 						</div>
				 					</div>
				 				</div>
				 				
				 			</div>
				 		</div>
						 @endif
@endforeach

<div class="col-lg-4 column">
						 			<!-- <div class="job-overview">
							 			<h3>Aperçu de l'emploi</h3>
							 			<ul>
							 				<li><i class="la la-money"></i><h3>salaire ofert</h3><span>15000 - 20000</span></li>
							 				<li><i class="la la-mars-double"></i><h3>Sexe</h3><span>Homme</span></li>
							 				<li><i class="la la-thumb-tack"></i><h3>Niveau de la carriere</h3><span>Expert</span></li>
							 				<li><i class="la la-puzzle-piece"></i><h3>Spécialité</h3><span>Management</span></li>
							 				<li><i class="la la-shield"></i><h3>Experience</h3><span>2 ans</span></li>
							 				<li><i class="la la-line-chart "></i><h3>Niveau d'étude</h3><span>Bac+5</span></li>
							 			</ul>
							 		</div> --><!-- Job Overview -->
							 		<div class="quick-form-job">
							 			<h3>Contact</h3>
							 			<form>
							 				<input type="text" placeholder="Enter your Name *" />
							 				<input type="text" placeholder="Email Address*" />
							 				<input type="text" placeholder="Phone Number" />
							 				<textarea placeholder="Message should have more than 50 characters"></textarea>
							 				<button class="submit">Envoyer Email</button>
							 				<span>You accepts our <a href="#" title="">Terms and Conditions</a></span>
							 			</form>
							 		</div>
						 		</div>

					</div>
				</div>
			</div>
		</div>
	</section>
  
@endsection