<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;

use App\Player;
use App\PlayerPictures;
use App\ProfileProfile;
use App\PlayerVideos;
use App\Coach;
use App\Agent;
use App\VerifyUser;
use App\Club;
use App\Mail\HelloThere;
use App\Mail\VerifyMail;
use App\Incomplete;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use DB;

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
    // protected $redirectTo = '/home';

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
    protected function createCoach(Request $request)
    {

    $validator = Validator::make($request->all(), [
        'username' => ['required','string','unique:agents'] ,
        'fullname' => 'required',
        'status' => 'required',
        'email' => ['required','string', 'email', 'max:255','unique:agents'],
        'status' => 'required',
        'phone' => ['required','min:11','max:11'],
        'nationality' => 'required',
        'password' => ['required', 'string', 'min:8', 'confirmed'],

      ]);

      if($validator->passes()){
          $input = $request->all();
          $input['password'] = Hash::make($request->password);
          Coach::create($input);
          return response()->json(['success'=>'done']);
      }

    // return redirect()->intended('login/player');
    return response()->json(['error'=>$validator->errors()->all()]);


    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'fullname' => ['required', 'string', 'max:255'],
            'phone' => [ 'string', 'max:255'],
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
            // 'g-recaptcha-response' => 'required|captcha',
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
        $validator = Validator::make($request->all(), [
            'username' => ['required','string','unique:players'] ,
            'fullname' => 'required',
            'status' => 'required',
            'email' => ['required','string', 'email', 'max:255', 'unique:players'],
            'status' => 'required',
            'birthday' => 'required',
            'nationality' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],

          ]);

          if($validator->passes()){
              $input = $request->all();
              $player = $input['email'];
              $input['password'] = Hash::make($request->password);
            $players =  Player::create($input);

            $verifyUser = VerifyUser::create([
                'player_id' => $players->id,
                'token' => sha1(time())
              ]);

              DB::table('player_profiles')->insert(
                array('player_id' => $players->id,
                      'description' => $players->username)
            );

              \Mail::to($players->email)->send(new VerifyMail($players));

               return response()->json(['success'=>'done']);
               return $players;

          }

        return response()->json(['error'=>$validator->errors()->all()]);
    }



    protected function createAgent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required','string','unique:agents'] ,
            'fullname' => 'required',
            'status' => 'required',
            'email' => ['required','string', 'email', 'max:255', 'unique:agents'],
            'status' => 'required',
            'phone' => ['required','min:11','max:11','unique:agents'],
            'nationality' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],

          ]);

          if($validator->passes()){
              $input = $request->all();
              $input['password'] = Hash::make($request->password);
              Agent::create($input);
              return response()->json(['success'=>'done']);
          }

        // return redirect()->intended('login/player');
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    protected function createClub(Request $request)
    {

    $validator = Validator::make($request->all(), [
        'username' => ['required','string','unique:agents'] ,
        'clubname' => 'required',
        'email' => ['required','string', 'email', 'max:255', 'unique:agents'],

        'date_est' => 'required',
        'phone' => ['required','min:11','max:11','unique:agents'],
        'nationality' => 'required',
        'password' => ['required', 'string', 'min:8', 'confirmed'],

      ]);

      if($validator->passes()){
          $input = $request->all();
          $input['password'] = Hash::make($request->password);
          Club::create($input);
          return response()->json(['success'=>'done']);
      }

    // return redirect()->intended('login/player');
    return response()->json(['error'=>$validator->errors()->all()]);

    }

    public function verifyUser($token)
{
  $verifyUser = VerifyUser::where('token', $token)->first();
  if(isset($verifyUser) ){
    $players = $verifyUser->players;
    if(!$players->verified) {
      $verifyUser->players->verified = 1;
      $verifyUser->players->save();
      $status = "Your e-mail is verified. You can now login.";
    } else {
      $status = "Your e-mail is already verified. You can now login.";
    }
  } else {
    return redirect('/login/player')->with('warning', "Sorry your email cannot be identified.");
  }
  return redirect('/login/player')->with('status', $status);
}

public function successemail(){
    return view('success.email');
}

}
