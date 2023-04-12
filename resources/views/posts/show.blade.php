@extends('layouts.app')

@section('content')
<div class="container my-2">

    {{-- <a href="http://laravelsection.local/public/posts/" class="btn btn-outline-secondary">Go back</a> --}}
    <h1>{{$post->title}}</h1>
    <div>

        <img class="w-50 h-100" src="../covers/{{$post->cover_image}}" alt="{{$post->cover_image}}">
    </div>
    <br><br>
    <p>{!!$post->body!!}</p>
    
    <hr>
    <small>Created at : {{$post->created_at}} by: {{ $post->user ? $post->user->name : '' }} </small>
    <hr>

    @if (Auth::user())
        @if (Auth::user()->id == $post->user->id)
        <div class="buttons d-flex justify-content-between align-items-end">

            {{-- edit button --}}
            <a href="http://laravelsection.local/public/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
    
            {{-- delete button --}}
    
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id],'method' => 'post','class'=>"d-inline float-right"])!!}
            {{-- convert post method to DELETE mehtod --}}
            {{Form::hidden('_method','DELETE')}}
    
                <div class="form-group">
                    {{Form::submit('Delete',['class'=>'btn btn-danger mt-3 p-2'])}}
                </div>
            {!! Form::close() !!}
        </div>
             
        @endif
    @endif
</div>
@endsection