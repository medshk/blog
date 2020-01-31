<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

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
    	$candidat->save();
    	return redirect('profil');
    }

}
