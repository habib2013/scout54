<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Player;
use App\Coach;
use App\Mail\HelloThere;
use App\Incomplete;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:player');
        $this->middleware('guest:coach');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'fullname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'username' => $data['username'],
            'fullname' => $data['fullname'],
            'phone' => $data['phone'],
            'status' => $data['status'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
  
      
        session()->flash('message', '<b>Hi there!</b> Thanks for signing up!');
        session()->flash('type', 'success');
        \Mail::to($user)->send(new HelloThere($user));
        
        return $user;
    }

    public function showPlayerRegisterForm()
    {
        return view('auth.register', ['url' => 'player']);
    }

    public function showCoachRegisterForm()
    {
        return view('auth.register', ['url' => 'coach']);
    }

    protected function createPlayer(Request $request)
    {
        $this->validator($request->all())->validate();
        Player::create([
          
            'username' => $request->username,
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/player');
    }

    protected function createCoach(Request $request)
    {
        $this->validator($request->all())->validate();
        Coach::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        session()->flash('message', '<b>Hi there!</b> Thanks for signing up!');
        session()->flash('type', 'success');
        return redirect()->intended('login/coach');
    }


}
