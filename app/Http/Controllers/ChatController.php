<?php

namespace App\Http\Controllers;
use App\Chat;
use App\typing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use URL;
use Illuminate\Support\Str;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

  public function chathome($id){
  return view('chat.chathome');
  }


  public function store(Request $request){
    $chat = new Chat;
    $chat->message = $request->message;
    $chat->sender = $request->sender;
     $chat->recever = $request->recever;
    $chat->save();
    typing::where('recever',$chat->recever)
          ->where('sender', $chat->sender)
          ->update(['check_status' => 0]);
    return back();
}
function callmessage($id){
    $user = DB::table('users')->where('id',$id)->first();
   $user->name;
    $auth_id=Auth::id();
    $chats = chat::where('sender',$auth_id)
                 ->where('recever',$id)
                 ->Orwhere('sender',$id)
                 ->where('recever',$auth_id)
                 ->get();
    foreach($chats as $chat){
        if($chat->sender != $auth_id){
echo ' <div class="incoming_msg">
<div class="incoming_msg_img">
<span style="height:30px;width:30px" class="avatar bg-primary text-white rounded-circle avatar-lg">'. mb_substr($user->name , 0, 2) .'
</span>
</div>
<div class="received_msg">
  <div class="received_withd_msg">
    <p>'. $chat->message .'</p><span style="background-color:#000000" class="far fa-time"></span>
    <span class="time_date"> <span style="color:#000" class="far fa-time"></span> ' . $chat->created_at->diffForHumans() .'</span></div>
</div>
</div>';
        }else{
            echo '  <div class="outgoing_msg" id="'.$chat->id.'">
            <div class="sent_msg">
              <p> <span onclick="deleteMessage('.$chat->id.')" class="close"  aria-label="close">&times;</span> '. $chat->message .'</p>
              <span class="time_date">'. $chat->created_at->diffForHumans() .'</span> </div>
          </div>
          ';
        }
    };
}
public function soundCheck(){
    $auth_id=Auth::id();
    $chats = chat::where('recever',$auth_id)
    ->get()
    ->count();
    print_r($chats );
}
public function seenMessage(){
    $auth_id=Auth::id();
    $chats = chat::where('recever',$auth_id)
    ->where('is_seen',1)
    ->get()
    ->count();
    print_r($chats );
}
public function seenUpdate(){
    $auth_id=Auth::id();
    $chats = chat::where('recever',$auth_id)
    ->where('is_seen',1)
    ->update(['is_seen' => 0]);

}
public function singleSeenUpdate($id){
    $auth_id=Auth::id();
    chat::where('recever',$auth_id)
            ->where('is_user_seen',1)
            ->where('sender',$id)
            ->update(['is_user_seen' => 0]);
    chat::where('recever',$auth_id)
            ->where('is_seen',1)
            ->where('sender',$id)
            ->update(['is_seen' => 0]);
}
public function typing(Request $request){
    $auth_id=Auth::id();
   echo $id= $request->recever;
   echo $text= $request->text;
    chat::where('recever',$auth_id)
            ->where('is_user_seen',1)
            ->where('sender',$id)
            ->update(['is_user_seen' => 0]);
    chat::where('recever',$auth_id)
            ->where('is_seen',1)
            ->where('sender',$id)
            ->update(['is_seen' => 0]);
    $typing_check = DB::table('typings')->where('recever',$id)
                              ->where('sender',$auth_id)
                              ->first();
    if($typing_check){
        DB::table('typings')->where('recever',$id)
            ->where('sender',$auth_id)
            ->update(['check_status' => $request->text]);
    }else{
        $typing = new typing;
        $typing->recever = $id;
        $typing->sender = Auth::id();

        $typing->save();
    }
}
public function deletemessage($id){
    DB::table('chats')->where('id',$id)
                      ->delete();

}
public function typinc_receve($id){
    $typing_receve= DB::table('typings')->where('recever',Auth::id())
                        ->where('sender',$id)
                        ->first();
       if(isset( $typing_receve)){
           return  $typing_receve->check_status;
       }

}
public function allMessageView(){
    $url=URL::to('/message/');
    $users = DB::table('users')->get();

    foreach($users as $user){
        if(Auth::id()!=$user->id){

            $message = DB::table('chats')->where('recever',Auth::id())
                                         ->where('sender',$user->id)
                                         ->orderBy('id','desc')
                                         ->first();
            $msgcount = DB::table('chats')->where('recever',Auth::id())
                                          ->where('sender',$user->id)
                                          ->where('is_user_seen',1)
                                          ->get()
                                          ->count();

            if($msgcount>0){
                $msg="(". $msgcount  .")";
                $start_b='<b>';
                $end_b='</b>';
            }else{
                $msg="";
                $start_b='';
                $end_b='';
            }
          if(isset($message)){
       $srtmessage=Str::limit($message->message, 40);
            echo '
            <a onclick="singleSeenUpdate('.$user->id.')" href="'.$url.'/'.$user->id.'">
            <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <span class="avatar bg-primary text-white rounded-circle avatar-lg">'. mb_substr(Auth::user()->username , 0, 2) .'
                </span>
                <div class="avatar-content ml-3">
                  <h6 class="mb-0">' . $user->name . $msg .'</h6>
                  <small class="d-block text-muted font-weight-bold">'.$user->email.'</small>

                  </div>
              </div>
            </div>
            <div class="card-body">
               <p class="text-sm lh-160 mb-0">
               '. $start_b . $srtmessage .$end_b.'
               </p>
            </div>
          </div>


        </div>

    </a>
            ';
          }

        }
    }

}
}
