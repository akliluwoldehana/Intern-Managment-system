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

Route::get('/','pagescontroller@index');
Route::get('/apply','pagescontroller@apply');
Route::get('/about','pagescontroller@about');
Route::get('/contact','pagescontroller@contact');
Route::get('/register','pagescontroller@contact');
Route::get('/login','pagescontroller@login');
Route::get('/unv_list','pagescontroller@unv_list');
Route::get('/interns','pagescontroller@interns');

Route::get('/internLogin','pagescontroller@internLogin');
Route::get('/mail/{prisw}/{secsw}/{s}/{e}/{w}','postscontroller@sendmail');
Route::resource('posts','postsController');
Route::post('/reg_univ','Admincontroller@dep_list');

//Route::resource('posts','insertioncontroller');
Route::get('/dep_list','pagescontroller@dep_list');
Route::post('unv_list', [
    'uses' => 'AdminController@store'
  ]);





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('img/{filename}', 'HomeController@displayImage')->name('image.displayImage');