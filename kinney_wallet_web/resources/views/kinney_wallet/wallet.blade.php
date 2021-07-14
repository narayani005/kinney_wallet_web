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
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Status</th>
                                                        <th>Credited date</th>
                                                        <th>Wallet Score</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2">  Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Credit</span></td>
                                                        <td>2011/04/25</td>
                                                        <td> <a href="{{ url('/edit_wallet') }}"> $320,800  <i class="mdi mdi-lead-pencil"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2">  Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td><span class="badge bg-soft-warning rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                                    Debit</span></td>
                                                        <td>2011/07/25</td>
                                                        <td> <a href="{{ url('/edit_wallet') }}"> $320,800  <i class="mdi mdi-lead-pencil"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td> <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Credit</span></td>
                                                        <td>2009/01/12</td>
                                                        <td> <a href="{{ url('/edit_wallet') }}"> $320,800  <i class="mdi mdi-lead-pencil"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Credit</span></td>
                                                        <td>2012/03/29</td>
                                                        <td> <a href="{{ url('/edit_wallet') }}"> $320,800  <i class="mdi mdi-lead-pencil"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td><span class="badge bg-soft-warning rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                                    Debit</span></td>
                                                        <td>2008/11/28</td>
                                                        <td> <a href="{{ url('/edit_wallet') }}"> $320,800  <i class="mdi mdi-lead-pencil"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Credit</span></td>
                                                        <td>2012/12/02</td>
                                                        <td> <a href="{{ url('/edit_wallet') }}"> $320,800  <i class="mdi mdi-lead-pencil"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td><span class="badge bg-soft-warning rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                                    Debit</span></td>
                                                        <td>2012/08/06</td>
                                                        <td> <a href="{{ url('/edit_wallet') }}"> $320,800  <i class="mdi mdi-lead-pencil"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td><span class="badge bg-soft-warning rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                                        Debit</span></td>
                                                        <td>2010/10/14</td>
                                                        <td> <a href="{{ url('/edit_wallet') }}"> $320,800  <i class="mdi mdi-lead-pencil"></i></a></td>
                                                    </tr>
                                                
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Donna Snider</td>
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Credit</span></td>
                                                        <td>2011/01/25</td>
                                                        <td> <a href="{{ url('/edit_wallet') }}"> $320,800  <i class="mdi mdi-lead-pencil"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection