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

public function getType(Request $request)
{


    if($request->ajax())
    {
    
     $year = $request->get('query');
       
    

$month = [];

$j=2;
    for($i=1;$i<12;$i++)
    {
    $cdd = DB::table('offres')
    ->join('candidatures', 'offres.id', '=', 'candidatures.idOffre')
    ->where('offres.idRec','=',auth::guard('recruteur')->user()->id)->where('offres.type_contract','=','cdd')
    ->select('candidatures.*')->wherebetween('candidatures.created_at',[$year.'-'.strval($i).'-01 00:00:00',$year.'-'.strval($j).'-01 00:00:00'])
    ->get()->count()
    ;
    ///
    $cdi = DB::table('offres')
    ->join('candidatures', 'offres.id', '=', 'candidatures.idOffre')
    ->where('offres.idRec','=',auth::guard('recruteur')->user()->id)->where('offres.type_contract','=','cdi')
    ->select('candidatures.*')->wherebetween('candidatures.created_at',[$year.'-'.strval($i).'-01 00:00:00',$year.'-'.strval($j).'-01 00:00:00'])
    ->get()->count()
    ;
    ///
    $stage = DB::table('offres')
    ->join('candidatures', 'offres.id', '=', 'candidatures.idOffre')
    ->where('offres.idRec','=',auth::guard('recruteur')->user()->id)->where('offres.type_contract','=','stage')
    ->select('candidatures.*')->wherebetween('candidatures.created_at',[$year.'-'.strval($i).'-01 00:00:00',$year.'-'.strval($j).'-01 00:00:00'])
    ->get()->count()
    ;
    ///
    $freelance = DB::table('offres')
    ->join('candidatures', 'offres.id', '=', 'candidatures.idOffre')
    ->where('offres.idRec','=',auth::guard('recruteur')->user()->id)->where('offres.type_contract','=','freelance')
    ->select('candidatures.*')->wherebetween('candidatures.created_at',[$year.'-'.strval($i).'-01 00:00:00',$year.'-'.strval($j).'-01 00:00:00'])
    ->get()->count()
    ;
    $j++;
       
    array_push($month, array('cdd'=>$cdd,'cdi'=>$cdi,'stage'=>$stage,'freelance'=>$freelance));
    if($j==12)
    {
      

        $cdd = DB::table('offres')
    ->join('candidatures', 'offres.id', '=', 'candidatures.idOffre')
    ->where('offres.idRec','=',auth::guard('recruteur')->user()->id)->where('offres.type_contract','=','cdd')
    ->select('candidatures.*')->wherebetween('candidatures.created_at',[$year.'-'.strval($j).'-01 00:00:00',strval(intval($year)+1).'-01-01 00:00:00'])
    ->get()->count()
    ;
    ///
    $cdi = DB::table('offres')
    ->join('candidatures', 'offres.id', '=', 'candidatures.idOffre')
    ->where('offres.idRec','=',auth::guard('recruteur')->user()->id)->where('offres.type_contract','=','cdi')
    ->select('candidatures.*')->wherebetween('candidatures.created_at',[$year.'-'.strval($j).'-01 00:00:00',strval(intval($year)+1).'-01-01 00:00:00'])
    ->get()->count()
    ;
    ///
    $stage = DB::table('offres')
    ->join('candidatures', 'offres.id', '=', 'candidatures.idOffre')
    ->where('offres.idRec','=',auth::guard('recruteur')->user()->id)->where('offres.type_contract','=','stage')
    ->select('candidatures.*')->wherebetween('candidatures.created_at',[$year.'-'.strval($j).'-01 00:00:00',strval(intval($year)+1).'-01-01 00:00:00'])
    ->get()->count()
    ;
    ///
    $freelance = DB::table('offres')
    ->join('candidatures', 'offres.id', '=', 'candidatures.idOffre')
    ->where('offres.idRec','=',auth::guard('recruteur')->user()->id)->where('offres.type_contract','=','freelance')
    ->select('candidatures.*')->wherebetween('candidatures.created_at',[$year.'-'.strval($j).'-01 00:00:00',strval(intval($year)+1).'-01-01 00:00:00'])
    ->get()->count()
    ;
    array_push($month, array('cdd'=>$cdd,'cdi'=>$cdi,'stage'=>$stage,'freelance'=>$freelance));

    }
    }

echo json_encode($month);
}


}

}