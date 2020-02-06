

@extends('layouts.candidate_layout')

@section('content')


						<div class="manage-jobs-sec">
								 <div class="border-title"><h3> Votre Tableau de bord</h3><a href="{{url('resumevide')}}" title=""><i class="la la-plus"></i> Ajouter un CV</a></div>

  


									@foreach($cvs as $cv)
								
									
									<div class="accordion md-accordion" id="acc" role="tablist" aria-multiselectable="true">

<!-- Accordion card -->
<div class="card">

  
									@if($cv->idCandidate == auth::guard('candidate')->user()->id) 

<!-- Card header -->
<div class="card-header" role="tab" id="headingOne1">
	<a data-toggle="collapse" data-parent="#acc" href="#{{$cv->id}}" aria-expanded="true"
	  aria-controls="{{$cv->id}}">
	  <h5 class="mb-0">
	  <h3>{{$cv->titre}} </h3> 							
	  </h5>
	</a>
  </div>


									<div class="edu-history-sec">		
		 							<div class="edu-history">						
	  
		 								
	  <ul class="action_job">
				 							
				 							<li><form action ="{{url('deleteCv/'.$cv->id)}}" method="post">
				
											 {{csrf_field()}}
				{{method_field('DELETE')}}
				<span>Supprimer CV</span><button type="submit" class="btn btn-outline-warning waves-effect px-1"><i class="la la-trash-o"
        aria-hidden="true"></i></button></a>
				
				</form></li>

				 						</ul>
										 </div></div>
			

				<div id="{{$cv->id}}" value="" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#acc">
      <div class="card-body">
	
								 <!-- <div class="border-title"><h3>{{$cv->titre}}</h3></div> -->



	 <div class="border-title"><h3> Formations</h3><a   onclick="myFunction()"  title=""><i class="la la-plus"></i> Ajouter formation</a></div>

					 <!-- </div> -->

					 <form action="{{url('createForm/'.$cv->id)}}"  method="POST">
          {{csrf_field()}}

<div id="div"  style="display:none">


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
		<button type="submit" class="btn btn-outline-danger">Ajouter</button>

	</form>

</div>

	<!-- <button onclick="myFunction()">Click Me</button> href="{{url('createForm/'.$cv->id.'/Aff')}}"    -->
					 
<!-- -----------------------------------------------------------------------------------------------------------------------------------------								 -->



@foreach($formations as $formation)
												@if($formation->idCv == $cv->id)




							 	<div class="edu-history-sec">		
		 							<div class="edu-history">
		 								<i class="la la-graduation-cap"></i>
		 								<div class="edu-hisinfo">
		 									<h3>{{$formation->lieu}}</h3>
		 									<i>{{$formation->date_de_debut}} - {{$formation->date_de_fin}}</i>
		 									<span>{{$formation->diplome}} <i>{{$formation->domaine}}</i></span>
		 									
		 								</div>
		 								<ul class="action_job">
				 							<li><span>Modifier</span><a href="{{url('resume/'.$formation->id.'/editFormation')}}" title=""><i class="la la-pencil"></i></a></li>
				 							<li><form action ="{{url('resumes/'.$formation->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				
				<span>Supprimer</span><button type="submit" class="btn btn-outline-danger waves-effect px-1"><i class="la la-trash-o"
        aria-hidden="true"></i></button></a>
				
				</form></li>


											 <!-- <span>Supprimer</span><a href="{{url('resumes/'.$formation->id)}}" method="POST"  type="submit" title=""><i class="la la-trash-o"></i></a></li> -->
				 						</ul>
		 							</div>
		 						
		 						</div>
											@endif	
											@endforeach
		 					
							
					       	<div class="border-title"><h3>Experience</h3><a onclick="myFunction2()" title=""><i class="la la-plus"></i> Ajouter Experience</a></div>
					
<div id="divExp"  style="display:none" >
<form action="{{url('createExp/'.$cv->id)}}"  method="POST">
          {{csrf_field()}}
		 
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
    </div>
		<button type="submit" class="btn btn-outline-danger">Ajouter</button>
		</form>
