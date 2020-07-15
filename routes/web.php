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

// Route::get('/', function () {
//     return view('/welcome');
// });
Route::get('/', function () {
    return view('/homepage.index');
});


Route::get('/home','HomePageController@index');
Route::get('/about_us','About_usController@index');
Route::get('/accounts', 'AccountsController@index');
Route::post('/accounts','AccountsController@store' );
Route::get('/forgotten_password','ForgottenPasswordController@index');
Route::get('/personal_account','PersonalAccountController@index');
//Route::get('/products/tax_calculator','taxCalculatorController@index');
Route::get('/products/tax_calculator', function () {
    $form_configuration = \App\Taxform::with('taxformdetails')->orderBy('sort', 'ASC')->get();
    return view('products.tax_calculator.index',compact('form_configuration'));
}
);


Route::get('/products/mortgage_calculator','mortgageCalculatorController@index')->middleware('auth');
//Route::get('/products/mortgage_calculator/test/{id}','mortgageCalculatorController@show');
//Route::get('/products/mortgage_calculator/test','mortgageCalculatorController@show');
Route::get('/products/mortgage_calculator/result/{id}','mortgageCalculatorController@show')->middleware('auth');
Route::get('/products/mortgage_calculator/result','mortgageCalculatorController@show');
Route::post('/products/mortgage_calculator','mortgageCalculatorController@store');

//Route::get('/products/mortgage_calculator/result','mortgageCalculatorController@show');
//Route::get('/products/mortgage_calculator/result/{id}','mortgageCalculatorController@show');



Route::get('/products','productPageController@index');
Route::get('/react', 'connectionTestController@index');

// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
 
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
 
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index');

Route::get('/testmodel', function () {
    $form_configuration = \App\Taxform::with('taxformdetails')->orderBy('sort', 'ASC')->get();
    //return view('products.tax_calculator.petr',['form_configuration'=>$form_configuration]);
    return view('products.tax_calculator.petr',compact('form_configuration'));
}
);