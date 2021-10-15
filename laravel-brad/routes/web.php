<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Crud;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\PhotoController;


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



// Route::get('/home/{id}', function () {
//     return view('home',["key",]);
  
// });

 Route::get('/crud' ,[Crud::class,'index']);


 Route::get('/crud/store',[Crud::class,'store']);
  Route::post('/edit',[Crud::class,'update']);
 Route::get('delete/{id}',[Crud::class,'destroy']);
 Route::get('/adddata',function(){
     return view('adddata');
 });
 Route::get('edit/{id}',[Crud::class,'edit']);
 Route::post('/insert',[Crud::class,'store']);
 
 Route::resource('photos', PhotoController::class);
