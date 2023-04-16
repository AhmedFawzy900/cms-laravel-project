@extends('layouts.app')

@section('content')

<div class="container media py-3">
    <h1>Media preview</h1>
 <div>
    <div class="buttons d-flex justify-content-between align-items-end">

        <a href="http://laravelsection.local/public/media/" class="btn btn-outline-secondary">Go back</a>
        @if (Auth::user())
            @if (Auth::user()->id == $media->user->id)
                {{-- delete button --}}
                {!! Form::open(['action' => ['App\Http\Controllers\Media1Controller@destroy',$media->id],'method' => 'post','class'=>"d-inline float-right"])!!}
                {{-- convert post method to DELETE mehtod --}}
                {{Form::hidden('_method','DELETE')}}
        
                    <div class=" inline form-group">
                        {{Form::submit('Delete',['class'=>'btn btn-outline-danger mt-3 p-2'])}}
                    </div>
                {!! Form::close() !!}
                @endif
        @endif
    </div>
 </div>
<hr>
{{-- show image --}}
<div class="row">
 <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-4">
    <img src="../photos/{{$media->name}}" class="w-100 h-100" alt="">
 </div>
 
</div>
</div>
<div class="d-flex justify-content-start container mt-1">
<small >Created at : {{$media->created_at}} by: {{ $media->user ? $media->user->name : '' }} </small>
</div>
@endsection