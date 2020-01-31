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
    $user=Recruteur::find(1);
    $c=Competence::all();
    $offre=Offre::find($id);

     return view('pages.recruteur.recruteur_post_edit' , ['offre'=>$offre,'user'=>$user,'comp'=>$c]);
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
      if($offre){

          $offre->intitule= $request->input('intitule');
          $offre->type_contract = $request->input('type_contrat');
          $offre->domaine = $request->input('domaine');
          // $offre->idRec = Auth::user()->id;
          $offre->idRec = 1;
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

          $idComp=$request->input('competence');
          $compDesc=Competence::find($idComp);

          $offre->competence = $compDesc->description;

 //          $offre->photo = 'uploads/photo/offres/'.$file_name;
 //
          if(  $offre->save())
            return redirect('/recruteur/1/profile');
          else
            return redirect('/create');
        }
        else {
          return view('errors.403');
        }

  }


  public function create()
  {



        $user=Recruteur::find(1);
        $c=Competence::all();

         return view('pages.recruteur.recruteur_post_new' , ['user'=>$user,'comp'=>$c]);
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

          $offre->intitule= $request->input('intitule');
          $offre->type_contract = $request->input('type_contrat');
          $offre->domaine = $request->input('domaine');
          // $offre->idRec = Auth::user()->id;
          $offre->idRec = 1;
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

          $idComp=$request->input('competence');
          $compDesc=Competence::find($idComp);

          $offre->competence = $compDesc->description;

 //          $offre->photo = 'uploads/photo/offres/'.$file_name;
 //
        if(  $offre->save())
          return redirect('/recruteur/1/profile');
          else
          return redirect('/create');
  }




  public function destroy($id)
  {

            $offre= Offre::find($id);
            if($offre){
                $offre->delete();
                return redirect('recruteur/1/offres');
              }
              else {
                return view('errors.404');
              }

  }


}
