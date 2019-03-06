@extends ('layouts.app')

@section('content')
<h3> Create album</h3>

    {{Form::open(['action'=> 'AlbumsController@store', 'method'=>'POST',
    'enctype'=>'multipart/form-data', "class"=>"field"])}}
    <div class="field">
        <div class="control">
        {{Form::text('name', '', ['placeholder' => 'Album Name', "class"=>"input"])}}
        </div>
    </div>
    <div class="field">
        <div class="control">
            {{Form::textarea ('description', '', ['placeholder'=>'Album description', "class"=>"textarea "])}}
        </div>
    </div>  
    <div class="field">
        <div class="control">     

            <div class="file">
                 <label class="file-label">
                    <input class="file-input" type="file" name="resume">
                    <span class="file-cta">
                        <span class="file-icon">
                        <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                        Choose a file…
                        </span>
                    </span>
                 </label>
            </div>
        </div> 
    </div>  
    <div class="field"> 
        <div class="control">   
            {{Form::submit('submit', ["class"=>"button"] )}}
        </div>
   </div>   
    {{Form::close()}}
</div>


@endsection