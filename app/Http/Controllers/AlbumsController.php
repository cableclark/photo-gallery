<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Photos;

class AlbumsController extends Controller
{
    //

    public function index () 
    {
        $albums = Album::with("Photos")->get();

        return view('albums.index')->with('albums', $albums);
    }

    public function create () 
    {
        return view('albums.create');
    }

    public function store (Request $request) 
    {
        $this->validate ($request, [
            'name'=> 'required',
            'cover_image'=> 'image|max:1999 '  
            ]
        );

        //Get filename with extenstion
        $filenameWithExt=  $request->file('cover_image')->getClientOriginalName();

        //remove exntenstion

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('cover_image')->getClientOriginalExtension();

        $filenameToStore = $filename . "_" . time() . "_" . $extension;

        $path = $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);
        
        $album = new Album;

        $album->name= $request->input('name'); 

        $album->description= $request->input('description');
        
        $album->cover_image= $filenameToStore; 

        $album->save();


        return redirect('/albums')->with(['success'=>'Album created']);
    }

    public function show ($id) {
        $album = Album::with("Photos")->find($id);

        return view ('albums.show')->with('album', $album);
    }
}
