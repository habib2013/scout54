<?php

namespace App\Http\Controllers\Auth;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }


    public function showPlayerLoginForm()
    {
        return view('auth.login', ['url' => 'player']);
    }

    public function playerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('player')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/player');
        }
        return back()->withInput($request->only('email', 'remember'));
    }




    public function showCoachLoginForm()
    {
        return view('auth.login', ['url' => 'coach']);
    }

    public function CoachLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('coach')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/coach');
        }
        return back()->withInput($request->only('email', 'remember'));
    }



    public function login(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }
}
