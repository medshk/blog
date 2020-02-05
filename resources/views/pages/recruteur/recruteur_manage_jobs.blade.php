@extends('layouts.recruteur_layout')
<!-- recruteur dynamique -->
@section('content')
<div class="manage-jobs-sec">
<h3>Manage Jobs</h3>
<div class="extra-job-info">
    <span><i class="la la-clock-o"></i><strong>{{$offres->count()}}</strong> Job Posted</span>
    <span><i class="la la-file-text"></i><strong>{{$totalApplied}}</strong> Application</span>
    <span><i class="la la-users"></i><strong>{{$offresActive}}</strong> Active Jobs</span>
</div>
<table>
    <thead>
        <tr>
            <td>Title</td>
            <td>Applications</td>
            <td>Soumission et début</td>
            <td>Status</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
      <?php foreach ($offres as $o): ?>

        <tr>
            <td>
                <div class="table-list-title">
                    <h3><a href="#" title="">{{$o->intitule}}</a></h3>
                    <span><i class="la la-map-marker"></i>{{$o->lieu_de_travail}}</span>
                </div>
            </td>
            <td>
                <span class="applied-field">{{$o->nbCandidature}}+ Applied</span>
            </td>
            <td>
                <span>{{$o->date_de_debut}}</span><br />
                <span>{{$o->date_de_depot}}</span>
            </td>
            <td>
                <span class="status active">{{$o->statut}}</span>
            </td>
            <td>
                <ul class="action_job">
                    <li><span>reponses</span><a href="{{url('recruteur/offre/reponse/'.$o->id)}}" title=""><i class="la la-eye"></i></a></li>
                    <li><span>Edit</span><a href="{{url('offre/'.$o->id.'/edit')}}" title=""><i class="la la-pencil"></i></a></li>
                    <li><span>Delete</span>
                      <form class="form-inline" action="{{ url('offre/'.$o->id)}}"  method="POST">
                          @method('DELETE')
                          @csrf
                          <a onclick="$(this).parent().submit()" ><i class="la la-trash-o"></i></a>
                      </form>

                    </li>
                </ul>
            </td>
        </tr>

      <?php endforeach; ?>

    </tbody>
</table>
</div>
@endsection
