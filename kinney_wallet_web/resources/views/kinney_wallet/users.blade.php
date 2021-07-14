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
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                          <a href="{{ url('/edit_profile') }}">  <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Tiger Nixon <i class="mdi mdi-lead-pencil"></i></a>
                                                        </td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                    <td>
                                                          <a href="{{ url('/edit_profile') }}">  <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Tiger Nixon <i class="mdi mdi-lead-pencil"></i></a>
                                                        </td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                    <td>
                                                          <a href="{{ url('/edit_profile') }}">  <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Tiger Nixon <i class="mdi mdi-lead-pencil"></i></a>
                                                        </td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <tr>
                                                    <td>
                                                          <a href="{{ url('/edit_profile') }}">  <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Tiger Nixon <i class="mdi mdi-lead-pencil"></i></a>
                                                        </td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <tr>
                                                    <td>
                                                          <a href="{{ url('/edit_profile') }}">  <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Tiger Nixon <i class="mdi mdi-lead-pencil"></i></a>
                                                        </td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <tr>
                                                    <td>
                                                          <a href="{{ url('/edit_profile') }}">  <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Tiger Nixon <i class="mdi mdi-lead-pencil"></i></a>
                                                        </td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                    </tr>
                                                    <tr>
                                                    <td>
                                                          <a href="{{ url('/edit_profile') }}">  <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Tiger Nixon <i class="mdi mdi-lead-pencil"></i></a>
                                                        </td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <tr>
                                                    <td>
                                                          <a href="{{ url('/edit_profile') }}">  <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Tiger Nixon <i class="mdi mdi-lead-pencil"></i></a>
                                                        </td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                
                                                    <tr>
                                                    <td>
                                                          <a href="{{ url('/edit_profile') }}">  <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Tiger Nixon <i class="mdi mdi-lead-pencil"></i></a>
                                                        </td>
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        <td>27</td>
                                                        <td>2011/01/25</td>
                                                        <td>$112,000</td>
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