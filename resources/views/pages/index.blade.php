@extends('layouts.app')

@section('content')
{{-- <div class="Jumbotron text-center">

    <h1>{{$title}}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, amet!</p>
</div> --}}
{{-- <div class="container p-5 mb-4 text-center text-light bg-secondary">
    <div class="container-fluid py-5">
      <h1>{{$title}}</h1>
      <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis tempore sunt est repellendus exercitationem ex quisquam, nisi at dolorum amet rerum, doloremque veniam perspiciatis eius necessitatibus, incidunt error id mollitia?</p>
      <a href="http://laravelsection.local/public/login" class="btn btn-success">login</a>
      <a href="http://laravelsection.local/public/register" class="btn btn-primary">register</a>
    
    </div>
    
  </div>
   --}}
  <!-- ======= Hero Section ======= -->
  <section id="home" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Welcome to Home Page</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, facere sapiente corrupti aspernatur deserunt fugiat neque culpa</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="http://laravelsection.local/public/login" class="btn btn-success">login</a>
              <a href="http://laravelsection.local/public/register" class="btn btn-primary">register</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="\public\photos\hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
@endsection

