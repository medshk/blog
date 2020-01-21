

<div class="manage-jobs-sec">

<form action="{{url('createForm/'.$id)}}"  method="POST">
          {{csrf_field()}}


        

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
     
        <input type="submit" name="" value="Enregistrer">
</form>
    </div>
<!--mother div has class block remove-top -->