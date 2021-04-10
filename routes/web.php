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

Route::get('/',['uses'=>'Controller@MainGet','as'=>'MainGet']);


Route::get('Login',['uses'=>'Controller@LoginGet','as'=>'LoginGet']);

Route::get('Register',['uses'=>'Controller@RegisterGet','as'=>'RegisterGet']);
