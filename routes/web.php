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
    return view('main');
});
//dik etudiants b s tat 3ni tableau o li 7daha rah controller
Route::get('etudiants','etudiantController@index')->name('etudiant.index');
             //dik @index tat 3ni methode li kayna fdik controller o etudian.index tat 3ni dik folder etudiant li kayn f resources views

Route::get('create','etudiantController@create')->name('create.etudiant');
Route::post('store','etudiantController@store')->name('etudiant.store');
Route::get('edit/etudiant/{id}','etudiantController@Edit');
Route::post('update/etudiant/{id}','etudiantController@Update');
Route::get('delete/etudiant/{id}','etudiantController@Delete');

Route::get('show/etudiant/{id}','etudiantController@Show');
