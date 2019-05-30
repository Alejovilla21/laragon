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
/* primera version */

/*Route::get('/', function () {
    return view('home');
});

Route::get('quienessomos',function(){
    return view('quienessomos');
});

Route::get('acercade',function(){
    return view('acercade');
});

Route::get('servicios',function(){
    return view('servicios');
});

Route::get ('productos',function(){
    return view('productos');
});

Route::get ('contacto',function(){
    return view('contacto'); 
});
*/

/* segunda version*/


Route:: get('/','PagesController@home');
Route:: get('productos','PagesController@productos');
Route:: get('quienessomos','PagesController@quienessomos');
Route:: get('acercade','PagesController@acercade');
Route:: get('servicios','PagesController@servicios');
Route:: get('contacto','PagesController@contacto');



/* tercera version (alias)*/