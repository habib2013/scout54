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
             'passport'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
     ]);

     if($validator->passes()){
            
$input = $request->all();
$passport = $input['passport'];
$passport = time().'.'.$request->passport->extension();
        $request->passport->move(public_path('images'),$passport);
  
        $result = DB::update(DB::raw("update player_profiles set passport=:passport"),array('passport'=>$passport));

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
        'username'=>'required',
        'birthday'=>'',
        'status'=>'',
        'nationality'=>'',
        'user_id'=>''
   ]);

   if($validator->passes()){
$input = $request->all();
$fullname = $input['fullname'];
$username = $input['username'];
$birthday = $input['birthday'];
$status = $input['status'];
$nationality = $input['nationality'];
$id = $input['user_id'];

if($birthday == ''){
        $result = DB::update(DB::raw("update players set fullname=:fullname,username=:username,status=:status,nationality=:nationality where id=:id"),array('fullname'=>$fullname,'username'=>$username,'id'=>$id,'status'=>$status,'nationality'=>$nationality));

}
elseif($status == ''){
        $result = DB::update(DB::raw("update players set fullname=:fullname,username=:username,birthday=:birthday,nationality=:nationality where id=:id"),array('fullname'=>$fullname,'username'=>$username,'id'=>$id,'status'=>$status,'nationality'=>$nationality));

} 

else{

}

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
