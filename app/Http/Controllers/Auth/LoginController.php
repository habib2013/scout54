<?php

namespace App\Http\Controllers\Auth;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Brian2694\Toastr\Facades\Toastr;
use DB;


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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:coach')->except('logout');
        $this->middleware('guest:club')->except('logout');
        $this->middleware('guest:agent')->except('logout');
        $this->middleware('guest:player')->except('logout');
    }


    public function showPlayerLoginForm()
    {
        return view('auth.login', ['url' => 'player']);
    }

    public function showCoachLoginForm()
    {
        return view('auth.login', ['url' => 'coach']);
    }

    public function showClubLoginForm()
    {
        return view('auth.login', ['url' => 'club']);
    }

    public function showAgentLoginForm()
    {
        return view('auth.login', ['url' => 'agent']);
    }

    public function validateLoginEmail(Request $request){
$email = $request->email;
$count = DB::table('users')->select('email')->where('email',$email)->first();
        if($email != null){
            if(count($count <= 0)){
                echo "This email doesn't exist in Scout54 database";

            }
            else {
              echo  "email field is required";
            }
        }

    }

    public function validateLoginPassword(Request $request){
        $password = $request->password;
        $email = $request->email;
        $count = User::Where('password',$password)->where('email',$email)->first();
        if($email != null && $password != null){
                        if($count <= null){
                                echo "Email and password does not match";
                        }
        }
    }
    
    public function ClubLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('club')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

           

            // return redirect()->intended('/club');
        }
        return back()->withInput($request->only('email', 'remember'));
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

 


    public function AgentLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('agent')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/agent');
        }
        return back()->withInput($request->only('email', 'remember'));
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

            $msg = array(
				'status'  => 'success',
				'message' => 'Login Successful'
			);
			return response()->json($msg);
            
        }else{
       $msg = array(
				'status'  => 'error',
				'message' => 'Credential does not exist on Scout54 database !'
			);
			return response()->json($msg );
            }
          
    }
}
