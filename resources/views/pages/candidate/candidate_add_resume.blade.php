@extends('layouts.candidate_layout')
@section('content')

<div class="manage-jobs-sec">

<form action="{{url('cv')}}" method="POST">
          {{csrf_field()}}

<div class="border-title"><h3>CV</h3></div>
    <div class="resumeadd-form">
        <div class="row">
            <div class="col-lg-6">
                <span class="pf-title">Titre</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="titre">
                </div>
            </div>

            <div class="col-lg-6">
                <span class="pf-title">Divers</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="diver">
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
                    <input placeholder="Tooms.." type="text" name="diplome">
                </div>
            </div>

            <div class="col-lg-6">
                <span class="pf-title">Domaine</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="domaine">
                </div>
            </div>

            <div class="col-lg-6">
					<span class="pf-title">Date de Début</span>
						<div class="pf-field">
													
						   <input type="date" name="date_de_debut" value="">
												</div>
											</div>
            
                                            <div class="col-lg-6">
					<span class="pf-title">Date de fin</span>
						<div class="pf-field">
													
						   <input type="date" name="date_de_fin" value="">
												</div>
											</div>

            <div class="col-lg-12">
                <span class="pf-title">Lieu</span>
                <div class="pf-field">
                    <input type="text" name="lieu">
                </div>
            </div>
            
            
         
        </div>
     
    </div>


    <div class="border-title"><h3>Experience</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
    <div class="resumeadd-form">
        <div class="row">
            <div class="col-lg-12">
                <span class="pf-title">Intitulé</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="intitule">
                </div>
            </div>
            <div class="col-lg-6">
					<span class="pf-title">Date de fin</span>
						<div class="pf-field">
													
						   <input type="date" name="date_de_debut" value="">
												</div>
											</div>
            
                                            <div class="col-lg-6">
					<span class="pf-title">Date de fin</span>
						<div class="pf-field">
													
						   <input type="date" name="date_de_fin" value="">
												</div>
											</div>
           
            
            <div class="col-lg-12">
                <span class="pf-title">Description</span>
                <div class="pf-field">
                    <textarea name="description"></textarea>
                </div>
                
            </div>
          
        </div>
    </div>

    <div class="border-title"><h3>Competences</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
    <div class="resumeadd-form">
        <div class="row">
         
        <div class="col-lg-12">
                <span class="pf-title">Description</span>
                <div class="pf-field">
                    <textarea name="description"></textarea>
                </div>
                <div class="col-lg-12">
                 <button type="submit">Save</button>
            </div>
            </div>
         

    </form>

</div>
<!--mother div has class block remove-top -->
@endsection