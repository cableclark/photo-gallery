@extends('layouts.app')

@section('content')

    <h2>{{$album->name}}</h2>

    <a href="/" class="button">Back</a>
    <br>
<a href="/photos/create/{{$album->id}}" class="button is-primary">Upload</a>

<div class="columns"> 
    @if(count($album->photos) >0)
        <section class="section">
           @foreach ($album->photos as $photo)
               <h3><b>{{$photo->title}} </b></h3>
               
               <a href= "/albums/{{$photo->id}}">
               <img src="http://photo.com/storage/albums/{{$photo->album_id}}/{{$photo->photo}}" >
               </a>
               <p>{{$photo->description}}</p>
           @endforeach
       </section>
     </div>
     @endif
@endsection