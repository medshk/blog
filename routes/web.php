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


Route::get('/home',
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
Route::get('/recruteur',
function () {
    
    return view('pages.recruteur.recruteur_view_profile');
});

Route::get('/offre',
function () {
    
    return view('pages.offre.offre_view');
});