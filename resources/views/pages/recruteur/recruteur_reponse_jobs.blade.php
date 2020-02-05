@extends('layouts.recruteur_layout')
<!-- recruteur dynamique -->
@section('content')
<div class="manage-jobs-sec">
<h3>Manage Jobs</h3>
<div class="extra-job-info">
</div>
<table>
    <thead>
        <tr>
            <td>Offre</td>
            <td>nom et prénom</td>
            <td>Soumission et début</td>
            <td>Status</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
      <?php foreach ($Candidatures as $o): ?>

        <tr>
            <td>
                <div class="table-list-title">
                    <h3><a href="#" title="">{{$o->id}}</a></h3>
                    <span><i class="la la-map-marker"></i>{{$o->idOffre}}</span>
                </div>
            </td>
            <td>
                <span class="applied-field">{{$o->nom}}</span>
            </td>
            <td>
                <span>{{$o->intitule}}</span><br />
                <span>{{$o->description}}</span>
            </td>
            <td>
                <span class="status active">{{$o->id_Cv}}</span>
            </td>
            <td>
                <ul class="action_job">
                    <li><span>CV</span><a href="{{url('offre/'.$o->id.'/reponse/cv/'.$o->id_Cv)}}" title=""><i class="la la-eye"></i></a></li>
                              
                    </li>
                </ul>
            </td>
        </tr>

      <?php endforeach; ?>

    </tbody>
</table>
</div>
@endsection
