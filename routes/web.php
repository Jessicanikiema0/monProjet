<?php


use App\Http\Controllers\PostController;
use App\Http\Controllers\ConnController;
use App\Http\Controllers\ConnMedecController;
use App\Http\Controllers\admConnecController;
use App\Http\Controllers\medecinController;
use App\Http\Controllers\secretaireController;
use App\Http\Controllers\PrescriptionController;



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedecController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create someth  ing great!
|
*/
//la page d'acceuil
Route::get('/acceuil',[PostController::class, 'index']);

//le formulaire de connection de la secretaire
Route::get('/connexion',[ConnController::class,'getValidate']);
Route::post ('/connexion',[ConnController::class,'postValidate']);

//pour retourner au home
Route::get('/home',[PostController::class, 'retourH']);

//le formulaire de connection du medecin
Route::get('/connexionMedec',[ConnMedecController::class,'getValidateMedec']);
Route::post ('/connexionMedec',[ConnMedecController::class,'postValidateMedec']);

//le formulaire de connection administrateur
Route::get('/connexionAdmin',[admConnecController::class,'getValidateAdmin']);
Route::post ('/connexionAdmin',[admConnecController::class,'postValidateAdmin']);
// l'acceuil de l'administrateur
Route::get('/accAdm',[admConnecController::class,'affiche']);
// l'acceuil du medecin
Route::get('/accMedec',[ConnMedecController::class,'afficheMedec']);
// l'acceuil de la secretaire
Route::get('/accSecre',[ConnController::class,'afficheSecre']);

//pour manipuler au niveau de medecin et secretaires
Route::resource('/secretaires', secretaireController::class,);
Route::resource('/medecins', medecinController::class);

////
Route::resource('/prescription', PrescriptionController::class);





