<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Illuminate\Http\UploadedFile;
use App\Experience;
use App\Competence;
use Session;
use App\Http\Requests\CvRequest;
use App\Formation;
use App\Cv;
use App\Document;
use App\Candidature;
use App\Offre;
use DB;
use App\Recruteur ;
class CandidateController extends Controller
{
    public function update(Request $request, $id){
        $candidat = Candidate::find($id);
        
        $candidat->nom =  $request->nom;   
        $candidat->prenom =  $request->prenom;  
        $candidat->num_tel =  $request->num_tel; 
        $candidat->email =  $request->email; 
        $candidat->lien_linkedin =  $request->lien_linkedin;  
        $candidat->civilite =  $request->civilite; 
        $candidat->date_naissance =  $request->date_naissance;  
        $candidat->adress =  $request->adress;  
        
    if($request->hasfile('photo')){
$file =$request->file('photo');
$extension =$file->getClientOriginalExtension();
$filename=time() .'.'.$extension;
$file->move('uploads/candidat/',$filename);
$candidat->photo=$filename;
    }else {
        return $request;
        $candidat->photo='';
    }

           
    	$candidat->save();
    	return redirect('profil');
    }

    
   public function listprofil()
   {
       
       $profil= Candidate::all();
       //print_r($candidats);
       return view('pages.candidate.candidate_liste',['candidats'=>$profil]);
   }

    public function single(Request $request,$id){
        $cv= Cv::all();
        $formation=Formation::all();
        $experience=Experience::all();
        $competence=Competence::all(); 
        $document=Document::all();   
    $candidat = Candidate::find($id);
    return view('pages.candidate.candidate_view_profile', ['candidat'=>$candidat,'cvs'=>$cv,'formations'=>$formation,'experiences'=>$experience,'competences'=>$competence,'documents'=>$document]);  //bedelt edit b single
 
}




public function offres() {
  $offres=Offre::where('statut','LIKE','publiee')->get();
  $recruteurs=Recruteur::all();


   return view('pages.candidate.offre' , ['offres'=>$offres , 'recruteurs'=>$recruteurs ]);
}


public function choixCv(Request $request){
    $id_candi = $request->id_candi ;
    $id_offre = $request->id_offre;

$cv= Cv::all();
        $formation=Formation::all();
        $experience=Experience::all();
        $competence=Competence::all(); 
        $document=Document::all();   

$offre= Offre::find($id_offre);
$candidat= Candidate::find($id_candi);
    return view('pages.candidate.choix',['offres'=>$offre,'candidat'=>$candidat,'cvs'=>$cv,'formations'=>$formation,'experiences'=>$experience,'competences'=>$competence,'documents'=>$document]);
}

public function insertcandidature(Request $request){
    $id_candi = $request->id_candi ;
    $id_offre = $request->id_offre;
    $id_cv =$request->id_cv;   

    DB::table('candidatures')->insertOrIgnore([
        ['id_Cv' => $id_cv, 'idOffre' => $id_offre , 'idCandidate' => $id_candi]
    ]);
 
    return redirect('/guest');
}

public function listpost(Request $request){

    $id = $request->id ; 
    $candidat= Candidate::find($id);
    $cv= Cv::all();

    $candidature=Candidature::where('idCandidate','=',$id)->get();
  $offre=Offre::all();
  
  return view('pages.candidate.candidate_applied_job',['offre'=>$offre,'candidat'=>$candidat,'cv'=>$cv,'candidature'=>$candidature]);

}


}
