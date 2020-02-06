@extends('layouts.recruteur_layout')
<!-- recruteur dynamique -->
@section('content')
<div class="manage-jobs-sec">
<h3>Manage Jobs</h3>
<div class="extra-job-info">
    <span><i class="la la-clock-o"></i><strong></strong> Job Posted</span>
    <span><i class="la la-file-text"></i><strong></strong> Application</span>
    <span><i class="la la-users"></i><strong></strong> Active Jobs</span>
</div>
<table>
    <thead>
        <tr>
            <td>Entreprise</td>
            <td></td>
            <td>Poste</td>
            <td></td>
            <td>Soumission et début</td>
            <td>Status</td>
            <td></td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
    
      @foreach ($offres as $o)
        <tr>
    
    <td>    @foreach ($recruteurs as $r)
                @if($r->id == $o->idRec)
                
        
                <img src="{{asset($r->logo)}}" style='max-width:60px;width:60px;'  alt="">
            
    @endif

                
            @endforeach
</td>
  <td>
  <span>{{$r->nom}}</span>
  </td>
    </td>
            <td>
                <div class="table-list-title">
  
                    <h3><a href="#" title="">{{$o->intitule}}</a></h3>
                    <span><i class="la la-map-marker"></i>{{$o->lieu_de_travail}}</span>
                </div>
            </td>
            <td>
        </td>
     <td>
                <span>{{$o->date_de_debut}}</span><br />
                <span>{{$o->date_de_depot}}</span>
            </td>
            <td>
                <span class="status active">{{$o->statut}}</span>
            </td>
            <td>

        
        
              
            </td>
            <td> <ul class="action_job">
                
               
                <form class="form-inline" action="{{ url('offre/'.auth::guard('candidate')->user()->id.'/'.$o->id.'/')}}"  method="GET">
                <button type="submit" class="btn btn-outline-danger">Postuler</button>
                </form>

              </li>
          </ul></td>
        </tr>

        @endforeach

    </tbody>
</table>
</div>
@endsection
