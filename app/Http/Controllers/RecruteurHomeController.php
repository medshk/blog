<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use DateTime;

class RecruteurHomeController extends Controller
{
    //
public function getOffre(Request $request)
{
    if($request->ajax())
    {
    
     $year = $request->get('query');
       
    

$month = [];

$j=2;
    for($i=1;$i<12;$i++)
    {
    $query = DB::table('offres')
    ->join('candidatures', 'offres.id', '=', 'candidatures.idOffre')
    ->where('offres.idRec','=',auth::guard('recruteur')->user()->id)
    ->select('candidatures.*')->wherebetween('candidatures.created_at',[$year.'-'.strval($i).'-01 00:00:00',$year.'-'.strval($j).'-01 00:00:00'])
    ->get()->count()
    ;
    $j++;
    array_push($month,$query);
    if($j==12)
    {
        $query = DB::table('offres')
        ->join('candidatures', 'offres.id', '=', 'candidatures.idOffre')
        ->where('offres.idRec','=',auth::guard('recruteur')->user()->id)
        ->select('candidatures.*')->wherebetween('candidatures.created_at',[$year.'-'.strval($j).'-01 00:00:00',strval(intval($year)+1).'-01-01 00:00:00'])
        ->get()->count();
        array_push($month,$query);

    }
    }

echo json_encode($month);
}

}

}