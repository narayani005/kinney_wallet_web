@extends('layouts.layout')

@section('title')
Edit Wallet 
@endsection

@section('page_name')
Edit Wallet 
@endsection

@section('content')
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Demo purpose only -->
                    <div style="min-height: 300px;">
                    <h3> Edit wallet  </h3>
                    <hr/>

                    <form>
                    <div class="mb-3 row">
                                                    <label class="col-md-2 col-form-label">User</label>
                                                    <div class="col-md-10">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Select</option>
                                                            <option>Large select</option>
                                                            <option>Small select</option>
                                                        </select>
                                                    </div>
                                                </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Score</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="Artisanal kale"
                                                                id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                                                    <label class="col-md-10 col-form-label"> </label>
                                                    <div class="col-md-2">
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