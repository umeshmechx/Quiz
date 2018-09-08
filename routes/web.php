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
use App\Notifications\OTPNotification;
use Illuminate\Notifications\Notifiable;
 //use Notifiable;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/sms', function () {

   // return view('welcome');
	$user = "";// +918147097014 ;
	//$this->notify(new OTPNotification);
	$user->notify(new OTPNotification());
	//Notification::send('karix',new OTPNotification());
	return "adsfa";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/purchase', function () {
    return view('payu.purchase');
});

Route::get('paywithrazorpay', 'RazorpayController@payWithRazorpay')->name('paywithrazorpay');
// Post Route For Makw Payment Request
Route::post('payment', 'RazorpayController@payment')->name('payment');