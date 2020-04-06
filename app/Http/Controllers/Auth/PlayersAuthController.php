<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayersAuthController extends Controller
{

    public function __construct(){
        $this->middleware('guest:player');
    }
 
    public function showLoginForm(){
        return view('players.login');
    }
 
    public function login (Request $request){
        // Validate The form
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
 
        // Attempt to log the user in
        if (Auth::guard('player')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intendd location
            return redirect()->intended(route('player.dashboard'));
        }
 
        // If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
 
    }
 
}
