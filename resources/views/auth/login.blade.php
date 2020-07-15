@extends('layout', [
  'title' => 'Login'
])

@section('content')
<body class='main_layout'>
<div class="container-login">
    <div class="wrap-login">

      <img class="login-user" src="/images/user.png" alt="user"/>

        <div class="login-form">
            <div class="card">
                <div class="login-form-title">{{ __('User Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="wrap-input validate-input">
                            <label for="email" class="input-email"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="login-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="wrap-input validate-input">
                            <label for="password" class="input-password"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="login-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-check-container">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-login-button">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="login-button">
                                    {{ __('Login') }}
                                </button>
                                <br>

                                @if (Route::has('password.request'))
                                    <a class="forgot-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="register-direct">
          <span>Not registered?
            <a class="register-link" href="{{ url('/register')}}">Create your account here</a>
        </span>
        
        </div>

    </div>
</div>
</body>
@endsection
