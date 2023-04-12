@extends('layouts.app')

@section('content')
<div class="features">
    
      <section id="hero" class="hero hero-home bg-gray d-flex justify-content-center">
        <div class="container">
          <div class="row d-flex">
            <div class="pt-5 col-lg-6 text order-2 order-lg-1">
              <h1>{{$title}} Page</h1>
              <p class="hero-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
              <div class="CTA">
                @if (count($features) > 0)
                    @foreach ($features as $feet)
                    <a href="http://laravelsection.local/public/home" class="btn mx-1 btn-primary">{{$feet}}</a>
                    @endforeach
                @endif
            </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2"><img src="https://d19m59y37dris4.cloudfront.net/landy/1-0/img/Macbook.png" alt="..." class="img-fluid"></div>
          </div>
        </div>
      </section>

</div>
@endsection