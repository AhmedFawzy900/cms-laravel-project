@extends('layouts.app')

@section('content')
<h1>Edit post</h1>
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update',$post->id],'method' => 'post'])!!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$post->body,['class'=>'form-control','row'=>'5'])}}
    </div>

   {{-- convert post method to put mehtod --}}
   {{Form::hidden('_method','PUT')}}

    <div class="form-group">
        {{Form::submit('submit',['class'=>'btn btn-primary mt-3 p-2'])}}
    </div>
{!! Form::close() !!}

@endsection