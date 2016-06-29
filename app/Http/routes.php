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

Route::get('absensi', ['uses' => 'HomeController@index', 'as' => 'home']);		
Route::get('dashboard', ['uses' => 'HomeController@indeks', 'as' => 'home']);		

Route::post('absen','HomeController@absen');
Route::get('izin','HomeController@izin');
Route::post('izin/izin','HomeController@ijin');
Route::get('rekapabsen','HomeController@rekap');
Route::get('rekapizin','HomeController@rekapizin');
Route::get('masanwarganteng/regis','HomeController@regis');

Route::post('masanwarganteng','HomeController@register');
Route::get('/', ['uses' => 'HomeController@login', 'as' => 'home']);		
Route::post('login','HomeController@loginform');
Route::get('logout','HomeController@logout');