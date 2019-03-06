<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;

class PhotosController extends Controller
{
    //

    public function create ($album_id) 
    {
        return view('photos.create')->with('album_id', $album_id);
    }


    public function store (Request $request) 
    {
        $this->validate ($request, [
            'title'=> 'required',
            'image'=> 'image|max:1999 '  
            ]
        );

        //Get filename with extenstion
        $filenameWithExt=  $request->file('photo')->getClientOriginalName();

        //remove exntenstion

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('photo')->getClientOriginalExtension();

        $filenameToStore = $filename . "_" . time() . "_" . $extension;

        $path = $request->file('photo')->storeAs('public/albums/' . $request->input('album_id'), $filenameToStore);
        
        $photo = new Photos;

        $photo->title= $request->input('title'); 

        $photo->description= $request->input('description');
        $photo->size = $request->file('photo')->getClientSize();
        $photo->photo= $filenameToStore; 
        $photo->album_id= $request->input('album_id');

        $photo->save();


        return redirect('/albums/'. $request->input('album_id'))->with(['success'=>'Photo created']);
    }
}
