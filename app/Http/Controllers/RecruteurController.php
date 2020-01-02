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

    public function profile()
    {


        $user=Auth::guard('recruteur')->user();
          $offres=Offre::where('idRec','=',$user->id)->get();

           return view('pages.recruteur.recruteur_view_profile' , ['user'=>$user,'offres'=>$offres]);
    }




    public function offres() {
        $user=Auth::guard('recruteur')->user();
      $offres=Offre::where('idRec','=',$user->id)->get();
      $offresActive=Offre::where('idRec','=',$user->id)->count();
      $totalApplied=0;
      foreach ($offres as $o) {
          $offreCandidature=Candidature::where('idOffre','=',$o->id)->count();
          $totalApplied+=$offreCandidature;
          $o->nbCandidature=$offreCandidature;
      }


       return view('pages.recruteur.recruteur_manage_jobs' , ['user'=>$user,'offres'=>$offres,'totalApplied'=>$totalApplied,'offresActive'=>$offresActive]);
    }




    public function edit()
    {




          $user=Auth::guard('recruteur')->user();

           return view('pages.recruteur.recruteur_profile_settings' , ['user'=>$user]);
    }




    public function update(Request $request)
    {


        $user=Auth::guard('recruteur')->user();
        $hashedPassword = $user->password;

if ($user and Hash::check($request->input('password'), $hashedPassword)) {

          $file_name="";
        if($request->hasFile('img')){
                $file = $request->file('img');
                $file_name = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('/images/uploads/recruteurs'),$file_name);
                  $user->logo = 'images/uploads/recruteurs/'.$file_name;
            }
            // else{
            //     $file_name="userDefault.png";
            // }
            $user->nom = $request->input('nom');

            $user->email = $request->input('email');
            $user->num_tel= $request->input('num_tel');
            $user->site_web= $request->input('website');

            if($request->input('new_password')!='')
              $user->password=Hash::make($request->input('new_password'));

            $user->save();

            return redirect('recruteur/profile');
          }
          else {
            return redirect('recruteur/'.$user->id.'/edit');
          }

    }

}
