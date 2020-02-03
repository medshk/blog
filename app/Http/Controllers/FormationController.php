<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Formation;
use App\Cv;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Candidate;
use App\Recruteur;
use Session;


class FormationController extends Controller
{
    public function Aff($id){

        //$cv = Cv::find($id);
        return view('pages.candidate.createFormation',['id'=>$id]);
    }



    public function create(Request $request,$id){

        $formation = new Formation();
       
        $formation->diplome =  $request->diplome;  
        $formation->domaine =  $request->domaine; 
        $formation->lieu =  $request->lieu; 
        $formation->date_de_debut =  $request->date_de_debut;
        $formation->date_de_fin =  $request->date_de_fin;   
        $formation->idCv = $id;//$request->id;
       
        $formation->save();
        return redirect('resume');

}
/* public function indexFormation()
{
    
    $formation= Formation::all();
    
    return view('pages.candidate.candidate_resume',['formations'=>$formation]);
} */


}
