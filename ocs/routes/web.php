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

//Project Routes
Route::get("/adminshow",['as'=>'adminshow','uses'=>'productsController@AdminShow']);

Route::get("/AddProduct",['as'=>'pro.addproduct','uses'=>'productsController@AddProduct']);
Route::get("/create",['as'=>'pro.create','uses'=>'productsController@ShowCreateForm']);
Route::get("/edit/{id}",['as'=>'pro.edit','uses'=>'productsController@EditProduct']);

Route::get("/update/{id}",['as'=>'pro.update','uses'=>'productsController@updateProduct']);
Route::get("/del/{id}",['as'=>'pro.delete','uses'=>'productsController@DeleteProduct']);

Route::get('/addcate', function () {
    return view('admin.category');
});
Route::get("/addcategory",['as'=>'pro.cate','uses'=>'productsController@AddCategory']);


//endProjects Routes


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
