@extends('layouts.static_layout')
@section('navbar')
    @include('include.inc')
@endsection
@section('main')


<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Cv Candidats</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 column">
                     <div class="job-single-sec style3">
                         <div class="job-head-wide">
                             <div class="row">
                                 <div class="col-lg-10">
                                     <div class="job-single-head3 emplye">
                                         <div class="job-thumb">
                                           @if(isset($user->logo))
                                            <img src="{{asset($user->logo)}}" alt="" />
                                            @endif;
                                          </div>
                                         <div class="job-single-info3">
                                             <h3>{{$user->nom}}</h3>

                                             <?php  foreach ($offre as $o) {
                                             echo '<h3>intitule :'. $o->intitule .'</h3>';
                                             echo '<h3>description :'. $o->description .'</h3>';
                                             echo '<h3>type_contract : '. $o->type_contract .'</h3>';
                                             echo '<h3>diplome :'. $o->diplome .'</h3>';
                                             echo '<h3>nmbr_annee_exp : '. $o->nmbr_annee_exp .'</h3>';
                                             echo '<h3>duree :</i>'. $o->duree .'</h3>';
                                             echo '<h3>salaire :</i>'. $o->salaire .'</h3>';
                                                }
                                             ?>
                                         </div>
                                     </div><!-- Job Head -->
                                 </div>
                                 <div class="col-lg-2">
                           </div>
                             </div>
                         </div>
                         <div class="job-wide-devider">
                             <div class="row">
                                 <div class="col-lg-8 column">
                                     <div class="job-details">
                                  <?php foreach ($cv as $o){
                                        $divers = $o->diver ;
                                        $titre = $o->titre ;
                                        
                                  }
                                  ?>
                                     <?php  foreach ($candidat as $o) {
                                        $nom_candidat =      $o->nom ;
                                        $prenom_candidat = $o->prenom ;
                                        $email_candidat = $o->email ;
                                        $photo = $o->photo ;
                                        $date_naissance= $o->date_naissance ;                                        
                                        $civilite = $o->civilite;
                                        $adress = $o->adress;
                                        $num_tel = $o->num_tel;
                                     }
                                     ?>
                                         <h3>CV <b>{{$civilite.'   '.$nom_candidat.'  '.$prenom_candidat}}</b></h3>
                                        
                                         <img src="{{asset($photo)}}" alt="" style='width=100px;max-width=100px;'>
                                         <br>
                                         <br>
<br>
<h3>Email : <b>{{$email_candidat}}</b></h3>
<h3>date_naissance : <b>{{$date_naissance}}</b></h3>
<h3>adresse : <b>{{$adress}}</b></h3>
<h3>num_tel : <b>{{$num_tel}}</b></h3>


<h1>Liste des Formations</h1>

<?php 
$i = 1;
foreach ($formation as $o) {
    echo '<h2>Formation '.$i .'</h2>';

            echo '<h3> Diplome   : '.$o->diplome.'  </h3>';
            echo '<h3> Domaine   :  '.$o->domaine.' </h3>';
            echo '<h3> Lieu   :  '.$o->lieu.' </h3>';
            echo '<h3>  du '.$o->date_de_debut.' au '.$o->date_de_fin.'   </h3>';
                                 
     $i++;                           
                                }

                                     ?>
                                   


<h1>Liste des Experiences</h1>

<?php 
$i = 1;
foreach ($experience as $o) {
    echo '<h2>experience '.$i .'</h2>';

            echo '<h3> Diplome   : '.$o->intitule.'  </h3>';
            echo '<h3> Domaine   :  '.$o->description.' </h3>';
            echo '<h3>  du '.$o->date_de_debut.' au '.$o->date_de_fin.'   </h3>';                           
     $i++;                           
                                }

                                     ?>
                                   

<H1>Divers</H1>
    <?php  echo '<h2>'.$divers.'</h2>'; ?>                                
                                      </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</section>

@endsection


