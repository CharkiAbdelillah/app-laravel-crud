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

Route::get('etudiants','etudiantController@index')->name('etudiant.index');
             //dik @index tat 3ni methode li kayna fdik controller o etudian.index tat 3ni dik folder etudiant li kayn f resources views
