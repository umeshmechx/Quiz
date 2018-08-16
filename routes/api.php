<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/test',function(){
  return response()->json(
      ['user'=>[
        'first name' => 'umesh',
        'password' => 'xyz'
      ]]
  );
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test',function(){
  return response()->json(
      ['user'=>[
        'first name' => 'umesh',
        'password' => 'xyz'
      ]]
  );
});

Route::group(['middleware'=>'auth:api'],function(){

Route::resource('/products','ProductsController');
});
//Route::resource('/products','ProductsController');
