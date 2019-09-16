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
    return view('hinweisseite');
});
/* Verweis auf die Startseite EPoint 
	eine Textausgabe bedingt das doppel Hochkomma. 
	Statt "HOME" wird bei Worttreffer mit dem Begriff "Startseite" gearbeitet.
*/
Route::get('/startseite', 'EPointE1@startseite')->name('startseite');

Route::get('/hinweisseite', 'EPointE1@hinweisseite')->name('hinweisseite');
/* 
Route::get('/adresse/index', 'EPointE1@startseite')->name('adresse.index');
Route::get('/adresse/edit', 'EPointE1@startseite')->name('adresse.update');
Route::get('/adresse/{adress}', 'EPointE1@hinweisseite')->name('adresse.destroy');
*/
Auth::routes();

route::resources([
	'adresse' => 'AdresseController'
]);

Route::get('/delete/{adresse}', 'AdresseController@delete')->name('adresse.delete');
