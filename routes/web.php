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
    return view('welcome');
});

Route::get('/blog',function(){

	return 'This is blogs page';

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/blogs','BlogController');

Route::get('/trashed-blogs','BlogController@trashed')->name('trashed-blogs');


Route::put('/restore-blogs/{id}','BlogController@restore')->name('restore-blogs');

Route::delete('/delete-blogs/{id}','BlogController@delete')->name('delete-blogs');