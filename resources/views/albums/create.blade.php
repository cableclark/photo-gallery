@extends ('layouts.app')

@section('content')
<h3> Create album</h3>
<div>
    {{Form::open(['action'=> 'AlbumsController@store', 'method'=>'POST',
    'enctype'=>'multipart/form-data'])}}
    {{Form::text('name', '', ['placeholder' => 'Album Name'])}}
    {{Form::text ('description', '', ['placeholder'=>'Album description'])}}
    {{Form::file('cover_image')}}
    {{Form::submit('submit')}}
    {{Form::close()}}
</div>


@endsection