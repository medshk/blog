@extends('layouts.candidate_layout')

@section('content')

<div class="manage-jobs-sec">
    <h3>Mes Offres</h3>
    <table>
        <thead>
            <tr>
                <td>Offre</td>
                <td>Domaine</td>
               
                <td></td>
            </tr>
        </thead>

@foreach($offre as $of)
@foreach($candidature as $can)

@if($of->id == $can->idOffre)

        <tbody>
            <tr>
                <td>
                    <div class="table-list-title">
                        <i>{{$of->intitule}}</i><br />
                        <span><i class="la la-map-marker"></i>{{$of->lieu_de_travail}}</span>
                    </div>
                </td>
                <td>
                    <div class="table-list-title">
                        <h3><a href="#" title="">{{$of->domaine}}</a></h3>
                    </div>
                </td>
               
               
            </tr>
           
           @endif 
           @endforeach
           @endforeach
           
        </tbody>
    </table>
</div>
@endsection