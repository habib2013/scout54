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

//  Route::get('/home', 'HomeController@index')->name('home');
 
 $user = \Auth::loginUsingId(1);
 
 Route::get('testemail', function () use ($user)  {
     \Mail::to($user)->send(new HelloThere($user));
 });
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/login/player', 'Auth\LoginController@showPlayerLoginForm');
Route::get('/login/coach', 'Auth\LoginController@showCoachLoginForm');
Route::get('/register/player', 'Auth\RegisterController@showPlayerRegisterForm');
Route::get('/register/coach', 'Auth\RegisterController@showCoachRegisterForm');

Route::post('/login/player', 'Auth\LoginController@playerLogin');
Route::post('/login/coach', 'Auth\LoginController@CoachLogin');
Route::post('/register/player', 'Auth\RegisterController@createPlayer');
Route::post('/register/coach', 'Auth\RegisterController@createCoach');

Route::view('/home', 'home')->middleware('auth');
Route::view('/player', 'player');
Route::view('/coach', 'coach');
