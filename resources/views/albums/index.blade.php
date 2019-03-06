
@extends ('layouts.app')

@section('content')

    <h1> Album index</h1>
    <div class="columns"> 
     <section class="section">
        @foreach ($albums as $album)
            <h3><b>{{$album->name}} </b></h3>
            
            <a href= "/albums/{{$album->id}}">
                <img src="http://photo.com/storage/album_covers/{{$album->cover_image}}" >
            </a>
            <p>{{$album->description}}</p>
        @endforeach
    </section>
  </div>

@endsection

