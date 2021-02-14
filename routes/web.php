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

Route::get('/', 'HomeController@welcome');
Route::get('admin/login', 'HomeController@login')->name('login');
Route::post('admin/postlogin', 'HomeController@postlogin');
Route::get('admin/logout', 'HomeController@logout');
Route::get('perumahan/detail/{id}', 'PerumahanController@getDetails');
Route::get('perumahan/sale', 'PerumahanController@getPerumahanSale');
Route::get('perumahan/sale/details/{id}', 'PerumahanController@getPerumahanSaleDetails');
Route::get('perumahan/sale/search', 'PerumahanController@getPerumahanSaleSearch');

// Route::get('perumahan/detail/{id}', 'PerumahanController@getDetails');
Route::get('apartemen/sale', 'ApartemenController@getApartemenSale');
Route::get('apartemen/sale/details/{id}', 'ApartemenController@getApartemenSaleDetails');
Route::get('apartemen/sale/search', 'ApartemenController@getApartemenSaleSearch');

Route::get('perumahan/sewa', 'PerumahanController@getPerumahanSewa');
Route::get('perumahan/sewa/details/{id}', 'PerumahanController@getPerumahanSewaDetails');
Route::get('perumahan/sewa/search', 'PerumahanController@getPerumahanSewaSearch');

Route::get('apartemen/sewa', 'ApartemenController@getApartemenSewa');
Route::get('apartemen/sewa/details/{id}', 'ApartemenController@getApartemenSewaDetails');
Route::get('apartemen/sewa/search', 'ApartemenController@getApartemenSewaSearch');
Route::get('artikel/{artikel}', 'ArtikelController@show')->name('artikel.details');
Route::group(['middleware' => ['auth', 'checkRole:1']], function () {
    Route::get('/admin/home', 'HomeController@index')->name('home');
    Route::get('/admin/customer', 'CustomerController@getIndex');
    Route::get('/admin/customer/add', 'CustomerController@getAdd');
    Route::post('/admin/customer/save', 'CustomerController@getSave');
    Route::get('/admin/customer/destroy/{id}', 'CustomerController@getDelete');
    Route::get('/admin/customer/edit/{id}', 'CustomerController@getEdit');
    Route::post('/admin/customer/update/{id}', 'CustomerController@getUpdate');

    Route::get('/admin/owner', 'OwnerController@getIndex');
    Route::get('/admin/owner/add', 'OwnerController@getAdd');
    Route::post('/admin/owner/save', 'OwnerController@getSave');
    Route::get('/admin/owner/destroy/{id}', 'OwnerController@getDelete');
    Route::get('/admin/owner/edit/{id}', 'OwnerController@getEdit');
    Route::post('/admin/owner/update/{id}', 'OwnerController@getUpdate');

    Route::get('admin/agen', 'AgenController@getIndex');
    Route::get('/admin/agen/add', 'AgenController@getAdd');
    Route::post('/admin/agen/save', 'AgenController@getSave');
    Route::get('/admin/agen/destroy/{id}', 'AgenController@getDelete');
    Route::get('/admin/agen/edit/{id}', 'AgenController@getEdit');
    Route::post('/admin/agen/update/{id}', 'AgenController@getUpdate');

    Route::get('admin/perumahan', 'PerumahanController@getIndex');
    Route::get('/admin/perumahan/add', 'PerumahanController@getAdd');
    Route::post('/admin/perumahan/save', 'PerumahanController@getSave');
    Route::get('/admin/perumahan/destroy/{id}', 'PerumahanController@getDelete');
    Route::get('/admin/perumahan/edit/{id}', 'PerumahanController@getEdit');
    Route::post('/admin/perumahan/update/{id}', 'PerumahanController@getUpdate');

    Route::get('admin/apartemen', 'ApartemenController@getIndex');
    Route::get('/admin/apartemen/add', 'ApartemenController@getAdd');
    Route::post('/admin/apartemen/save', 'ApartemenController@getSave');
    Route::get('/admin/apartemen/destroy/{id}', 'ApartemenController@getDelete');
    Route::get('/admin/apartemen/edit/{id}', 'ApartemenController@getEdit');
    Route::post('/admin/apartemen/update/{id}', 'ApartemenController@getUpdate');

    Route::get('admin/users', 'UsersController@getIndex');
    Route::get('/admin/users/add', 'UsersController@getAdd');
    Route::post('/admin/users/save', 'UsersController@getSave');
    Route::get('/admin/users/destroy/{id}', 'UsersController@getDelete');
    Route::get('/admin/users/edit/{id}', 'UsersController@getEdit');
    Route::post('/admin/users/update/{id}', 'UsersController@getUpdate');

    Route::get('admin/artikel', 'ArtikelController@getIndex');
    Route::get('/admin/artikel/add', 'ArtikelController@getAdd');
    Route::post('/admin/artikel/save', 'ArtikelController@getSave');
    Route::get('/admin/artikel/destroy/{id}', 'ArtikelController@getDelete');
    Route::get('/admin/artikel/edit/{id}', 'ArtikelController@getEdit');
    Route::post('/admin/artikel/update/{id}', 'ArtikelController@getUpdate');
});
