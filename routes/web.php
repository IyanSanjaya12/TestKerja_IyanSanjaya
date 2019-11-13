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
use Illuminate\Support\Facades\Session;


Route::get('/', function () {
	Session::forget('username');
	Session::forget('password');
	$command = \Artisan::call('db:seed', [
		'--class' => 'DatabaseSeeder'
	]);
	return view('barang.login');
});
Route::post('doLogin','userController@doLogin');
Route::get('dashBoard','barangController@index');
Route::get('tampilBarang','barangController@tampilBarang');
Route::get('tambahBarang','barangController@tambahBarang');
Route::post('simpanBarang','barangController@simpanBarang');
Route::get('editBarang/{x}','barangController@edit');
Route::post('updateBarang/{x}','barangController@update');
Route::get('hapusBarang/{x}','barangController@destroy');

