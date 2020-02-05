@extends('layouts.candidate_layout')


@section('content')

<div class="profile-title">
					 			<h3>Mon Profil</h3>
					 		
					 			
					 		<div class="profile-form-edit">
                             
                             <form action="{{url('profil/'.auth::guard('candidate')->user()->id) }}"  method="POST" enctype="multipart/form-data" >
                             
                        	<input type="hidden" name="_method" value="PUT">
	                        {{ csrf_field()}}


							
							<div class="upload-img-bar">
							
					 				
							<span class="round"><img src="{{ asset('uploads/candidat/'.auth::guard('candidate')->user()->photo)}}"  class="rounded" width="100px;" height="150px;"></span>
									 <input type="file" name="photo" class="form-control">
									
									
					 				</div>




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
					 							<input type="text" name="nom"  value="{{auth::guard('candidate')->user()->nom}}">
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
