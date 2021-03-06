<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Image;
use App\Album;
use App\Player;
use Validator;
use Illuminate\Support\Str;
use Auth;

class AlbumsController extends Controller
{
    //    public function getList()
    // {

    //     $albums = Album::with('Photos')->get();
    //     return view('images.index',compact('albums'));
    // }

    public function galleryindex($username)
    {
         $players = Player::where('username','=',$username)->firstorFail();
        //   $player_id =  Auth::guard('player')->user()->id;
        //   dd($player_id);
if(empty(Auth::guard('player')->user()->id)){
    $players = Player::where('username','=',$username)->firstorFail();
    $albums = Album::with('Photos')->get();
    return view('players.emptyalbum',compact('players'));
}
else{
    $players = Player::where('username','=',$username)->firstorFail();
    // $player_id =  Auth::guard('player')->user()->id;
$player_id = $players->id;

    $albums = Album::where("player_id","=",$player_id)->with('Photos')->get();
    return view('players.galleryindex',compact('albums','players'));
}
    }


    public function getAlbum($id)
    {
        $album = Album::with('Photos')->find($id);
        $albums = Album::with('Photos')->get();
        //dd($album);
        return view('images.album', ['album'=>$album, 'albums'=>$albums]);
        //->with('album',$album);
    }
    public function getmyAlbum($username,$id)
    {
        $players = Player::where('username','=',$username)->firstorFail();
        $album = Album::with('Photos')->find($id);
        $albums = Album::with('Photos')->get();
        return view('players.showalbum', ['album'=>$album, 'albums'=>$albums,'players'=>$players]);
    }

    public function getForm()
    {
        return view('images.createalbum');
    }

    public function postCreate(Request $request)
    {
        /*$rules = array(

          'name' => 'required',
          'cover_image'=>'required|image'

      );*/

        $rules = ['name' => 'required', 'cover_image'=>'required|image'];

        $input = ['name' => null];

        //Validator::make($input, $rules)->passes(); // true

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
          // return Redirect::route('create_album_form') ;
          return redirect()->route('create_album_form')->withErrors($validator)->withInput();
        }

        // $file = Input::file('cover_image');
        $file = $request->file('cover_image');
        $random_name = str_random(8);
        $destinationPath = 'albums/';
        $extension = $file->getClientOriginalExtension();
        $filename=$random_name.'_cover.'.$extension;
        $uploadSuccess = $request->file('cover_image')->move($destinationPath, $filename);
        $album = Album::create(array(
          'name' => $request->get('name'),
          'description' => $request->get('description'),
          'cover_image' => $filename,
          'player_id' => Auth::guard('player')->user()->id
        ));

        return redirect()->route('show_album',['id'=>$album->id]);
    }

    public function getDelete($id)
    {
        $album = Album::find($id);

        $album->delete();

        return Redirect::route('index');
    }
}
