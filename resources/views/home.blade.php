@extends('layouts.app')

@section('content')
{{-- posts section --}}
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts Dashboard</div>

                <div class="card-body">
                  <a href="http://laravelsection.local/public/posts/create" class="btn btn-primary btn-sm">Create Post</a>
                  <h4 class="my-3">Your Blog Posts</h4>
                  <hr>

                  @if (count($posts) > 0)
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)   
                        <tr>
                          <td>{{$post->title}}</td>
                          <td>
                            {{-- edit button --}}
                                <a href="http://laravelsection.local/public/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
                          </td>
                          <td>
                                {{-- delete button --}}
                                    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id],'method' => 'post','class'=>""])!!}
                                    {{-- convert post method to DELETE mehtod --}}
                                    {{Form::hidden('_method','DELETE')}}

                                    <div class="form-group">
                                        {{Form::submit('Delete',['class'=>'btn btn-danger p-2'])}}
                                    </div>
                                    {!! Form::close() !!}
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  @else
                      <p>No posts available</p>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
<br>
{{-- media section  --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Media Dashboard</div>

                <div class="card-body">
                    <a href="http://laravelsection.local/public/media/upload" class="btn btn-primary btn-sm">Upload Media</a>
                    <h4 class="my-3">Your Media</h4>
                    <hr>

                    
                  @if (count($media) > 0)
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($media as $photo)   
                        <tr>
                          <td>
                            <img src="photos\{{$photo->name}}" class="img-thumbnail w-50 h-50" alt="">
                          </td>
                          <td>
                            {{-- edit button --}}
                                <a href="http://laravelsection.local/public/media/{{$photo->id}}" class="btn btn-outline-secondary">show</a>
                          </td>
                          <td>
                               {{-- delete button --}}
                                {!! Form::open(['action' => ['App\Http\Controllers\Media1Controller@destroy',$photo->id],'method' => 'post','class'=>"d-inline float-right"])!!}
                                {{-- convert post method to DELETE mehtod --}}
                                {{Form::hidden('_method','DELETE')}}

                                <div class="form-group">
                                    {{Form::submit('Delete',['class'=>'btn btn-danger p-2'])}}
                                </div>
                                {!! Form::close() !!}
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  @else
                      <p>No Media available</p>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
