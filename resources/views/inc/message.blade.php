
@if (count($errors) > 0)
   @foreach ($errors->all() as $error)
  <div class="container">
    <div class="alert alert-danger ">
        {{$error}}
     </div>
  </div>
   @endforeach
    
@endif

{{-- print success massege --}}
@if (session('success'))
<div class="container">
    <div class="alert alert-success">
        {{session('success')}}
    </div>
</div>
    
@endif

{{-- print deleted massege --}}
@if (session('delete'))
<div class="container">
    <div class="alert alert-danger">
        {{session('delete')}}
    </div>
</div>
    
@endif
