<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class RecruteurHomeController extends Controller
{
    //
public function getOffre()
{
    $query = DB::table('offres')
    ->join('candidatures', 'offres.id', '=', 'candidatures.idOffre')
    ->where('offres.idRec','=',auth::guard('recruteur')->user()->id)
    ->select('offres.*')->count();
    ;

echo $query;
}
}