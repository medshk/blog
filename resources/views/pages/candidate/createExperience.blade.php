


<div class="manage-jobs-sec">

<form action="{{url('createExp/'.$id)}}"  method="POST">
          {{csrf_field()}}


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
        <input type="submit" name="" value="Enregistrer">
</form>
    </div>