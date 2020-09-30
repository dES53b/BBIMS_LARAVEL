<?php

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
