@extends('layouts.login_base')

@section('title')
    Add User
@endsection

@section('page_name')
    Add User 
@endsection

@section('content')

        <!-- Begin page -->
     
            <div class="card">
                <div class="card-body">

                    <div class="auth-logo">
                        <h3 class="text-center">
                            <a href="index.html" class="logo d-block my-4">
                                <img src="{{ asset('assets/images/logo-dark.png')}}" class="logo-dark mx-auto" height="30" alt="logo-dark">
                                <img src="{{ asset('assets/images/logo-light.png')}}" class="logo-light mx-auto" height="30" alt="logo-light">
                            </a>
                        </h3>
                    </div>

                    <div class="p-3">
                        <h4 class="text-muted font-size-18  text-center">Free Register</h4>
                        <p class="text-muted text-center">Get your free Kinney Wallet account now.</p>

                        <form class="form-horizontal " action="#">

                            <div class="mb-3">
                                <label class="form-label" for="useremail">Email</label>
                                <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="userpassword">Password</label>
                                <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="role">Role</label>
                                <select class="form-control" id="role" placeholder="Enter role">
                                    <option value="user"> User </option>
                                    <option value="admin"> Admin </option>
                                </select>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary w-md waves-effect waves-light"
                                        type="submit">Register</button>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-12">
                                    <p class="font-size-14 text-muted mb-0">By registering you agree to the Kinney Wallet <a href="#"
                                            class="text-primary">Terms of Use</a></p>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

           
        

@endsection

@section('acc_avail')
    Already have an account ? <a href="{{ url('/login') }}" class="text-white"> Login  </a>
@endsection