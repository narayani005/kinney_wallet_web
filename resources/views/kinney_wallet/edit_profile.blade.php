@extends('layouts.layout')

@section('title')
    Edit Profile 
@endsection

@section('page_name')
    Edit Profile 
@endsection

@section('content')
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Demo purpose only -->
                    <div style="min-height: 300px;">
                        <h3> Edit Profile</h3> 
                        <hr/>
                        <form action="/update_user" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="name" value="{{ $data->name }}"
                                                                id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email"  name="email" value="{{ $data->email }}"
                                                            id="example-email-input">
                            </div>
                        </div>
                                                @if($data->is_admin)  
                                                <div class="mb-3 row">
                                                    <label for="example-password-input"
                                                        class="col-md-2 col-form-label">Password</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" name="password" type="text" 
                                                        value="{{ $data->password }}"   id="example-password-input">
                                                    </div>
                                                </div>
                                                @endif
                        <!--div class="mb-3 row">
                                                    <label for="example-tel-input"
                                                        class="col-md-2 col-form-label">Telephone</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="tel" 
                                                            id="example-tel-input">
                                                    </div>
                            </div-->
                                                <!--div class="mb-3 row">
                                                    <label for="example-date-input" class="col-md-2 col-form-label">Date of Birth</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="date" value="2019-08-19"
                                                            id="example-date-input">
                                                </div>
                                                </div-->
                                                @if($data->is_admin)
                                                <div class="mb-3 row">
                                                    <label class="col-md-2 col-form-label">Designation</label>
                                                    <div class="col-md-10">
                                                        
                                                        <select class="form-select" name="role" aria-label="Default select example">
                                                            <option selected>Select</option>
                                                            <option  @if($data->is_admin == 0) selected @endif value="0"> User </option>
                                                            <option  @if($data->is_admin == 1) selected @endif value="1"> Admin </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                @endif
                                                <!--div class="mb-3 row">
                                                    <label class="col-md-2 col-form-label">Address</label>
                                                    <div class="col-md-10">
                                                        <textarea required class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div-->
                                                <div class="mb-3 row">
                                                    <label class="col-md-10 col-form-label"> </label>
                                                    <div class="col-md-2">
                                                        <input type="hidden" value="{{ $data->id }}" name="id" class="btn btn-primary">
                                                        <input type="submit" value="Update" class="btn btn-primary">
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