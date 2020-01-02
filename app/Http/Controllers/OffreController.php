<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruteur;
use App\Offre;
use App\Competence;
use Auth;



class OffreController extends Controller
{


    public function __construct()
      {
        //  $this->middleware('auth');
         auth::guard('recruteur')->check();
      }


  public function edit($id)
  {

    $user=Auth::guard('recruteur')->user();
    $offre=Offre::find($id);

     return view('pages.recruteur.recruteur_post_edit' , ['offre'=>$offre,'user'=>$user]);
  }


  public function update(Request $request,$id)
  {
      $offre = Offre::find($id);
 //
// print_r($request);die();
 //
 //      if($request->hasFile('img')){
 //          $file = $request->file('img');
 //          $file_name = time().'.'.$file->getClientOriginalExtension();
 //          $file->move(public_path('/uploads/photo/offres'),$file_name);
 //
 //      }
 //      else{
 //          $file_name="offreDefault.jpg";
 //      }
 //
 // Auth::user()->id;
   $idRec=Auth::guard('recruteur')->user()->id;
      if($offre){

          $offre->intitule= $request->input('intitule');
          $offre->type_contract = $request->input('type_contrat');
          $offre->domaine = $request->input('domaine');
          // $offre->idRec = Auth::user()->id;
          $offre->idRec =$idRec ;
          $offre->diplome = $request->input('diplome');
          $offre->lieu_de_travail = $request->input('lieu');
          $offre->competence = $request->input('competence');
          $offre->salaire = $request->input('salaire');
          $offre->date_de_depot = $request->input('date_offre');
          $offre->date_de_debut = $request->input('date_travail');
          $offre->statut = $request->input('statut');
          $offre->duree = $request->input('duree');
          $offre->nmbr_annee_exp = $request->input('nmbr_annee_exp');
            $offre->description = $request->input('description');


 //          $offre->photo = 'uploads/photo/offres/'.$file_name;
 //
          if(  $offre->save())
            return redirect('/recruteur/profile');
          else
            return redirect('/create');
        }
        else {
          return view('errors.403');
        }

  }


  public function create()
  {



        // $user=Recruteur::find(1);
          $user=Auth::guard('recruteur')->user();


         return view('pages.recruteur.recruteur_post_new' , ['user'=>$user]);
  }



  public function store(Request $request)
  {
      $offre = new Offre();
 //
// print_r($request);die();
 //
 //      if($request->hasFile('img')){
 //          $file = $request->file('img');
 //          $file_name = time().'.'.$file->getClientOriginalExtension();
 //          $file->move(public_path('/uploads/photo/offres'),$file_name);
 //
 //      }
 //      else{
 //          $file_name="offreDefault.jpg";
 //      }
 //
 // Auth::user()->id;
  $idRec=Auth::guard('recruteur')->user()->id;
          $offre->intitule= $request->input('intitule');
          $offre->type_contract = $request->input('type_contrat');
          $offre->domaine = $request->input('domaine');
          // $offre->idRec = Auth::user()->id;
          $offre->idRec = $idRec;
          $offre->diplome = $request->input('diplome');
          $offre->lieu_de_travail = $request->input('lieu');
          $offre->competence = $request->input('competence');
          $offre->salaire = $request->input('salaire');
          $offre->date_de_depot = $request->input('date_offre');
          $offre->date_de_debut = $request->input('date_travail');
          $offre->statut = $request->input('statut');
          $offre->duree = $request->input('duree');
          $offre->nmbr_annee_exp = $request->input('nmbr_annee_exp');
            $offre->description = $request->input('description');



 //          $offre->photo = 'uploads/photo/offres/'.$file_name;
 //
        if(  $offre->save())
          return redirect('/recruteur/profile');
          else
          return redirect('/create');
  }




  public function destroy($id)
  {
            $idRec=Auth::guard('recruteur')->user()->id;

            $offre= Offre::find($id);
            if($offre){
                $offre->delete();
                return redirect('recruteur/offres');
              }
              else {
                return view('errors.404');
              }

  }


}
