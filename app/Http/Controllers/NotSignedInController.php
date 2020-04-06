<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotSignedInController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function playerregister(){
        return view('players.register');
    }
    // public function playerlogin(){
    //     return view('players.login');
    // }
    
}
