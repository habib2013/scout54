<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Player;
use App\Incomplete;
use Auth;
use Intervention\Image\Facades\Image;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;
use DB;

class ProfilesController extends Controller
{
                public function __construct(){

                         return $this->middleware('player_auth');
                         $this->middleware('guest')->except('logout');
                        $this->middleware('guest:coach')->except('logout');
                        $this->middleware('guest:club')->except('logout');
                        $this->middleware('guest:agent')->except('logout');
                        $this->middleware('guest:player')->except('logout');
                }



        public function user($username){
        $players = Player::where('username','=',$username)->firstorFail();

        return view('players.index',compact('players'));
        }

        public function settings($username){
        $players = Player::where('username','=',$username)->firstorFail();
        return view('players.settings',compact('players'));
        }

public function uploadimage(Request $request){
     $validator = Validator::make($request->all(),[
             'passport'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'player_id' => ''
     ]);

     if($validator->passes()){

$input = $request->all();
$id = $input['player_id'];
$passport = $input['passport'];
$passport = time().'.'.$request->passport->extension();
        $request->passport->move(public_path('images'),$passport);

        $result = DB::update(DB::raw("update player_profiles set passport=:passport where player_id=:id"),array('passport'=>$passport,'id'=>$id));

         return response()->json(['success'=>'done']);

              }
              else{
                return response()->json(['error'=>$validator->errors()->all()]);
              }

        // $imgs = $request->passport;

}

public function updateuserprofile(Request $request){

   $validator = Validator::make($request->all(),[
      'fullname'=>'required',

        'birthday'=>'',
        'status'=>'',
        'nationality'=>'',
        'user_id'=>''
   ]);

   if($validator->passes()){
$input = $request->all();
$fullname = $input['fullname'];
// $username = $input['username'];
$birthday = $input['birthday'];
$status = $input['status'];
$nationality = $input['nationality'];
$id = $input['user_id'];

if($birthday == ''){
        $result = DB::update(DB::raw("update players set fullname=:fullname,status=:status,nationality=:nationality where id=:id"),array('fullname'=>$fullname,'id'=>$id,'status'=>$status,'nationality'=>$nationality));

}
// elseif($status == ''){
//         $result = DB::update(DB::raw("update players set fullname=:fullname,birthday=:birthday,nationality=:nationality where id=:id"),array('fullname'=>$fullname,'id'=>$id,'birthday'=>$birthday,'nationality'=>$nationality));

// }

// elseif(($birthday == '') && ($status == '')){
//         $result = DB::update(DB::raw("update players set fullname=:fullname,nationality=:nationality where id=:id"),array('fullname'=>$fullname,'id'=>$id,'nationality'=>$nationality));

// }

else{
    $result = DB::update(DB::raw("update players set fullname=:fullname,status=:status,nationality=:nationality,birthday=:birthday where id=:id"),array('fullname'=>$fullname,'id'=>$id,'status'=>$status,'nationality'=>$nationality,'birthday'=>$birthday));

}

return response()->json(['success'=>'done']);
   }
   else{
        return response()->json(['error'=>$validator->errors()->all()]);

   }
}



public function updatepersonal(Request $request){
$validator = Validator::make($request->all(),[
    'weight'=>'',
    'height' => '',
    'phone' => '',
    'gender' => '',
    'address' => '',
    'description' => '',
    'player_id' =>''

]);
if($validator->passes()){
$input = $request->all();
$weight = $input['weight'];
$height = $input['height'];
$phone = $input['phone'];
$gender = $input['gender'];
$address = $input['address'];
$description = $input['description'];
$id = $input['player_id'];

$result = DB::update(DB::raw("update player_profiles set weight=:weight,height=:height,phone=:phone,gender=:gender,address=:address,description=:description where id=:id"),array('weight'=>$weight,'id'=>$id,'height'=>$height,'phone'=>$phone,'gender'=>$gender,'address'=>$address,'description'=>$description));


return response()->json(['success'=>'done']);
}
else{
    return response()->json(['error'=>$validator->errors()->all()]);

}

}


        public function download($file){

$filepath = storage_path('app/'.$file);
 return response()->download($filepath);
                 }


        public function update(User $user){


                $data = request()->validate([
                        'birthday'=>'',
                        'gender'=>'',
                        'phone'=>'',
                        'address'=>'',
                        'city'=>'',
                        'datefrom'=>'',
                        'dateto'=>'',
                        'position'=>'',
                        'bio'=>'',
                        'country'=>'',

                        'coverimage'=>'',

                ]);

                if(request('coverimage')){
                        $imagepath = request('coverimage')->store('profiles','public');
                         $image = Image::make(public_path("storage/{$imagepath}"))->resize(200,250);
                        $image->save();

                        $imageArray = ['coverimage'=>$imagepath];
                }
                if (request('cv')) {
                        $filename = request('cv')->getClientOriginalName();
                         $cv = request('cv')->storeAs('',$filename);

                        // $cv =  request('cv')->store('cv','public');
                         $cvArray = ['cv'=>$cv];
                     }


             auth()->user()->profile->update(array_merge(
                $data,$cvArray ?? [],$imageArray ?? []
            ));
            return redirect('/'.$user->username);
        }


}
