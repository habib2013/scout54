<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Player;
use App\Coach;
use App\Agent;
use App\Club;
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
        $this->middleware('guest:agent');
        $this->middleware('guest:club');
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
            'g-recaptcha-response' => 'required|captcha',
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

    public function showAgentRegisterForm()
    {
        return view('auth.register', ['url' => 'agent']);
    }

    public function showClubRegisterForm()
    {
        return view('auth.register', ['url' => 'club']);
    }

    protected function createPlayer(Request $request)
    {
        $this->validator($request->all())->validate();
       $player =  Player::create([
          
            'username' => $request->username,
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        \Mail::to($player)->send(new HelloThere($player));
        return redirect()->intended('login/player');
        return $player;

    }

    protected function createAgent(Request $request)
    {
        $this->validator($request->all())->validate();
       $agent =  Agent::create([
          
            'username' => $request->username,
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        \Mail::to($agent)->send(new HelloThere($agent));
        return redirect()->intended('login/agent');
        return $agent;
    }

    protected function createClub(Request $request)
    {
        $this->validator($request->all())->validate();
       $club =  Club::create([
          
            'username' => $request->username,
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        \Mail::to($club)->send(new HelloThere($club));
      
        return redirect()->intended('login/club');
        return $club;

    }

    protected function createCoach(Request $request)
    {
        $this->validator($request->all())->validate();
     $coach =    Coach::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
   
        \Mail::to($coach)->send(new HelloThere($coach));
        return redirect()->intended('login/coach');
        return $coach;

     
    }


}
