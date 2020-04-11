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
Route::get('/login/agent', 'Auth\LoginController@showAgentLoginForm');
Route::get('/login/club', 'Auth\LoginController@showClubLoginForm');


Route::get('/register/player', 'Auth\RegisterController@showPlayerRegisterForm');
Route::get('/register/coach', 'Auth\RegisterController@showCoachRegisterForm');
Route::get('/register/agent', 'Auth\RegisterController@showAgentRegisterForm');
Route::get('/register/club', 'Auth\RegisterController@showClubRegisterForm');



Route::post('/login/player', 'Auth\LoginController@playerLogin');
Route::post('/login/coach', 'Auth\LoginController@CoachLogin');
Route::post('/login/agent', 'Auth\LoginController@AgentLogin');
Route::post('/login/club', 'Auth\LoginController@ClubLogin');
// Route::post('/validation-login-email', 'Auth\LoginController@validateLoginEmail')->name('validation-login-email');
 Route::post('/validateplayer', 'Auth\RegisterController@validatePlayerLoginEmail')->name('validate-email');



Route::post('/register/player', 'Auth\RegisterController@createPlayer');
Route::post('/register/coach', 'Auth\RegisterController@createCoach');
Route::post('/register/agent', 'Auth\RegisterController@createAgent');
Route::post('/register/club', 'Auth\RegisterController@createClub');


Route::view('/home', 'home')->middleware('auth');
Route::view('/player', 'player')->name('player');
Route::view('/coach', 'coach');
Route::view('/agent', 'agent');
Route::view('/club', 'club');

