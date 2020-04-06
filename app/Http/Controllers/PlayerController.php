<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:player'); // Here auth is middleware and admin is guard
 
    }

    public function index()
    {
        return view('player');
    }
}
