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

Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin 
//Address
Route::get('/admin/address/state','Admin\StateController@create')->name('admin.address.state');
Route::POST('/admin/address/state-store','Admin\StateController@store')->name('admin.address.storeState');

Route::get('/admin/address/city','Admin\CityController@create')->name('admin.address.city');
Route::post('/admin/address/city-store','Admin\CityController@store')->name('admin.address.storeCity');

Route::get('/admin/address/district','Admin\DistrictController@create')->name('admin.address.district');
Route::post('/admin/address/district-store','Admin\DistrictController@store')->name('admin.address.storeDistrict');

//Account
Route::get('/admin/account/profile','Admin\ProfileController@show')->name('admin.account.profile');


Route::get('/admin/account/security','Admin\SecurityController@show')->name('admin.account.security');


//Accommodation
Route::get('/admin/accommodation','Admin\AccommodationController@index')->name('admin.accommodation.list');
Route::get('/admin/accommodation-add','Admin\AccommodationController@create')->name('admin.accommodation.add');


//User
Route::get('/admin/user','Admin\UserController@index')->name('admin.user.list');
Route::get('/admin/user/add','Admin\UserController@create')->name('admin.user.add');


//Report
Route::get('/admin/report','Admin\ReportController@index')->name('admin.report');

//Chalet
Route::get('/admin/chalet/list-chalet','Admin\ChaletController@index')->name('admin.chalet.list-chalet');
Route::get('/admin/chalet/my-chalet','Admin\ChaletController@show')->name('admin.chalet.my-chalet');

Route::get('/admin/chalet/add-chalet','Admin\ChaletController@create')->name('admin.chalet.add-chalet');
Route::post('/admin/chalet/location','Admin\ChaletController@edit')->name('admin.chalet.edit');
Route::post('/admin/chalet/accommodation','Admin\ChaletController@store')->name('admin.chalet.store');

Route::get('/admin/chalet/accommodation','Admin\ChaletController@createAccommodation')->name('admin.chalet.accommodation');




