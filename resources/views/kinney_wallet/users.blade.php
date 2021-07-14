@extends('layouts.layout')

@section('title')
    All Users 
@endsection

@section('page_name')
    All Users 
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
                        All Users  
                        <a href="{{ url('/add_user') }}" class="btn btn-primary waves-effect waves-light">Add User</a> 
                        
                    </h3> 
                    <hr/>
<table id="datatable" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Role</th>
                                                        <th>Email</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach( $datas as $data) 
                                                    <tr>
                                                        <td>
                                                          <a href="{{ url('/edit_profile/'. $data->id ) }}">  <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> {{ $data->name}} <i class="mdi mdi-lead-pencil"></i></a>
                                                        </td>
                                                        <td> @if($data->is_admin == 0) User @elseif($data->is_admin == 1) Admin @endif </td>
                                                        <td>{{ $data->email }}</td>
                                                        <td> <a onclick="return confirm('Really want to delete?')" href="{{ url('/delete_profile/'. $data->id ) }}">  <i class="mdi mdi-delete"></i></a></td>
                                                
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