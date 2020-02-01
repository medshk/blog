@extends('layouts.recruteur_layout')

@section('content')
				 	<div class="col-lg-9 column">
				 		<div class="padding-left">
					 		<div class="profile-title">
					 			<h3>Modifier une offre</h3>
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
					 			<form method="POST" action="{{url('offre/'.$offre->id)}}" enctype="multipart/form-data">
									<input type="hidden" name="_method" value="PUT">
									{{ csrf_field() }}
					 				<div class="row">
					 					<div class="col-lg-12">
					 						<span class="pf-title">Intitule</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="Intitule" name="intitule" value="{{$offre->intitule}}"/>
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Domaine</span>
					 						<div class="pf-field">
												<input type="text" name="domaine" placeholder="Domaine" value="{{$offre->domaine}}">
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Diplome</span>
					 						<div class="pf-field">
					 							<input type="text" name="diplome" placeholder="Diplome requis" value="{{$offre->diplome}}"/>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Lieu</span>
					 						<div class="pf-field">
					 							<input type="text" name="lieu" placeholder="Lieu" value="{{$offre->lieu_de_travail}}" />
					 						</div>
					 					</div>
                    <div class="col-lg-6">
					 						<span class="pf-title">Type de contrat</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" name="type_contrat" class="chosen">
													 <option value="cdd" @if($offre->type_contrat=="cdd") selected @endif>cdd</option>

                          <option value="cdi" @if($offre->type_contrat=="cdi") selected @endif>cdi</option>
                          <option value="stage" @if($offre->type_contrat=="stage") selected @endif>stage</option>
                          <option value="freelance" @if($offre->type_contrat=="freelance") selected @endif>freelance</option>


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
																<input type="text" name="competence" placeholder="competence" value="{{$offre->competence}}" />

											</div>

                    </div>

                    <div class="col-lg-6">
                      <span class="pf-title">Nombre d'année experience</span>
                      <div class="pf-field">
                        <input type="number" name="nmbr_annee_exp" min="0" placeholder="Année exp" value="{{$offre->nmbr_annee_exp}}"/>
                      </div>
                    </div>


					 					<div class="col-lg-6">
					 						<span class="pf-title">Salaire</span>
											<div class="pf-field">
												<input type="text" name="salaire" placeholder="Salaire" value="{{$offre->salaire}}"/>
											</div>
					 					</div>

										<div class="col-lg-6">
											<span class="pf-title">Statut</span>
                      <div class="pf-field">
                        <select data-placeholder="Please Select Specialism" name="statut" class="chosen">
													<?php $selected=false; ?>
                          <option value="publiee" @if($offre->statut=="publiee") selected @endif>publiée</option>
                          <option value="retiree" @if($offre->statut=="retiree") selected @endif>retirée</option>


                        </select>
                      </div>
										</div>

										<div class="col-lg-6">
											<span class="pf-title">Durée (mois)</span>
											<div class="pf-field">
												<input type="number" name="duree" min="1" value="{{$offre->duree}}"/>
											</div>
										</div>

					 					<div class="col-lg-6">
					 						<span class="pf-title">Date offre</span>
					 						<div class="pf-field">
					 							<input type="date" name="date_offre"  class="form-control datepicker" value="{{$offre->date_de_depot}}" />
					 						</div>
					 					</div>
										<div class="col-lg-6">
											<span class="pf-title">Date début travail</span>
											<div class="pf-field">
												<input type="date" name="date_travail"  class="form-control datepicker" value="{{$offre->date_de_debut}}" />
											</div>
										</div>
                    <div class="col-lg-12">
                      <span class="pf-title">Description</span>
                      <div class="pf-field">

                        <textarea name="description" rows="8" cols="800">{{$offre->description}}</textarea>
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
