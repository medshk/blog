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
use App\Document;
use Session;
use App\Http\Requests\CvRequest;
use Illuminate\Http\UploadedFile;

class DocumentController extends Controller
{
    public function create(Request $request,$id){

        $document = new Document();
        $document->idCv = $id;
        $document->type = $request->TypeDoc;
        $document->nom = $request->NomDoc;
      
      if($request->hasfile('Doc')){
        $file =$request->file('Doc');
        $extension =$file->getClientOriginalExtension();
        $filename=time() .'.'. $extension;
        $file->move('uploads/candidat/', $filename);
        $document->fichier = $filename;
            }else {
                return $request;
                $document->fichier='';
            }

              $document->save();
   
          return redirect('resume');
      }
}
