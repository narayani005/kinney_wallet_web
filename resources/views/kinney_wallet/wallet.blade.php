@extends('layouts.layout')

@section('title')
    Wallet History
@endsection

@section('page_name')
    Wallet History 
@endsection

@section('content')
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Demo purpose only -->
                    <div style="min-height: 300px;">
                    
                    <h3> 
                        All Wallet  
                        <a href="{{ url('/add_wallet') }}" class="btn btn-primary waves-effect waves-light">Add Wallet</a> 
                        
                    </h3> 
                    <hr/>
<table id="datatable" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                        <th>Name</th>
                                                        <!--th>Position</th>
                                                        <th>Office</th-->
                                                        <th>Status</th>
                                                        <th>Credited date</th>
                                                        <th>Wallet Score</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($datas as $data)
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2">  {{ $data->name }}</td>
                                                        <!--td>System Architect</td>
                                                        <td>Edinburgh</td--->
                                                        <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    {{ $data->status }}</span></td>
                                                        <td>2011/04/25</td>
                                                        <td> <a href="{{ url('/edit_wallet/'. $data->wallet_id ) }}"> ${{ $data->score }}  <i class="mdi mdi-lead-pencil"></i></a></td>
                                                        <td> <a onclick="return confirm('Really want to delete?')" href="{{ url('/delete_wallet/'. $data->wallet_id ) }}">  <i class="mdi mdi-delete"></i></a></td>
                                                    </tr>
                                                @endforeach

                                                                                        </tbody>
                                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection