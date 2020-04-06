<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Incomplete;
use Auth;       
use Intervention\Image\Facades\Image;
use Webpatser\Uuid\Uuid;

class ProfilesController extends Controller
{
                public function __construct(){

                        return $this->middleware('auth');
                }

              

        public function user($username){
         
                $user = User::where('username','=',$username)->firstorFail();
                $follows =(auth()->user())? auth()->user()->following->contains($user->id):false;
                return view('profiles.index',compact('user','follows'));
        }

        public function settings($username){

       // $this->authorize('update',$user->profile);

        $user = User::where('username','=',$username)->firstorFail();
        return view('profiles.edit')->withUser($user);

      //  return view('profiles.edit',['user'=>$user]);

        }

        public function download($file){
//  $filepath = public_path('cv/'.$file);

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
