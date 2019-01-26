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

Route::get('/std', function () {
    return view('std');
});
Route::get('/addnew',['as' => 'std.addnew','uses' => 'studentController@addnew']);
Route::get('/add',['as' => 'std.add','uses' => 'studentController@add']);
Route::get("/del/{id}",['as' => 'std.del','uses' => 'studentController@del']);
Route::get("/update/{id}",['as'=>'std.update','uses'=>'studentController@Update']);
//to return update form
Route::get("/updateform/{id}",['as'=>'updateform','uses'=>'studentController@UpdateFind']);

Route::get('/', function () {
    $links = \App\student::all();

    return view('welcome', ['links' => $links]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
