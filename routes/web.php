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

Route::get('/', 'HomeController@index');
Route::get('/company', 'HomeController@company');


Route::group(['prefix' => 'projects'], static function () {
	Route::get('/', 'ProjectController@index')->name('projects.all');
});

Route::group(['prefix' => 'company'], static function () {
	Route::get('/', 'HomeController@company');
	Route::get('/company-profile', 'HomeController@companyProfile');
	Route::get('/corporate-values', 'HomeController@corporateValues');
	Route::get('/our-valued-clients', 'HomeController@ourValuedClients');
	Route::get('/cutting-edge-technology', 'HomeController@cuttingEdgeTechnology');
});

Route::group(['prefix' => 'engineering'], static function () {
	Route::get('/', 'HomeController@engineering');
	Route::get('/testing', 'HomeController@testing');
	Route::get('/certifications-approvals', 'HomeController@certificationsApprovals');
	Route::get('/engineering-videos', 'HomeController@engineeringVideos');
	
	
});
