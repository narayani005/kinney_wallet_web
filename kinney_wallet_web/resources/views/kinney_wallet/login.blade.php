@extends('layouts.login_base')

@section('title')
    Add User
@endsection

@section('page_name')
    Add User 
@endsection

@section('content')
<div class="card">
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

                        <form class="form-horizontal" action="index.html">

                            <div class="mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                            </div>

                            <div class="mb-3 row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                        <label class="form-check-label" for="customControlInline">Remember
                                            me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-end">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-12">
                                    <a href="{{ url('/forget_pwd') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your
                                        password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


@endsection

@section('acc_avail')
    Don't have an account ? <a href="{{ url('/register') }}" class="text-white"> Signup Now  </a>
@endsection