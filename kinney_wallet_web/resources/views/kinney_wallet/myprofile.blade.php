@extends('layouts.layout')

@section('title')
    My Profile 
@endsection

@section('page_name')
    My Profile 
@endsection
@section('content')
<div class="page-content-wrapper">
<div class="row">
<div class="col-xl-12 col-lg-12">
                                    <div class="card directory-card">
                                        <div class="card-body directory-card-bg">
                                            <div class="clearfix">
                                                <div class="directory-img float-start me-4">
                                                    <img class="rounded-circle avatar-lg img-thumbnail"
                                                        src="{{ asset('assets/images/users/avatar-2.jpg')}}" alt="Generic placeholder image">
                                                </div>
                                                <h5 class="fon-size-16"> <a href="{{ url('/edit_profile') }}"> Sharon G. Patterson </a></h5>
                                                <p class="text-muted mb-2">Creative Director</p>

                                                <!--p class="text-muted">
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star"></span>
                                                </p-->
                                            </div>

                                            <div class="row text-muted p-4">
                                                <div class="col-md-6"> 
                                                    <table>
                                                        <tr>
                                                            <th> Email : </th>
                                                            <td> sample@gmail.com </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Mobile : </th>
                                                            <td> 2124436554 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Designation : </th>
                                                            <td> sample </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Address : </th>
                                                            <td> XXX, ghfdgfd, hgfdf.  </td>
                                                        </tr>
                                                    </table>

                                                </div>
                                                
                                            </div>
                                            <div class="directory-content mt-4">
                                                <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit
                                                    voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                                            </div>
                                            <div class="social-icons">
                                                <ul class="social-links list-inline mb-0 p-2">
                                                <li class="list-inline-item">
                                                        <a data-placement="top"
                                                            class="btn-danger avatar-sm rounded-circle d-block tooltips"
                                                            data-bs-toggle="tooltip" href="" title="Facebook">
                                                            <span class="avatar-title rounded-circle bg-transparent"><i
                                                                    class="fab fa-facebook-f"></i></span>
                                                        </a>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <a data-placement="top"
                                                            class="btn-info rounded-circle avatar-sm d-block tooltips"
                                                            data-bs-toggle="tooltip" href="" title="Twitter">
                                                            <span class="avatar-title rounded-circle bg-transparent">
                                                                <i class="fab fa-twitter"></i></span>
                                                        </a>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <a data-placement="top"
                                                            class="btn-primary rounded-circle avatar-sm d-block tooltips"
                                                            data-bs-toggle="tooltip" href="" title="1234567890">
                                                            <span class="avatar-title rounded-circle bg-transparent">
                                                                <i class="fa fa-phone"></i></span>
                                                        </a>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <a data-placement="top"
                                                            class="btn-info  rounded-circle avatar-sm d-block  tooltips"
                                                            data-bs-toggle="tooltip" href="" title="@skypename">
                                                            <span class="avatar-title rounded-circle bg-transparent">
                                                                <i class="fab fa-skype"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                
                                                  
                                                
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection