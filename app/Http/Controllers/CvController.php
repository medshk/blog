<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cv;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Candidate;
use App\Formation;
use App\Recruteur;
use App\Experience;
use App\Competence;
use Session;


class CvController extends Controller
{
    public function create(Request $request){
        $cv = new Cv();
       
        $cv->titre =  $request->titre;   
        $cv->diver =  $request->diver;  
        $cv->idCandidate=auth::guard('candidate')->user()->id;
               
        $cv->save();
        
        //echo Cv::latest()->first();
      Session::put('IDCV', $cv->id);

      $formation = new Formation();
       
      $formation->diplome =  $request->diplome;  
      $formation->domaine =  $request->domaine; 
      $formation->lieu =  $request->lieu; 
      $formation->date_de_debut =  $request->date_de_debut;
      $formation->date_de_fin =  $request->date_de_fin;   
      $formation->idCv = Session::get('IDCV'); 
     
      $formation->save();


      $experience = new Experience();
       
      $experience->intitule =  $request->intitule;  
      $experience->description =  $request->description; 
      $experience->date_de_debut =  $request->date_de_debut;
      $experience->date_de_fin =  $request->date_de_fin;
      $experience->idCv = Session::get('IDCV'); 

      $experience->save();

      $competence = new Competence();
      $competence->description =  $request->description; 
      $competence->idCv = Session::get('IDCV'); 

      $competence->save();

        return redirect('resume');
       // return Session::get('IDCV');
    }

    public function indexCV()
   {
       
       $cv= Cv::all();
       $formation=Formation::all();
       $experience=Experience::all();
       $competence=Competence::all();
       
       return view('pages.candidate.candidate_resume',['cvs'=>$cv,'formations'=>$formation,'experiences'=>$experience,'competences'=>$competence] );
   }
   
   public function editFormation($id)
   {
    $formation = Formation::find($id);
    return view('pages.candidate.editFormation', ['formation'=>$formation]);

   }
   public function updateFormation(Request $request, $id){

    
    $formation = Formation::find($id);
    $formation->diplome =  $request->input('diplome');  
    $formation->domaine =  $request->input('domaine'); 
    $formation->lieu =  $request->input('lieu'); 
    $formation->date_de_debut =  $request->input('date_de_debut');
    $formation->date_de_fin =  $request->input('date_de_fin');  



    $formation->save();
    return redirect('resume');    	
  }

  public function destroy($id){
    $formation = Formation::find($id);
    $formation->delete();
    return redirect('resume');
  } 



  public function editCompetence($id)
  {
   $competence = Competence::find($id);
   return view('pages.candidate.editCompetence', ['competence'=>$competence]);

  }
  public function updateCompetence(Request $request, $id){

   
   $competence = Competence::find($id);
   $competence->description =  $request->input('description');  
   



   $competence->save();
   return redirect('resume');    	
 }

 public function destroyComp($id){
  $competence = Competence::find($id);
  $competence->delete();
  return redirect('resume');
} 

  

public function editExperience($id)
{
 $experience = Experience::find($id);
 return view('pages.candidate.editExperience', ['experience'=>$experience]);

}
public function updateExperience(Request $request, $id){

 
 $experience = Experience::find($id);
 $experience->intitule =  $request->input('intitule');  
 $experience->description =  $request->input('description'); 
 $experience->date_de_debut =  $request->input('date_de_debut');
 $experience->date_de_fin =  $request->input('date_de_fin');  



 $experience->save();
 return redirect('resume');    	
}

public function destroyExp($id){

  $experience = Experience::find($id);
  $experience->delete();
  return redirect('resume');
} 


}

