@extends('layouts.candidate_layout')


@section('content')

<div class="profile-title">
					 			<h3>Mon Profil</h3>
					 		
					 			<div class="upload-img-bar">
					 				<span class="round"><img src="images/resource/mpf1.jpg" alt="" /><i>x</i></span>
					 				<div class="upload-info">
					 					<a href="#" title="">Browse</a>
					 					<span>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</span>
					 				</div>
					 			</div>
					 		</div>
					 		<div class="profile-form-edit">
                             
                             <form action="{{url('profil/'.auth::guard('candidate')->user()->id) }}"  method="POST">
                             
                        	<input type="hidden" name="_method" value="PUT">
	                        {{ csrf_field()}}


					 				<div class="row">
         
		
							

 
											<div class="col-lg-6">
													<span class="pf-title">Civilité</span>
													<div class="pf-field">
														<select data-placeholder="Please Select Specialism" name="civilite" class="chosen" value="{{auth::guard('candidate')->user()->civilite}}">
														   <option>MR</option>
														   <option>Mme</option>
														   <option>Mlle</option>
														   <option>DR</option>
													   </select>
													</div>
												</div>

					 					<div class="col-lg-6">
					 						<span class="pf-title">Nom </span>
					 						<div class="pf-field">
					 							<input type="text" name="nom"  value="{{auth::guard('candidate')->user()->nom}}" />
					 						</div>
										 </div>

                                         <div class="col-lg-6">
												<span class="pf-title">Prénom</span>
												<div class="pf-field">
													
												   <input type="text" name="prenom" value="{{auth::guard('candidate')->user()->prenom}}">
												</div>
											</div>
										 <div class="col-lg-6">
												<span class="pf-title">Datte de Naissance</span>
												<div class="pf-field">
													
												   <input type="date" name="date_naissance" value="{{auth::guard('candidate')->user()->date_naissance}}">
												</div>
											</div>

					 					
					 					
					 					<div class="col-lg-4">
					 						<span class="pf-title">Niveau de la carriére</span>
					 						<div class="pf-field">
													<select data-placeholder="Allow In Search" class="chosen">
															<option>Amateur</option>
															<option>Intermediaire</option>
															<option>Specialiste</option>
															<option>Expert</option>
															
														</select>
					 						</div>
					 					</div>
					 					<div class="col-lg-4">
					 						<span class="pf-title">Experience</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Allow In Search" class="chosen">
													<option>0 année</option>
													<option>1-2 ans</option>
													<option>2-3 ans</option>
													<option>3-4 ans</option>
													<option>4-5 ans</option>
													<option>5-6 ans</option>
													<option>6 ans - ..</option>
												</select>
					 						</div>
					 					</div>
					 					
					 					
					 				
					 					<div class="col-lg-4">
					 						<span class="pf-title">Niveau d'études</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen">
													<option>BAC</option>
													<option>BAC+1</option>
													<option>BAC+2</option>
													<option>BAC+3</option>
												</select>
					 						</div>
					 					</div>
					 					
					 					
					 					
					 				</div>
					 			
					 		</div>
					 		<div class="social-edit">
					 			<h3>Social</h3>
					 		
					 				<div class="row">
					 					
					 					<div class="col-lg-6">
					 						<span class="pf-title">Google</span>
					 						<div class="pf-field">
					 							<input type="text" name="email" placeholder="www.google-plus.com/TeraPlaner" value="{{auth::guard('candidate')->user()->email}}" />
					 							<i class="la la-google"></i>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Linkedin</span>
					 						<div class="pf-field">
					 							<input type="text" name="lien_linkedin" placeholder="www.Linkedin.com/TeraPlaner" value="{{auth::guard('candidate')->user()->lien_linkedin}}" />
					 							<i class="fa fa-linkedin"></i>
					 						</div>
					 					</div>
					 				</div>
					 		
					 		</div>
					 		<div class="contact-edit">
					 			<h3>Contact</h3>
					 		

								 <div class="col-lg-12">
					 						<span class="pf-title">Adresse</span>
					 						<div class="pf-field">
											 <input type="text" name="adress" placeholder="Rue, Ville, Pays" value="{{auth::guard('candidate')->user()->adress}}" />
					 							<i class="fa fa-home"></i>
					 						</div>
					 				
					 					<div class="col-lg-6">
					 						<span class="pf-title">Numméro de téléphone</span>
					 						<div class="pf-field">
					 							<input type="text" name="num_tel" placeholder="0554360754" value="{{auth::guard('candidate')->user()->num_tel}}" />
					 						</div>
					 			
					 					
					 					
					 					
					 					
					 					
					 					
					 					
					 					
					 				</div>
									 
                                     <input type="submit" name="" value="Enregistrer" class=" bg-primary text-white col-lg-12 srch-lctn">
									 
					 			</form>
					 		</div>
@endsection