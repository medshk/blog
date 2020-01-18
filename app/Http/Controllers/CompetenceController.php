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
use App\Competence;
use Session;


class CompetenceController extends Controller
{
    public function Aff($id){

        //$cv = Cv::find($id);
        return view('pages.candidate.createCompetence',['id'=>$id]);
    }

    public function create(Request $request,$id){

        
      $competence = new Competence();
      $competence->description =  $request->description; 
      $competence->idCv = $id; 

      $competence->save();

        return redirect('resume');
    }
}
