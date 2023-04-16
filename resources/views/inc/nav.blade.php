{{-- <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://laravelsection.local/public/">CMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://laravelsection.local/public/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://laravelsection.local/public/features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://laravelsection.local/public/about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://laravelsection.local/public/posts">Blog</a>
          </li>
       
        </ul>
       
      </div>
    </div>
  </nav> --}}
  
  {{--nav bar with auth  --}}
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://laravelsection.local/public/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://laravelsection.local/public/features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://laravelsection.local/public/about">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://laravelsection.local/public/posts">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://laravelsection.local/public/media">Media</a>
              </li>
           
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                <div class="dropdown">
                  <button class="btn dropdown-toggle text-light p-0" type="button" data-toggle="dropdown">{{ Auth::user()->name }}
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                      <a class="dropdown-item" href="http://laravelsection.local/public/home">Dashboard</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
               
                  </ul>
                </div>
                    {{-- <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://laravelsection.local/public/home">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li> --}}
                @endguest
            </ul>
        </div>
    </div>
</nav>