<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tests', function(){

    if(auth::guard('candidate')->check()){
        echo 'true';
    }else echo 'false';

});

Route::get('/guest',
function () {
    return view('pages.guest');
});

Route::get('/candidate',
function () {
    
    return view('pages/candidate/candidate_shortlist');
});
Route::get('/candidat',
function () {
    
    return view('pages/candidate/candidate_dashboard');
});

Route::get('/profil',
function () {
    
    return view('pages/candidate/candidate_profile_settings');
}); //route pour Editer profil ( nom prenom ..... )


Route::get('/resume',
function () {
    
    return view('pages/candidate/candidate_resume');
});

Route::get('/resumevide',
function () {
    
    return view('pages/candidate/candidate_add_resume');
});






Route::get('/recruteur',
function () {
    
    return view('pages.recruteur.recruteur_view_profile');
});

Route::get('/offre',
function () {
    
    return view('pages.offre.offre_view');
});
Route::get('/success',
function () {
    
    return view('pages.success');
});
Auth::routes();

Route::get('/home', 'HomeController@show')->name('home');
Route::post('/register_candidate','Auth\RegisterController@create_candidate')->name('register_candidate');
Route::post('/register_recruteur','Auth\RegisterController@create_recruteur')->name('register_recruteur');
Route::post('candidate_login','Auth\LoginController@candidate_login')->name('candidate_login');
Route::post('recruteur_login','Auth\LoginController@recruteur_login')->name('recruteur_login');


Route::put('profil/{id}', 'CandidateController@update');
Route::post('cv','CvController@create');   //store cv

//Route::get('resume','CvController@indexCv','FormationController@indexFormation');
//Route::get('resume','FormationController@indexFormation');
Route::get('resume','CvController@indexCv');

Route::get('/profile_view',
function () {
    
    return view('pages.candidate.candidate_view_profile');
});


Route::get('resume/{id}/editFormation', 'CvController@editFormation');
Route::put('resume/{id}', 'CvController@updateFormation');
Route::delete('resumes/{id}', 'CvController@destroy');


Route::get('resumeComp/{id}/editCompetence', 'CvController@editCompetence');
Route::put('resumeComp/{id}', 'CvController@updateCompetence');
Route::delete('resumeComp/{id}', 'CvController@destroyComp');


Route::get('resumeExp/{id}/editExperience', 'CvController@editExperience');
Route::put('resumeExp/{id}', 'CvController@updateExperience');
Route::delete('resumeExp/{id}', 'CvController@destroyExp');


Route::get('createForm/{id}/Aff','FormationController@Aff');
Route::post('createForm/{id}','FormationController@create');


Route::get('createExp/{id}/Aff','ExperienceController@Aff');
Route::post('createExp/{id}','ExperienceController@create');


Route::get('createComp/{id}/Aff','CompetenceController@Aff');
Route::post('createComp/{id}','CompetenceController@create');

