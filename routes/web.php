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

Route::get('/permissions', 'PermissionController@index');
Route::get('/roles', 'RoleController@index');

Route::get('/categories/{id}', function ($id){
    return \App\Category::find($id);
})->middleware('permission.model:categories');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
