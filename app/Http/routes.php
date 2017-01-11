<?php

use App\Model\User;
use App\Model\Country;
use App\Model\SocialLinks;
use Illuminate\Support\Facades\Auth;

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */



/**
 * Back-end Routes
 * Store Admin
 * @admin prefix
 */
Route::group(['middleware' => ['auth'], 'namespace' => 'Backend', 'prefix' => 'admin'], function() {

    Route::get('/', function() {
        return View::make('admin/index');
    });
    
    // product routes
    Route::resource('product', 'ProductController');
    Route::post('product/{id}', 'ProductController@update');
    

});


