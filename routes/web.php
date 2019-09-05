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

Route::get('/',function (){
   return view('welcome');
});
//Route::get('/home','IndexController@index');

Route::post('/register','Auth\LoginController@register');
Route::get('/register','Auth\LoginController@registerShow');
Route::get('/login','Auth\LoginController@loginShow');
Route::post('/login','Auth\LoginController@loginHandler');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/adminlist','UserController@adminlist');
Route::post('/adminlist','UserController@addNewUser');


Route::get('/products','ProductController@productListView');
Route::post('/products','ProductController@productList');
Route::get('/get-product/{name}','ProductController@getImage');



Route::get('/userlist','UserController@userlist');

Route::post('/delete/{id}','UserController@deleteUser');


Route::post('/edit/{id}','UserController@editUser');

//Route::get('/projectTitle','UserController@projectTitleShow');
//Route::post('/projectTitle','UserController@projectTitle');


Route::get('/home','IndexController@index');
Route::get('/products/{id}','IndexController@productDetail');

Route::get('/charm','IndexController@charm');

