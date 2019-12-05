@extends('layouts.app')

@section('content')
    <a href="javascript:history.back()" class="btn btn-link">Go Back</a>
    <h1>{{$post->title}}</h1> 
    <br>
    <img style="width:100%" src="{{ asset("storage/cover_images/".$post->cover_image) }}">  
    <?php  /*
    <img style="width:100%" src="storage/cover_images/{{$post->cover_image}}">
    <img src="{{ asset("storage/cover_images/".$post->cover_image) }}" height="256px">
     */ ?>
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written On: {{$post->created_at}} By {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        <a href="{{$post->id}}/edit" class="btn btn-dark col-xs-3 col-form-btn mr-2">Edit</a>        
        <div class="form-group row float-right">    
            {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'POST'])!!}
                {!!Form::hidden('_method','DELETE')!!}
                {!!Form::submit('Delete', ['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}        
        </div>
    @endif
@endsection  