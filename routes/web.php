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
Route::get('/about', 'GetAboutController@index');
Route::get('/services', 'GetServicesController@index');
Route::get('/contact', 'ContactController@index')->name('contact.index');

Auth::routes();

Route::get('/','PostsController@index')->name('home');
Route::get('/home', 'PostsController@index');
Route::get('/{slug}', 'PostsController@show')->where('slug', '[A-Za-z0-9-_]+');

Route::group(['middleware' => ['auth']], function(){
	Route::post('/comment/add','CommentsController@store');
	Route::get('/logout', 'Auth\LoginController@logout');
	// Route::post('/post', 'PostsController@store')->name('post.store');
	Route::resource('/post', 'PostsController');
});


Route::prefix('admin')->group(function(){

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	// Route::get('/', 'AdminController@index')->name('admin');
	Route::get('/dashboard','AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	Route::resource('/About', 'AboutController');

	Route::resource('/Contact', 'ContactController');
	Route::get('/contact-list', 'GetContactListController@index')->name('contact.list');
	Route::delete('/contact-delete/{id}', 'GetContactListController@destroy')->name('contact.delete');
});





Route::get('img/{name}', 'PostsController@load');



// Route::group(['middleware' => ['App\Http\Middleware\adminmiddleware']], function(){

// });


