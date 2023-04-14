@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="py-2">Posts</h1>
    <hr>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-4 col-sm-4">
                         <img class="w-100" style="    height: 200px; object-fit: cover;" src="covers\{{$post->cover_image}}" alt="{{$post->cover_image}}">
                        </div>
     
                        <div class="col-md-8 col-sm-8">
                         <div class="card-title">
                             <a href="http://laravelsection.local/public/posts/{{$post->id}}"> <h2 class="text-dark text-bold pt-2">{{$post->title}}</h2></a>
                              <small>Created at : {{$post->created_at}} by: {{ $post->user ? $post->user->name : '' }} </small>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links('pagination::bootstrap-5')}}
        
    @else
        <p>NO posts</p>    
    @endif
</div>
@endsection