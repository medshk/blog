@extends('layouts.candidate_layout')
@section('content')

<div class="manage-jobs-sec">

<form action="{{url('cv')}}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}

<div class="border-title"><h3>CV</h3></div>
    <div class="resumeadd-form">
        <div class="row">
            <div class="col-lg-6">
                <span class="pf-title">Titre</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="titre"  value="{{old('titre')}}">
                </div>
            </div>

            <div class="col-lg-6">
                <span class="pf-title">Divers</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="diver"  value="{{old('diver')}}">
                </div>
                

            </div>            
        </div>
    </div>




    <div class="border-title"><h3>Formation</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
    <div class="resumeadd-form">
        <div class="row">
            <div class="col-lg-6">
                <span class="pf-title">Diplome</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="diplome" id="diplome"  value="{{old('diplome')}}" >
                </div>
            </div>

            <div class="col-lg-6">
                <span class="pf-title">Domaine</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="domaine" id="domaine"  value="{{old('domaine')}}" >
                </div>
            </div>

            <div class="col-lg-6">
					<span class="pf-title">Date de Début</span>
						<div class="pf-field">
													
						   <input type="date" name="date_de_debutForm" id="date_de_debutForm"  value="{{old('date_de_debutForm')}}" >
												</div>
											</div>
            
                                            <div class="col-lg-6">
					<span class="pf-title">Date de fin</span>
						<div class="pf-field">
													
						   <input type="date" name="date_de_finForm" id="date_de_finForm"  value="{{old('date_de_finForm')}}" >
												</div>
											</div>

            <div class="col-lg-12">
                <span class="pf-title">Lieu</span>
                <div class="pf-field">
                    <input type="text" name="lieu" id="lieu"  value="{{old('lieu')}}" >
                </div>
            </div>
            
            
         
        </div>
     
    </div>


    <div class="border-title"><h3>Experience</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
   " 
    <div class="resumeadd-form">
        <div class="row">
            <div class="col-lg-12">
                <span class="pf-title">Intitulé</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." id="intitule" type="text" name="intitule"  value="{{old('intitule')}}" onblur="disableTxt(this.form)">
                </div>
            </div>
            <div class="col-lg-6">
					<span class="pf-title">Date de debut</span>
						<div class="pf-field">
													
						   <input type="date" id="date_de_debut" name="date_de_debut" value="{{old('date_de_debut')}}"  >
												</div>
											</div>
            
                                            <div class="col-lg-6">
					<span class="pf-title">Date de fin</span>
						<div class="pf-field">
													
						   <input type="date" id="date_de_fin" name="date_de_fin" value="{{old('date_de_fin')}}" >
												</div>
											</div>
           
            
            <div class="col-lg-12">
                <span class="pf-title">Description</span>
                <div class="pf-field">
                    <textarea name="descriptionExp" id="description"  value="{{old('descriptionExp')}}" ></textarea>
                </div>
                
            </div>
          
        </div>
    </div>"

    <div class="border-title"><h3>Competences</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
    <div class="resumeadd-form">
        <div class="row">
         
        <div class="col-lg-12">
                <span class="pf-title">Description</span>
                <div class="pf-field">
                    <textarea name="description"  value="{{old('description')}}"></textarea>
                </div>
                <!-- <div class="col-lg-12">
                 <button type="submit">Save</button>
            </div> -->
            </div>
            <div class="border-title"><h3>Autre Documents</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
            <div class="col-lg-12">

            <div class="col-lg-12">
													<span class="pf-title">Type</span>
													<div class="pf-field">
                                                    <select data-placeholder="Please Select Specialism" name="TypeDoc" class="chosen" value="">
									 <option value="CV">CV</option>
									 <option value="diplome">diplome</option>
									 <option value="lettre">Lettre de motivation</option>
									 <option value="certif">certificat</option>
									 <option value="autre">autre</option>
								 </select>
													</div>
												</div>

					 						<div class="upload-portfolio">
					 								
						
					 							<div class="uploadfield">
							 						<span class="pf-title">Nom</span>
							 						<div class="pf-field">
							 							<input placeholder="Tooms.." type="text" name="NomDoc">
							 						</div>
							 					</div>
                                                 <div class="upload-img-bar">
							
				
                            <input type="file" name="Doc" class="form-control">
   
                            </div>
							 					
					 						</div>
					 					</div>


                                         <div class="uploadbutton">
							 						<button type="submit">Save</button>
							 					</div>
<!-- ------------------------------------------------------------------------- -->
    </form>

</div>
<!--mother div has class block remove-top -->
@endsection


<script type="text/javascript">
 
 function disableTxt(tr) {
    
 var inti = tr.elements.intitule.value;
if(inti === '' )
   {
    document.getElementById("description").disabled = true;
  document.getElementById("date_de_debut").disabled =true;
  document.getElementById("date_de_Fin").disabled = true;

   }
   else {
    document.getElementById("description").disabled = false;
  document.getElementById("date_de_debut").disabled =false;
  document.getElementById("date_de_Fin").disabled = false;
   }
}
</script>
