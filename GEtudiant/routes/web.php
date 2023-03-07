<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\notesController;
use App\Http\Controllers\etudiantController;
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
// get ,post,delete,put,patch,options
//  Route::get('/', function () {
//     return view('welcome');
//  });

 Route:: view('/','welcome')->name('home');

//  Route::redirect('/etudiant', '/', 301);

//  Route::get('users/{id}', function ($id) {
//      return $id;
//  })->where('id','[0-9]+');

// Route::get('users/{id?}', function ($id = null) {
//         return  'bounjouur  '.$id;
//       })->where('id','[0-9]+');

// $url=Route('user');
// route::prefix('admin')->group(function(){

//     Route::get('users/{id?}', function ($id = null) {
//     return  'bounjouur  '.$id;
//     });

// });

Route:: view('/test','test');

Route:: view('/body','layouts.body');

Route::fallback(function(){
    return view('page404');
});
//////////////////////////////////////////////////

Route::get('users/{name}', function ($name) {
     return  view('users',['name' => $name]) ;
     });



     Route::group(['prefix'=>'etudiant','as'=>'etudiant.'],function () {
        Route:: get('profil',[etudiantController::class,'show'])->name('profil');
        Route:: get('notes',[notesController::class, 'index'])->name('notes');
     });
     







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
