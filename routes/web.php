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

Route::get('/', function () {
    return view('welcome');
});
 
 


Route::resource('','IndexController');

//    Route::resource('admin/user','Admin\UserController');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
      Route::resource('/index','AdminController');
      Route::resource('/fordiscount','FordiscountController');
      Route::resource('/about','AboutsController');
      Route::resource('/features','FeaturesController');
      Route::resource('/screenshot','ScreenshotsController');
      Route::resource('/team','TeamController');
      Route::resource('/testimonial','TestimonialsController');
      Route::resource('/pricing','PricingController');
      Route::resource('/blog','BlogController');
      Route::resource('/contacts','ContactsController');
    
  });
