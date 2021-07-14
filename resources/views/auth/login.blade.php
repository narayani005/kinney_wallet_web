@extends('layouts.login_base')

@section('title')
    Add User
@endsection

@section('page_name')
    Add User 
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                <div class="auth-logo">
                        <h3 class="text-center">
                            <a href="index.html" class="logo d-block my-4">
                                <img src="assets/images/logo-dark.png" class="logo-dark mx-auto" height="30" alt="logo-dark">
                                <img src="assets/images/logo-light.png" class="logo-light mx-auto" height="30" alt="logo-light">
                            </a>
                        </h3>
                    </div>
                    <div class="p-3">
                        <h4 class="text-muted font-size-18 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue to Kinney Wallet.</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row p-4">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            @if (Route::has('password.request'))
                                    <!--a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a-->
                                @endif
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('acc_avail')
    Don't have an account ? <a href="{{ url('/register') }}" class="text-white"> Signup Now  </a>
@endsection