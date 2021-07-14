@extends('layouts.layout')

@section('title')
    Add Wallet 
@endsection

@section('page_name')
    Add Wallet 
@endsection

@section('content')
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Demo purpose only -->
                    <div style="min-height: 300px;">
                    <h3> Add wallet  </h3>
                    <hr/>

                    <form action="{{ url('/wallet_submit') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="mb-3 row">
                                                    <label class="col-md-2 col-form-label">User</label>
                                                    <div class="col-md-10">
                                                        <select class="form-select" name="user_id" aria-label="Default select example">
                                                            <option>Select</option>
                                                            @foreach($datas as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Score</label>
                            <div class="col-md-10">
                                <input class="form-control" name="score" type="text" value=""
                                                                id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                                                    <label class="col-md-2 col-form-label">Status</label>
                                                    <div class="col-md-10">
                                                        <select class="form-select" name="status" aria-label="Default select example">
                                                            <option>Select</option>
                                                            <option value="Credited">Credited</option>
                                                            <option value="Debited">Debited</option>
                                                        </select>
                                                    </div>
                                                </div>
                        <div class="mb-3 row">
                                                    <label class="col-md-10 col-form-label"> </label>
                                                    <div class="col-md-2">
                                                        <input type="hidden" name="admin_id" value="2">
                                                        <input type="submit" value="Add Wallet" class="btn btn-primary">
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