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
Route::group(['middleware' => 'auth'], function () {
    Route::resource("comentarios", "core\ComentarioController");
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bouncer', function () {
    $user = \App\User::findOrFail(1);
    
    $comentario=    $user->comentarios()->create(['nombre' => 'bouncer',
        'descripcion' => 'Descrip bouncer']);

    Bouncer::allow("administrador")->everything();
    $user->assign("administrador");
    //return $user;
});