</div>

					
						
						
							   @foreach($experiences as $experience)
												@if($experience->idCv == $cv->id)
						
							 	<div class="edu-history-sec">
		 							<div class="edu-history style2">
		 								<i></i>
		 								<div class="edu-hisinfo">
		 									<h3>{{$experience->intitule}} </h3>
		 									<i>{{$experience->date_de_debut}} - {{$experience->date_de_fin}}</i>
		 									<p>{{$experience->description}}</p>
		 								</div>
		 								<ul class="action_job">
				 							<li><span>Modifier</span><a href="{{url('resumeExp/'.$experience->id.'/editExperience')}}" title=""><i class="la la-pencil"></i></a></li>
				 							<li><form action ="{{url('resumeExp/'.$experience->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				
				<span>Supprimer</span><button type="submit" class="btn btn-outline-danger waves-effect px-1"><i class="la la-trash-o"
        aria-hidden="true"></i></button></a>
				
				</form></li>
				 						</ul>
		 							</div>
		 							
									 </div>
		 						
					
								 @endif	
											@endforeach


		 						<div class="border-title"><h3>compétences</h3><a onclick="myFunction3()" title=""><i class="la la-plus"></i> Ajouter compétence</a></div>
								
<div id="divcom" style="display:none">
<form action="{{url('createComp/'.$cv->id)}}"  method="POST">
          {{csrf_field()}}



<div class="resumeadd-form">
        <div class="row">
         
        <div class="col-lg-12">
                <span class="pf-title">Description</span>
                <div class="pf-field">
                    <textarea name="description"  value="{{old('description')}}"></textarea>
                </div>
                <div class="col-lg-12">
								<button type="submit" class="btn btn-outline-danger">Ajouter</button>
            </div>
            </div>
         

    </form>

</div>
</div>

</form>
</div>


								 @foreach($competences as $competence)
												@if($competence->idCv == $cv->id)
								 <div class="edu-history-sec">
		 							<div class="edu-history style2">
		 								<i></i>
		 								<div class="edu-hisinfo">
		 									
		 									<p> {{$competence->description}}</p>
		 								</div>
		 								<ul class="action_job">
				 							<li><span>Modifier</span><a href="{{url('resumeComp/'.$competence->id.'/editCompetence')}}" title=""><i class="la la-pencil"></i></a></li>
				 							<li><form action ="{{url('resumeComp/'.$competence->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				
				<span>Supprimer</span><button type="submit" class="btn btn-outline-danger waves-effect px-1"><i class="la la-trash-o"
        aria-hidden="true"></i></button></a>
				
				</form></li>
				 						</ul>
										
		 							</div>
		 																 
		 						</div>
						
								 @endif	
											@endforeach
											
											<div class="border-title"><h3>Autre Documents</h3><a onclick="myFunction4()" title=""><i class="la la-plus"></i> Ajouter Document</a></div>
											
											<div id="divDoc" style="display:none">
											<form action="{{url('createDoc/'.$cv->id)}}"  method="POST" enctype="multipart/form-data">
          {{csrf_field()}}

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

				 <div class="col-lg-12">
								<button type="submit" class="btn btn-outline-danger">Ajouter</button>
            </div>
						 </form>
						 </div>

						 @foreach($documents as $document)
												@if($document->idCv == $cv->id)

												<div class="edu-hisinfo">
		 									<h3>{{$document->nom}}</h3>
		 								
		 									<span> <i>{{$document->type}}</i></span>
		 									
		 								</div>
												<div class="mini-portfolio">
		 							<div class="mp-row">
									
		 								<div class="mp-col">
		 									<div class="mportolio"><img src="{{asset('uploads/candidat/'.$document->fichier)}}" alt="" /></div>
		 									<ul class="action_job">
				 							
											 <li><form action ="{{url('resumeDoc/'.$document->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				
				<span>Supprimer</span><button type="submit" class="btn btn-outline-danger waves-effect px-1"><i class="la la-trash-o"
        aria-hidden="true"></i></button></a>
				
				</form></li>
				 						</ul>
		 								</div>
		 								
									 </div>
									 <!--  class mini portfolio -->
									 </div>


									 @endif	
											@endforeach








											@endif
								
									</div>
									
    </div>

  </div>
	
	
  </div>
	
								 @endforeach
								 
@endsection


 
<script type="text/javascript">



function myFunction() {

	//var y = document.getElementById("id").value;

  var x = document.getElementById("div");
 
	

  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
	
}



function myFunction2() {

//var y = document.getElementById("id").value;

var x = document.getElementById("divExp");



if (x.style.display === "none") {
	x.style.display = "block";
} else {
	x.style.display = "none";
}

}


function myFunction3() {

//var y = document.getElementById("id").value;

var x = document.getElementById("divcom");



if (x.style.display === "none") {
	x.style.display = "block";
} else {
	x.style.display = "none";
}

}


function myFunction4() {

//var y = document.getElementById("id").value;

var x = document.getElementById("divDoc");



if (x.style.display === "none") {
	x.style.display = "block";
} else {
	x.style.display = "none";
}

}

</script>