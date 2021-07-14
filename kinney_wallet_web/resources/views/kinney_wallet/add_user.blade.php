@extends('layouts.layout')

@section('title')
    Add User
@endsection

@section('page_name')
    Add User 
@endsection

@section('content')
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Demo purpose only -->
                    <div style="min-height: 300px;">
                        <h3> Add User</h3> 
                        <hr/>
                        <form>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="Artisanal kale"
                                                                id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" value="bootstrap@example.com"
                                                            id="example-email-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                                                    <label for="example-password-input"
                                                        class="col-md-2 col-form-label">Password</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="password" value="hunter2"
                                                            id="example-password-input">
                                                    </div>
                                                </div>
                        <div class="mb-3 row">
                                                    <label for="example-tel-input"
                                                        class="col-md-2 col-form-label">Telephone</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="tel" value="1-(555)-555-5555"
                                                            id="example-tel-input">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-date-input" class="col-md-2 col-form-label">Date of Birth</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="date" value="2019-08-19"
                                                            id="example-date-input">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-2 col-form-label">Designation</label>
                                                    <div class="col-md-10">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Select</option>
                                                            <option>Large select</option>
                                                            <option>Small select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-2 col-form-label">Address</label>
                                                    <div class="col-md-10">
                                                        <textarea required class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-10 col-form-label"> </label>
                                                    <div class="col-md-2">
                                                        <input type="submit" value="Add User" class="btn btn-primary">
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