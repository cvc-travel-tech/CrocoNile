<?php

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

Route::get('/history_d/{id}', 'FrontendController@booking_d');

Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');

Route::get('/travel-free', 'FrontendController@travel_free');

Route::get('/family-package', 'FrontendController@family_package');
Route::get('/blog', 'FrontendController@blog');
Route::get('/login', 'FrontendController@login');
Route::get('/luxor', 'FrontendController@luxor');
Route::get('/personal-info', 'FrontendController@personal_info');
Route::get('/input', 'FrontendController@input');
Route::get('/profile', 'FrontendController@profile');
Route::get('/tour-details', 'FrontendController@tour_details');
Route::get('/blog-inner', 'FrontendController@blog_inner');
Route::get('/my_profile/{id}', 'FrontendController@my_profile');
Route::get('/input', 'FrontendController@khartoshaa');
//Route::get('/contact', 'FrontendController@travelforfree');
Route::get('/optional/{id}', 'FrontendController@optional');
Route::get('/index', 'FrontendController@contactt');
//Route::get('/travel-free', 'FrontendController@travel_free');
Route::get('/destinations', 'FrontendController@destinations');
Route::get('/contact', 'FrontendController@contact');

Route::post('/personal-info', 'FrontendController@personal_info');

Route::get('/id', function () {
    return view('id');
});

//Route::get('/logiin', 'FrontendController@logiin');
//Route::get('/register', 'FrontendController@register');



Route::get('example', ['example' => 'exampl@index', 'as' => 'exampl.index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Package/{slug}', 'FrontendController@Packages_details')->name('front.package_details');

Route::get('/blog_details/{id}', 'FrontendController@blog_details');

Route::get('/Pack', 'FrontendController@Pack');

Route::get('/Complete', 'FrontendController@Complete');
Route::get('/booking/{id}/{date}', 'FrontendController@Booking');
Route::post('/Booking/save/', 'FrontendController@saveBooking')->name('front.booking.save');



Route::get('/destinations_details/{id}', 'FrontendController@destinations_details');

Route::get('/hotel_ditails/{id}', 'FrontendController@hotel_ditails');

Route::get('verify','FrontendController@bookingVerify');

Route::get('spdf','FrontendController@spdf');
Route::post('invoice','FrontendController@invoice');

Route::get('po','FrontendController@saveBooking')->name('po');
Route::post('contact','mailcontroller@tosend')->name('contact');
Route::get('user/email_verified_at/{token}','Auth\RegisterController@verfiy');
