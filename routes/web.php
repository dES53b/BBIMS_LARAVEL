<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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




/*Route::get('/about', function(){
return view('pages.about');
});
Route::get('/users/{id}/{name}', function($id,$name){
    return ('Your name is ' .$name. ' with id '.$id);
Route::get('/users/{id}/{name}', function($id,$name){
    return 'This is user '.$name. 'with an id of ' .$id;
});
*/
Route::get('/about',[PagesController::class,'about']);
Route::get('/services',[PagesController::class,'services']);


Route::get('/',[PagesController::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Clinic and donor auths
Route::get('/login/clinic',[LoginController::class,'clinicLoginPage']);
Route::get('/login/donor',[LoginController::class,'donorLoginPage']);
Route::get('/new/clinic',[ClinicController::class,'newClinicPage']);
Route::get('/register/donor',[RegisterController::class,'registerClinicPage']);

//Actual login Logic
Route::post('/login/clinic',[LoginController::class,'clinicLogin']);
Route::post('/login/donor',[LoginController::class,'donorLogin']);
Route::post('/register/clinic',[ClinicController::class,'create']);
Route::post('/clinic/update',[ClinicController::class,'update'])->name('updateClinic');
Route::post('/register/donor',[RegisterController::class,'registerDonor']);

//Clinics
Route::get('/clinics/view', [ClinicController::class, 'view'])->name('viewClinics');
Route::get('/clinics/edit/{id}', [ClinicController::class, 'editPage'])->name('editClinic');
Route::post('/clinics/delete', [ClinicController::class, 'delete'])->name('deleteClinic');

//alerts

Route::post('/alert/clinic', [AlertsController::class, 'alertClinic']);
Route::post('/alert/donor', [AlertsController::class, 'alertDonor']);
Route::get('/alerts/new', [AlertsController::class, 'index'])->name('newAlerts');;
