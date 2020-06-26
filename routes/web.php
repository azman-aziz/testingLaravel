<?php
// class yang di berikan oleh laravel
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

/*
Route::get('/', function( Request $request){
	return $request->path();
});
*/


// jika ingin memparsing data menggunakan route maka harus memakai callback function
// atau menggunakan controller 


Route::get('/', 'HomeController');

// Route::get('/', function(){
// 	$name = request('name');
// 	return view('home', ['name' => $name]);
// });

/*
Route::get('contac', function( Request $request){
	//tanpa memnaggil class Request
	// bisa juga menggunakan request function 
	// request()->path() == 'contac' ? true : false;
	return $request->is('contac')  ? true : false ;
});
*/

Route::view('contac', 'contac');


/*

 	bermain dengan slug(url ramah)
 	slug akan membaca string yang ada pada slug

*/

 	//('posts/{post}') = akan mengembalikan nilai id
 Route::get('posts', 'PostController@index');

Route::get('posts/{post:slug}', 'PostController@show');