<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recruteur;
use App\Offre;
use App\Candidature;
use Hash;
use Auth;

class RecruteurController extends Controller
{
  public function __construct()
    {
      //  $this->middleware('auth');
       auth::guard('recruteur')->check();
    }

    public function profile($id)
    {


        //  $recruteur=Auth::user();
          $recruteur=Recruteur::find($id);
          $offres=Offre::where('idRec','=',$id)->get();

           return view('pages.recruteur.recruteur_view_profile' , ['recruteur'=>$recruteur,'offres'=>$offres]);
    }




    public function offres($id) {
        $recruteur=Recruteur::find($id);
      $offres=Offre::where('idRec','=',$id)->get();
      $offresActive=Offre::where('idRec','=',$id)->count();
      $totalApplied=0;
      foreach ($offres as $o) {
          $offreCandidature=Candidature::where('idOffre','=',$o->id)->count();
          $totalApplied+=$offreCandidature;
          $o->nbCandidature=$offreCandidature;
      }


       return view('pages.recruteur.recruteur_manage_jobs' , ['recruteur'=>$recruteur,'offres'=>$offres,'totalApplied'=>$totalApplied,'offresActive'=>$offresActive]);
    }




    public function edit($id)
    {



          $recruteur=Recruteur::find($id);


           return view('pages.recruteur.recruteur_profile_settings' , ['recruteur'=>$recruteur]);
    }




    public function update(Request $request,$id)
    {

        $recruteur = Recruteur::find($id);
        $hashedPassword = $recruteur->password;

if ($recruteur and Hash::check($request->input('password'), $hashedPassword)) {

          $file_name="";
        if($request->hasFile('img')){
                $file = $request->file('img');
                $file_name = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('/images/uploads/recruteurs'),$file_name);
                  $recruteur->logo = 'images/uploads/recruteurs/'.$file_name;
            }
            // else{
            //     $file_name="userDefault.png";
            // }
            $recruteur->nom = $request->input('nom');

            $recruteur->email = $request->input('email');
            $recruteur->num_tel= $request->input('num_tel');
            $recruteur->site_web= $request->input('website');

            if($request->input('new_password')!='')
              $recruteur->password=Hash::make($request->input('new_password'));

            $recruteur->save();

            return redirect('recruteur/'.$id.'/profile');
          }
          else {
            return redirect('recruteur/'.$id.'/edit');
          }

    }

}
