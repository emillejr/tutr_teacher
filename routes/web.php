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

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	// Route::get('/', function () {
	//     return view('welcome');
	// });
	Route::group(['middleware'=>'nav'], function(){
		Route::get('/home', 'HomeController@index')->name('home');
		Route::get('/', 'QuestionGroupController@index');

		Route::get('/tests/takes', 'TestTakeController@index');
		Route::get('/tests/takes/{id}', 'TestTakeController@show');
		Route::get('/tests/{id}/create', 'QuestionController@create'); // New!!!
		Route::post('/tests/{id}/create', 'QuestionController@store'); // New!!!
		Route::resource('/tests', 'QuestionGroupController');

		Route::get('/tests/{id}/take', 'TestTakeController@create');
		Route::post('/tests/{id}/take', 'TestTakeController@store');

		Route::get('/profile', 'ProfilesController@show');
	});
});