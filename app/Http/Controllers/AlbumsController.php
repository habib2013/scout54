<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\PlayerImages;
use App\PlayerAlbums;
use Validator;
use Illuminate\Support\Str;

class AlbumsController extends Controller
{
       public function getList()
    {
        $albums = PlayerAlbums::with('Photos')->get();
        return view('images.index')->with('player_albums',$albums);
    }

    public function getAlbum($id)
    {
        $album = PlayerAlbums::with('Photos')->find($id);
        $albums = PlayerAlbums::with('Photos')->get();
        //dd($album);
        return view('images.album', ['album'=>$album, 'albums'=>$albums]);
        //->with('album',$album);
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
        $album = PlayerAlbums::create(array(
          'name' => $request->get('name'),
          'description' => $request->get('description'),
          'cover_image' => $filename,
        ));

        return redirect()->route('show_album',['id'=>$album->id]);
    }

    public function getDelete($id)
    {
        $album = PlayerAlbums::find($id);

        $album->delete();

        return Redirect::route('index');
    }
}
