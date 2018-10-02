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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//No borrar
 Route::get('/main', function () {
    return view('layouts.main');
}); 


Route::get('/content', function () {
    return view('layouts.content');
});


Route::get('/profile', function () {
    return view('layouts.Profile');
});

Route::get('/configurations', function () {
    return view('layouts.configurations');
});




/*use App\User; 
Route::get('/home', function () {   return view(     'home',    
       ['users' => User::all()] // Nombre y Parámetro enviado  
     ); });*/



