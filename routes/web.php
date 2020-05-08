<?php

use Illuminate\Support\Facades\Route;

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
    return view('/welcome');
});

route::get('/Permiso/permisos',function(){
 return view('Permiso.permiso');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

route::get('Permiso/permiso','ControllerPermisos@index')->name('permisos');
route::get('Permiso/verpermisos','ControllerPermisos@verpermisos')->name('verpermisos');


Route::resource('clubdeportivo/club','ControllerClub');
Route::resource('Deporte/deporte','ControllerClub');





