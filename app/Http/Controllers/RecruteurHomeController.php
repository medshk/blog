<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class RecruteurHomeController extends Controller
{
    //


    public function displayCandidates()
    {
        $c = new Candidate();
    $candidates = $c->orderBy('highRate','desc')->offset(0)->limit(5)->get();
    return view('pages.recruteur.recruteur_home' , ['candidates'=>$candidates]);



    }
}
