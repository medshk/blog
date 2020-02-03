

@extends('layouts.candidate_layout')

@section('content')


						<div class="manage-jobs-sec">
								 <div class="border-title"><h3> Votre Tableau de bord</h3><a href="{{url('resumevide')}}" title=""><i class="la la-plus"></i> Ajouter un CV</a></div>

  


									@foreach($cvs as $cv)

									<div class="accordion md-accordion" id="acc" role="tablist" aria-multiselectable="true">

<!-- Accordion card -->
<div class="card">

  <!-- Card header -->
  <div class="card-header" role="tab" id="headingOne1">
	<a data-toggle="collapse" data-parent="#acc" href="#{{$cv->id}}" aria-expanded="true"
	  aria-controls="{{$cv->id}}">
	  <h5 class="mb-0">
	  <h3>{{$cv->titre}} </h3> 							
	  </h5>
	</a>
  </div>

									@if($cv->idCandidate == auth::guard('candidate')->user()->id) 
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
			

				<div id="{{$cv->id}}" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#acc">
      <div class="card-body">
	
								 <!-- <div class="border-title"><h3>{{$cv->titre}}</h3></div> -->

										
	 <div class="border-title"><h3> Formations</h3><a   onclick="myFunction()"  title=""><i class="la la-plus"></i> Ajouter formation</a></div>

					 </div>

				

	<!-- <button onclick="myFunction()">Click Me</button> href="{{url('createForm/'.$cv->id.'/Aff')}}"    -->
					 <div id="myDIV" style="display:none">
<!-- -----------------------------------------------------------------------------------------------------------------------------------------								 -->
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
	<div class="border-title"><a    title=""><i class="la la-plus"></i> Ajouter</a></div>		

</div>


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
		 					
							
					       	<div class="border-title"><h3>Experience</h3><a href="{{url('createExp/'.$cv->id.'/Aff')}}" title=""><i class="la la-plus"></i> Ajouter Experience</a></div>
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


		 						<div class="border-title"><h3>compétences</h3><a href="{{url('createComp/'.$cv->id.'/Aff')}}" title=""><i class="la la-plus"></i> Ajouter compétence</a></div>
							
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
									@endif


									</div>
    </div>

  </div>
  </div>


								 @endforeach







								 
@endsection


 
<script type="text/javascript">



function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>