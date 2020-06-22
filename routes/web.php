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

/*

Route::get('/', function () {
	$name = "azman aziz";
	//param1 = nama yang akan di kirimkan ke halaman 
	//param2 = $name di ambil dari variabel di atas
    return view('welcome', [ 'nama' => $name]);
});
*/

/*
Route::get('about', function(){
	return "about me?";
});

Route::view('/', 'welcome');



kita bisa mengganti / menjadi . dalam mengakses letak file
Route::get('oke.coba', 'coba.coba');
*/





Route::get('/', function(){
	return view('home');
});

Route::view('contac', 'contac');