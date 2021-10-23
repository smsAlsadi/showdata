<?php

use App\Device;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@showData')->name('home');
//Devises
Route::get('/create','DeviceController@Device');
Route::post('/AddDevice','DeviceController@AddData')->name('add');
Route::get('/AddDevice/{id}','DeviceController@deleteData');
// edit
Route::get('/edit/{id}','DeviceController@editDevice');
Route::post('/edit/{id}','DeviceController@editDevice');
Route::get('/deatil/{id}','DeviceController@show')->name('show');
// Route::get('/deatil', function () {
//     return view('elctronicDevices.detiles');
// });