@extends('layouts.recruteur_layout')

@section('content')
				 	<div class="col-lg-9 column">
				 		<div class="padding-left">
					 		<div class="profile-title">
					 			<h3>Post a New Job</h3>
					 			<div class="steps-sec">
					 				<div class="step active">
					 					<p><i class="la la-info"></i></p>
					 					<span>Information</span>
					 				</div>
					 				<div class="step">
					 					<p><i class="la la-cc-mastercard"></i></p>
					 					<span>Package & Payments</span>
					 				</div>
					 				<div class="step">
					 					<p><i class="la  la-check-circle"></i></p>
					 					<span>Done</span>
					 				</div>
					 			</div>
					 		</div>
					 		<div class="profile-form-edit">
					 			<form method="POST" action="{{url('offre')}}" enctype="multipart/form-data">
									{{ csrf_field() }}
					 				<div class="row">
					 					<div class="col-lg-12">
					 						<span class="pf-title">Intitule</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="Intitule" name="intitule"/>
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Domaine</span>
					 						<div class="pf-field">
												<input type="text" name="domaine" placeholder="Domaine" value="">
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Diplome</span>
					 						<div class="pf-field">
					 							<input type="text" name="diplome" placeholder="Diplome requis"/>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Lieu</span>
					 						<div class="pf-field">
					 							<input type="text" name="lieu" placeholder="Lieu" />
					 						</div>
					 					</div>
                    <div class="col-lg-6">
					 						<span class="pf-title">Type de contrat</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" name="type_contrat" class="chosen">
													<option value="cdd">cdd</option>
                          <option value="cdd">cdi</option>
                          <option value="cdd">stage</option>
                          <option value="cdd">freelance</option>


												</select>
					 						</div>
					 					</div>
                    <div class="col-lg-6">
                      <span class="pf-title">Competences</span>
											<div class="pf-field no-margin">
												<ul class="tags">
															 <!-- <li class="addedTag">Web Deisgn<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>
																<li class="addedTag">Web Develop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Develop"></li>
																<li class="addedTag">SEO<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="SEO"></li> -->
																<li class="tagAdd taglist">
																	<select data-placeholder="Please Select Specialism" name="competence" class="chosen">
																		<?php foreach ($comp as $c): ?>
																					<option value="<?php echo $c->id ?>">{{$c->description}} {{$c->id}}</option>
																		<?php endforeach; ?>




																	</select>
																</li>
												</ul>
											</div>

                    </div>

                    <div class="col-lg-6">
                      <span class="pf-title">Nombre d'année experience</span>
                      <div class="pf-field">
                        <input type="number" name="nmbr_annee_exp" min="0" placeholder="Année exp" />
                      </div>
                    </div>


					 					<div class="col-lg-6">
					 						<span class="pf-title">Salaire</span>
											<div class="pf-field">
												<input type="text" name="salaire" placeholder="Salaire" />
											</div>
					 					</div>

										<div class="col-lg-6">
											<span class="pf-title">Statut</span>
                      <div class="pf-field">
                        <select data-placeholder="Please Select Specialism" name="statut" class="chosen">
                          <option value="publiee">publiée</option>
                          <option value="retiree">retirée</option>


                        </select>
                      </div>
										</div>

										<div class="col-lg-6">
											<span class="pf-title">Durée (mois)</span>
											<div class="pf-field">
												<input type="number" name="duree" min="1" />
											</div>
										</div>

					 					<div class="col-lg-6">
					 						<span class="pf-title">Date offre</span>
					 						<div class="pf-field">
					 							<input type="date" name="date_offre"  class="form-control datepicker" />
					 						</div>
					 					</div>
										<div class="col-lg-6">
											<span class="pf-title">Date début travail</span>
											<div class="pf-field">
												<input type="date" name="date_travail"  class="form-control datepicker" />
											</div>
										</div>
                    <div class="col-lg-12">
                      <span class="pf-title">Description</span>
                      <div class="pf-field">

                        <textarea name="description" rows="8" cols="800"></textarea>
                      </div>
                    </div>
					 					<!-- <div class="col-lg-12">
					 						<span class="pf-title">Skill Requirments</span>
					 						<div class="pf-field">
						 						<ul class="tags">
										           <li class="addedTag">Photoshop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>
							            			<li class="tagAdd taglist">
							              				 <input type="text" id="search-field">
										            </li>
												</ul>
											</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Country</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen">
													<option>Web Development</option>
													<option>Web Designing</option>
													<option>Art & Culture</option>
													<option>Reading & Writing</option>
												</select>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">City</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen">
													<option>Web Development</option>
													<option>Web Designing</option>
													<option>Art & Culture</option>
													<option>Reading & Writing</option>
												</select>
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Complete Address</span>
					 						<div class="pf-field">
					 							<textarea>Collins Street West, Victoria 8007, Australia.</textarea>
					 						</div>
					 					</div> -->
										<div class="col-lg-12">
											<button type="submit">Soumettre</button>
										</div>
					 				</div>
					 			</form>
					 		</div>
					 		<!-- <div class="contact-edit">
					 			<form>
					 				<div class="row">
					 					<div class="col-lg-6">
					 						<span class="pf-title">Find On Map</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="Collins Street West, Victoria 8007, Australia." />
					 						</div>
					 					</div>
					 					<div class="col-lg-3">
					 						<span class="pf-title">Latitude</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="41.1589654" />
					 						</div>
					 					</div>
					 					<div class="col-lg-3">
					 						<span class="pf-title">Longitude</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="21.1589654" />
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<a href="#" title="" class="srch-lctn">Search Location</a>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Maps</span>
					 						<div class="pf-map">
					 							<div id="map_div"></div>
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<button type="submit">Next</button>
					 					</div>
					 				</div>
					 			</form>
					 		</div> -->
					 	</div>
					</div>
@endsection
