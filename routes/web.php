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

Route::get('/', 'HomeController@index');


Route::middleware('guest', 'throttle:30,1')->group(function () {

    Route::get('/login', function () {
        return view('pages.login')->with(['data' => true]);
    });

    Route::post('/login', [
        'uses' => 'UserController@postSignIn',
        'as' => 'login'
    ]);
});

Route::middleware('auth', 'throttle:30,1')->group(function () {

    Route::get('/management', [
        function () {
            $u['usr'] = \Illuminate\Support\Facades\Auth::user();
            $users = DB::table('users')->get();
            return view('pages.management', compact('users'))->with(['p' => 0] );
        }]);

    Route::post('/management', [
        'uses' => 'UserController@postSignUp',
        'as' => 'management'
    ]);

    Route::get('/dashboard', [
        'as' => 'dashboard',
        function(){
            return view('pages.dashboard')->with(['p' => 1]);
        }
    ]);

    Route::post('/dashboard', [
        'uses' => 'PostController@postCreatePost',
        'as' => 'post.create',
    ]);

    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'logout'
    ]);
});


//Route::get('/auth', function () {
//    return view('pages.login');
//});
//
//Route::post('/auth', [
//    'uses' => 'UserController@postFastSignUp',
//    'as' => 'login'
//]);


Route::get('about', 'AboutController');

Route::get('/info', ['as' => 'info', 'uses' => 'UserController@getInfo'] );

Route::get('contact', 'ContactController@view');


Route::get('/home', 'HomeController@index')->name('home');

