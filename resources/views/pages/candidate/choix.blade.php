

@extends('layouts.candidate_layout')

@section('content')



						<div class="manage-jobs-sec">
								 <div class="border-title"><h3> Details offre</h3></div>
         <h3>  intitule offre : <b> {{$offres->intitule}}</b></h3>
         <h3>  diplome offre :  <b>{{$offres->diplome}}</b></h3>
         <h3>  date_de_debut offre : <b> {{$offres->date_de_debut}}</b></h3>
         <h3>   date_de_depot offre : <b> {{$offres->date_de_depot}}</b></h3>
         <h3>  statut offre : <b> {{$offres->intitule}}</b></h3>
         <h3>  type contrat offre :  <b>{{$offres->type_contract}}</b></h3>
      
      
     

<br><br><br><br><br>

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


                      <a  href="{{ url('offre/insertcandidature/'.$candidat->id.'/'.$offres->id.'/'.$cv->id)}}" class="btn btn-outline-danger">Postuler</button>
	  </h5>
	</a>
  </div>
@endif
	
								 @endforeach
								 
@endsection


