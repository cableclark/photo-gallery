@extends('layouts.app')

@section('content')

<h2>{{$album->name}}</h2>
<div class="flex">
    <a href="/" class="button">Back</a>

    <a href="/photos/create/{{$album->id}}" class="button is-primary">Upload</a>
</div>


 @if(count($album->photos) >0)
    <div class="columns"> 
        
           @foreach ($album->photos as $photo)
            <div class="column">   
            <h3><b>{{$photo->title}} </b></h3>
                
                <a href= "/photos/{{$photo->id}}">
                <img src="http://photo.com/storage/albums/{{$photo->album_id}}/{{$photo->photo}}" >
                </a>
                <p>{{$photo->description}}</p>
            </div>
           @endforeach
            
   </div>
     @endif
@endsection