@extends('layouts.app')

@section('content')

    <h2>{{$album->name}}</h2>

    <a href="/" class="button">Back</a>
    <br>
<a href="/photos/create/{{$album->id}}" class="button is-primary">Upload</a>

@endsection