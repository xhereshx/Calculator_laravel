@extends('layout', [
  'title' => 'My Account'
])

@section('content')
<body class="main_layout">
<div class="profile-container">
    <div class="wrap-profile">
        <div class="col-md-8">
            <div class="card">
                <div class="profile-title">{{ __('Profile') }}</div>

                <div class="status">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <ul class="nav-profile">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-profile-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-profile-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>

              <img class="img-profile" src="/images/user.png" alt="user"/>
              
            </div>
        </div>
    </div>
    <div class="wrap-profile-info">
      <div class="profile-title">
        Mortgage Calculator Result
        <div class="mortgage-profile">
          <ul>
              <li><a href="{{ url('/products/mortgage_calculator/result/204')}}">Result 1</a></li>
              <li><a href="{{ url('/products/mortgage_calculator/result/207')}}">Result 2</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="wrap-profile-info">
      <div class="profile-title">Tax Calculator Result</div>
    </div>
</div>
</body>
@endsection