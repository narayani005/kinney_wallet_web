@extends('layouts.layout')

@section('title')
Dashboard 
@endsection

@section('page_name')
Dashboard 
@endsection

@section('content')
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Demo purpose only -->
                    <div style="min-height: 300px;">
                    <h3> Dashboard  </h3>
                    <hr/>

                    <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Wallet
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">{{auth()->user()->name}}</h5>
                                                    
                                                    <h3 class="mb-3 text-white"> Score {{ $data }}  </h3>
                                                    <div class="">
                                                    <!--a href=""><h4><span class="badge bg-dark">  Share </span></h4> </a--> 
                                                    
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-cube-outline display-2"></i>
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
</div>


@endsection