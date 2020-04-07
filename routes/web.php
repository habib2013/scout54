<?php
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Mail\HelloThere;
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


// 
Auth::routes(['verify' => true]);


 Route::get('/', 'NotSignedInController@welcome');

 Route::get('/home', 'HomeController@index')->name('home');
 
 $user = \Auth::loginUsingId(1);
 
 Route::get('testemail', function () use ($user)  {
     \Mail::to($user)->send(new HelloThere($user));
 });
 
//  Route::get('/player/login', 'Auth\PlayersAuthController@showLoginForm')->name('player.login');
//  Route::post('/login', 'Auth\PlayersAuthController@login')->name('player.login.submit');
 
//  Route::get('/player/register', 'Auth\PlayersRegisterController@showRegisterForm')->name('player.register');
//  Route::post('/register', 'Auth\PlayersRegisterController@register')->name('player.register.submit');

//  Route::get('/player/dashboard', 'PlayerController@index')->name('player.dashboard');
//  Route::get('/players/register','NotSignedInController@playerregister');
//  Route::get('/players/login','NotSignedInController@playerlogin');
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
