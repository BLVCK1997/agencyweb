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
Route::get('/','appController@index')->name('homepage');
Route::get('/services','appController@services')->name('service');
Route::get('/realisations','appController@realisations')->name('realisation');
Route::get('/contact','contactController@create')->name('contact');
Route::post('/contact-send','contactController@store')->name('contact-send');
Route::get('/devis','contactController@devis')->name('devis');

Route::post('/devis','contactController@devis')->name('devis');


Route::get('/stratege/positionnement','appController@positionnement')->name('positionnement');
Route::get('/stratege/platform_marque','appController@platform_marque')->name('platform_marque');
Route::get('/stratege/expression_area','appController@expression_area')->name('expression_area');
Route::get('/stratege/nom_marque','appController@nom_marque')->name('nom_marque');

Route::get('/graphique/logo','appController@logo')->name('logo');
Route::get('/graphique/identity','appController@identity')->name('identity');
Route::get('/graphique/motion','appController@motion')->name('motion');
Route::get('/graphique/video','appController@video')->name('video');
