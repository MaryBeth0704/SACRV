<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','Principal@index');

Route::resource('SACRV','Agentes'); //Esto cuando vaya a hacer propiamente un crud

Route::get('administrador','Principal@admin');