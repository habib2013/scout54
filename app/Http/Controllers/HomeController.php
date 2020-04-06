<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Faq;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allfaq = new Faq();
        $faq = $allfaq->all();

        $allpost = new Post();
        $post = $allpost->all();
        return view('home',compact('post','faq'));
    }

 public function adminHome(){
    return view('admin.verifyuser');
 }

 function jsonResponse(){
    $user = DB::table('chats')->get();
    return response()->json($user);
}
public function allmessage()
{ 
    return view('chat.allmessages');
}

}
