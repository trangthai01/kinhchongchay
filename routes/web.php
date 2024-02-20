<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lien-he', 'HomeController@contact')->name('contact');
Route::get('/san-pham', 'HomeController@products')->name('products');

Route::group(['prefix' => 'du-an'], static function () {
	Route::get('/', 'ProjectController@index')->name('projects');
});

Route::group(['prefix' => 've-chung-toi'], static function () {
	Route::get('/', 'HomeController@company');
	Route::get('/ho-so-cong-ty', 'HomeController@companyProfile');
	Route::get('/gia-tri-cot-loi', 'HomeController@corporateValues');
	Route::get('/khach-hang-than-thiet', 'HomeController@ourValuedClients');
	Route::get('/cong-nghe-cat-lop', 'HomeController@cuttingEdgeTechnology');
});

Route::group(['prefix' => 'ky-thuat'], static function () {
	Route::get('/', 'HomeController@engineering');
	Route::get('/kiem-thu', 'HomeController@testing');
	Route::get('/chung-chi', 'HomeController@certificationsApprovals');
	Route::get('/videos', 'HomeController@engineeringVideos');

	Route::get('/ung-dung/he-cua-truot', 'HomeController@slidingDoorSystem');
	Route::get('/ung-dung/he-cua-day', 'HomeController@pivotDoorSystem');
	Route::get('/ung-dung/he-vach-kinh', 'HomeController@curtainWallSystem');
	
});

Route::post('lien-he', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
	// Admin Dashboard
	Route::get('dashboard','AdminController@dashboard')->name('dashboard');	
});
