

<div class="manage-jobs-sec">

<form action="{{url('resumeExp/'.$experience->id)}}" method="POST">
<input type="hidden" name="_method" value="PUT">
          {{csrf_field()}}



    <div class="border-title"><h3>experience</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
    <div class="resumeadd-form">
        <div class="row">
            <div class="col-lg-6">
                <span class="pf-title">Diplome</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="intitule" value="{{$experience->intitule}}">
                </div>
            </div>

            <div class="col-lg-6">
                <span class="pf-title">Domaine</span>
                <div class="pf-field">
                    <input placeholder="Tooms.." type="text" name="description" value="{{$experience->description}}">
                </div>
            </div>

            <div class="col-lg-6">
					<span class="pf-title">Date de Début</span>
						<div class="pf-field">
													
						   <input type="date" name="date_de_debut" value="{{$experience->date_de_debut}}">
												</div>
											</div>
            
                                            <div class="col-lg-6">
					<span class="pf-title">Date de fin</span>
						<div class="pf-field">
													
						   <input type="date" name="date_de_fin" value="{{$experience->date_de_fin}}">
												</div>
											</div>

           
            <input type="submit" name="" value="Modifier">
         
        </div>
     
    </div>


    
    

    </form>

</div>
<!--mother div has class block remove-top -->
