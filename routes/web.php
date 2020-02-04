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

Route::get('/logout','Auth\LoginController@logout'
)->name('logout');

Route::get('/recruteur','RecruteurHomeController@displayCandidates'
);
    

Auth::routes();

Route::get('/home', 'HomeController@show')->name('home');
Route::post('/register_candidate','Auth\RegisterController@create_candidate')->name('register_candidate');
Route::post('/register_recruteur','Auth\RegisterController@create_recruteur')->name('register_recruteur');
Route::post('candidate_login','Auth\LoginController@candidate_login')->name('candidate_login');
Route::post('recruteur_login','Auth\LoginController@recruteur_login')->name('recruteur_login');



Route::resource('offre', 'OffreController',[
    'only' => ['index', 'create','store','edit','update','destroy','show']
]);

Route::resource('recruteur', 'RecruteurController',[
    'only' => [ 'edit','update','destroy']
]);
Route::get('recruteur/{id}/profile','RecruteurController@profile');
Route::get('recruteur/{id}/offres','RecruteurController@offres');
