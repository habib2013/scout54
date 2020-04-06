<?php
use App\User;
use App\Profile;
use App\Faq;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
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

 Route::get('/players/register','NotSignedInController@playerregister');
//  Route::get('/players/login','NotSignedInController@playerlogin');
 

 Route::get('/', 'NotSignedInController@welcome');


 Route::get('/player/login', 'Auth\PlayersAuthController@showLoginForm')->name('player.login');
 Route::post('/login', 'Auth\PlayersAuthController@login')->name('player.login.submit');
 Route::get('/player/dashboard', 'PlayerController@index')->name('player.dashboard');


