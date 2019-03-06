
@extends ('layouts.app')

@section('content')
<div class="columns"> 
    <h3> Album index</h3>
    @foreach ($albums as $album)
        {{$album->name}}
        {{$album->description}}
        <img src="http://photo.com/storage/album_covers/{{$album->cover_image}}" >
    @endforeach
</div>
@endsection

