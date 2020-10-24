<?php

use App\Http\Controllers\LocalizationController;
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

Route::redirect('/', '/ar');

Route::group(['prefix'=>'/{locale}'], function(){
   Route::get('/' , 'App\Http\Controllers\DoctorsController@index');
   Route::get('/sort/{sorter}' , 'App\Http\Controllers\DoctorsController@sort');
   Route::get('/spec/{filter}' , 'App\Http\Controllers\DoctorsController@filter');
   Route::get('/search/{search}' , 'App\Http\Controllers\DoctorsController@search'); 
});