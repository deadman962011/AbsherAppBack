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

Route::group(['prefix' => 'BigBlaxk'], function () {

   Route::get('/', function () {
    
    return  redirect()->route('BigBlaxkLoginGet');
    
   });
    
   Route::get('/login',['uses'=>'BigBlaxkController@BigBlaxkLoginGet','as'=>'BigBlaxkLoginGet']);

   Route::post('/login',['uses'=>'BigBlaxkController@BigBlaxkLoginPost','as'=>'BigBlaxkLoginPost']);

   Route::group(['prefix' => 'Dashboard'], function () {
      
    Route::get('/',['uses'=>'BigBlaxkController@BigBlaxkDashboardGet','as'=>'BigBlaxkDashboardGet']);

    Route::post('/SaveSub',['uses'=>'SubController@SaveSub','as'=>'SaveSub']);

    Route::post('/SaveCategory',['uses'=>'CategoryController@SaveCategory','as'=>'SaveCategory']);

    Route::post('/SaveProduct',['uses'=>'ProductController@SaveProduct','as'=>'SaveProduct']);

   });

}); 