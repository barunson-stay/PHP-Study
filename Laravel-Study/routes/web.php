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

Route::get('/', 'WelcomeController@index');

// 자체 인증
Route::get('auth/login', function() {
    $credentials = [
        'email' => 'john@example.com',
        'password' => 'password'
    ];
    if(! auth()->attempt($credentials)){
        return '로그인 정보가 정확하지 않습니다.';
    }
    return redirect('protected');
});
Route::get('protected', ['middleware' => 'auth', function(){
    dump(session()->all());
    return '어서오세요' . auth()->user()->name;
}]);
Route::get('auth/logout', function(){
    auth()->logout();
    return '또 봐요~';
});

Route::resource('articles', 'ArticlesController');

// 내장 인증
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
