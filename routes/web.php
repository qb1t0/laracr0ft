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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return ('hello');
//});

Route::get('/', 'HomeController@index');

Route::get('/login', 'LoginController@getLoginView');

Route::get('/signup', 'LoginController@getSignupView');

Route::get('about', 'AboutController');

Route::get('contact', 'ContactController@view');

Route::get('/dashboard', [
    'uses' => 'DashboardController@getView',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);


Route::post('/login', [
    'uses' => 'UserController@postSignIn',
    'as' => 'login'
]);

Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);

Route::get('/home', 'HomeController@index')->name('home');
