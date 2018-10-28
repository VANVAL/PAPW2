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

Route::get('/upload', function () {
    return view('layouts.upload');
}); 


Route::get('/content', function () {
    return view('layouts.content');
});

/* Route::get('/profile2', function () {
    return view('layouts.Profile2');
}); */


// Route::get('/profile', function () {
//     return view('layouts.Profile');
// });

Route::get('profile2', 'UserController@profile');

Route::post('profile2', 'UserController@update_avatar');
/* 
Route::get('/configurations', function () {
    return view('layouts.configurations');
}); */

Route::get('configurations2', 'UserController@configure');

//$n= 'foto'.time().'.'.$ext;
/*Route::post ('foto',function(request $request){
    $path = $request->file('foto')->storeAs('fotos',$n,'public');//guarda  cualquier archivo
    return view()
}) */

//PUT nos permite crear un archivo
//HEROKU File Storage


/*use App\User; 
Route::get('/home', function () {   return view(     'home',    
       ['users' => User::all()] // Nombre y Parámetro enviado  
     ); });*/



