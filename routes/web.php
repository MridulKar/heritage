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

Route::get('/', 'FrontendController@index')->name('index');

Route::get('/home', 'FrontendController@index');
Route::get('/company-profile', 'FrontendController@companyProfile')->name('company-profile');
Route::get('/md-message', 'FrontendController@mdMessage')->name('md-message');
Route::get('/achievement', 'FrontendController@achievement')->name('achievement');
Route::get('/air-ticket', 'FrontendController@ticket')->name('ticket');
Route::get('/domestic', 'FrontendController@domestic')->name('domestic');
Route::get('/international', 'FrontendController@international')->name('international');
Route::get('/visa', 'FrontendController@visa')->name('visa');
Route::get('/single-visa/{visa}', 'FrontendController@singleVisa')->name('single-visa');
Route::get('/hajj', 'FrontendController@hajj')->name('hajj');
Route::get('/umrah', 'FrontendController@umrah')->name('umrah');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::post('/contact-message-store', 'FrontendController@contactMessageStore')->name('contact-message-store');
Route::post('/tour-package-book/{id}', 'FrontendController@tourPackageBooking')->name('tour-package-booking');
Route::get('/tour-package/{package}', 'FrontendController@singleTourPackage')->name('single-tour-package');
Route::get('/hajj-package/{package}', 'FrontendController@singleHajjPackage')->name('single-hajj-package');
Route::get('security', 'FrontendController@security');
Route::get('privacy', 'FrontendController@privacy')->name('privacy');
Route::get('order-status', 'FrontendController@order_status')->name('order-status');
Route::get('galary', 'FrontendController@gallary')->name('gallary');
Route::post('newslatter', 'FrontendController@newslatter')->name('newslatter');
Route::get('/clear', function(){
     \Artisan::call('optimize:clear');
   
   return 'done';
});