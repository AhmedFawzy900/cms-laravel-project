@extends('layouts.app')

@section('content')

<div class="container py-3">
    <h1>Media</h1>
<hr>

<div class="row ">
    @if (count($media) > 0)
        @foreach ($media as $photo)
           <div class="col-md-4 col-sm-6 mb-3">
                <a href="http://laravelsection.local/public/media/{{$photo->id}}">
                    <img src="photos\{{$photo->name}}" class="img-thumbnail w-100 h-100 " alt="">
                </a>
           </div>
        @endforeach
        {{$media->links('pagination::bootstrap-5')}}
        
    @else
        <p>NO Media</p>    
    @endif
</div>
</div>

@endsection