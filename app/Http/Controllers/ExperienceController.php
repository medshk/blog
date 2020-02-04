<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Experience;
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
use App\Competence;
use Session;


class ExperienceController extends Controller
{
    public function Aff($id){

        //$cv = Cv::find($id);
        return view('pages.candidate.createExperience',['id'=>$id]);
    }

    public function create(Request $request,$id){
        $experience = new Experience();
       
        $experience->intitule =  $request->intitule;  
        $experience->description =  $request->descriptionExp; 
        $experience->date_de_debut =  $request->date_de_debut;
        $experience->date_de_fin =  $request->date_de_fin;
        
        $experience->idCv = $id; 
        $experience->save();
        return redirect('resume');
}


}





