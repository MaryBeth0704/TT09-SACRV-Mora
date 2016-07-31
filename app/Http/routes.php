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
git init
$ git add .
git status
$ git commit -m "Funcionalidades del Administrador"
$ git config --global user.email "ebasteb7_04@hotmail.com"
$ git config --global user.name "María Betsabé Mora Medina"

git remote add origin https://github.com/MaryBeth0704/TT09-SACRV-Mora.git
git push -u origin master
git remote rm origin
*/

Route::get('/','Principal@index');



Route::get('administrador','Principal@admin');
//Route::resource('agente','Agente.RevisionesPermanencia'); //Esto cuando vaya a hacer propiamente un crud
Route::resource('agente','RevisionesPermanencia'); //Esto cuando vaya a hacer propiamente un crud
Route::resource('usuario','Usuario');
Route::auth();
Route::get('/registrar', 'HomeController@index');
