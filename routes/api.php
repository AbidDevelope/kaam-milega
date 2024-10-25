<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 
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
Route::middleware('auth:api')->get('/user', function (Request $request) {
return $request->user();
});
 
Route::middleware(['cors'])->group(function () { 
Route::post('send-otp','ApiController@SendOtp'); 
Route::post('verify-otp','ApiController@VerifyOtp'); 
Route::post('update-profile','ApiController@jobSeekerStore'); 
Route::get('states','ApiController@statesList'); 
Route::get('city/{id}','ApiController@CityList'); 
Route::get('comman-api','ApiController@CommanApi'); 
});