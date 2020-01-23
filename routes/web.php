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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/lang', 'LangController@index');

Route::get('/', 'SiteController@index');

Route::resource('/portfolio', 'PortfolioController');

Route::get('/about', 'AboutController@index');
//Route::resource('/about', 'AboutController');
Route::resource('/blog', 'BlogController');
Route::resource('/contact', 'ContactController');







Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



Route::resource('/admin/slider', 'HomeSliderController');
Route::resource('/admin/workout', 'WorkoutController');
Route::resource('/admin/about', 'AboutController');
Route::resource('/admin/photo', 'PhotoController');
Route::resource('/admin/reward', 'RewardsController');
Route::resource('/admin/home_about', 'HomeAboutController');
Route::resource('/admin/home_photo', 'HomePhotoController');
Route::resource('/admin/home_video', 'HomeVideoController');
Route::resource('/admin/home_event', 'HomeEventController');
Route::resource('/admin/partner', 'PartnerController');
Route::resource('/admin/takepart', 'TakePartController');

Route::resource('/admin/blog/category', 'CategoriesController');
Route::resource('/admin/blog', 'AdminBlogsController');





Route::get('/admin', 'AdminController@index');

