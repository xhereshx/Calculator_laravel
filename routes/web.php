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
    return view('/welcome');
});

Route::get('/home','HomePageController@index');
Route::get('/about_us','About_usController@index');
Route::get('/accounts', 'AccountsController@index');
Route::post('/accounts','AccountsController@store' );

Route::get('/send_email', 'ForgottenPasswordController@sendEmail');
Route::get('/forgotten_password','ForgottenPasswordController@index');
Route::post('/forgotten_password','ForgottenPasswordController@build');
Route::get('/personal_account','PersonalAccountController@index');
Route::get('/products/tax_calculator','taxCalculatorController@index');

Route::get('/products/mortgage_calculator','mortgageCalculatorController@index');
//Route::get('/products/mortgage_calculator/test/{id}','mortgageCalculatorController@show');
//Route::get('/products/mortgage_calculator/test','mortgageCalculatorController@show');
Route::get('/products/mortgage_calculator/result/{id}','mortgageCalculatorController@show');
Route::get('/products/mortgage_calculator/result','mortgageCalculatorController@show');
Route::post('/products/mortgage_calculator','mortgageCalculatorController@store');

//Route::get('/products/mortgage_calculator/result','mortgageCalculatorController@show');
//Route::get('/products/mortgage_calculator/result/{id}','mortgageCalculatorController@show');



Route::get('/products','productPageController@index');
Route::get('/','MainpageController@index');
Route::get('/react', 'connectionTestController@index');
