<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//view
Route::get('/', 'ViewController@index');
Route::get('/kategori/{id}', 'ViewController@produk');

//auth
Auth::routes();

//dashboard
Route::get('/home', 'HomeController@index');

Route::get('/home/create', 'HomeController@create');
Route::post('/home', 'HomeController@store');

Route::get('/home/{id}', 'HomeController@show1');
Route::get('/home/produk/{id}', 'HomeController@show');

Route::get('/home/{id}/edit', 'HomeController@edit');
Route::put('/home/produk/{id}', 'HomeController@update');

Route::delete('/home/{id}', 'HomeController@destroy');


//Route::get('kategori/{id}', function($id){
	//$kategori = App\Kategori::find($id);
	//echo $kategori->name_kategori;

	//echo '<ul>';
	//foreach ($kategori->home as $home) {
		//echo '<li>'. $home->title .'</li>';
	//}
	//echo '</ul>';
//});

//Route::get('kategori_name', function(){
	//$kategori = App\Kategori::where('name_kategori', '=' ,'fashion')->first() ;
	//echo $kategori->id;
//});

//Route::get('homes', function(){
	//$homes = App\Home::all();
	//foreach($homes as $home){
		//$kategori = App\Kategori::find($home->name_kategori);
		//echo $home->title. ' = '. $kategori->name_kategori .'<br>';
	//}
	
//});