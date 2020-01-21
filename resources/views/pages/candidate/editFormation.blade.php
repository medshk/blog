

<div class="manage-jobs-sec">

<form action="{{url('resume/'.$formation->id)}}" method="POST">
<input type="hidden" name="_method" value="PUT">
          {{csrf_field()}}



    <div class="border-title"><h3>Formation</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
    <div class="resumeadd-form">
        <div class="row">
            <div class="col-lg-6">
                <span class="pf-title">Diplome</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="diplome" value="{{$formation->diplome}}">
                </div>
            </div>

            <div class="col-lg-6">
                <span class="pf-title">Domaine</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="domaine" value="{{$formation->domaine}}">
                </div>
            </div>

            <div class="col-lg-6">
					<span class="pf-title">Date de Début</span>
						<div class="pf-field">
													
						   <input type="date" name="date_de_debut" value="{{$formation->date_de_debut}}">
												</div>
											</div>
            
                                            <div class="col-lg-6">
					<span class="pf-title">Date de fin</span>
						<div class="pf-field">
													
						   <input type="date" name="date_de_fin" value="{{$formation->date_de_fin}}">
												</div>
											</div>

            <div class="col-lg-12">
                <span class="pf-title">Lieu</span>
                <div class="pf-field">
                    <input type="text" name="lieu" value="{{$formation->lieu}}">
                </div>
            </div>
            
            <input type="submit" name="" value="Modifier">
         
        </div>
     
    </div>


    
    

    </form>

</div>
<!--mother div has class block remove-top -->
