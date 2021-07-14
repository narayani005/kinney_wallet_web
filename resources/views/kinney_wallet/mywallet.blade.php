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
@foreach($datas as $data)
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Wallet
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">{{ $data->name }}</h5>
                                                    <h3 class="mb-3 text-white">{{ $data->score }}</h3>
                                                    <div class="">
                                                    <a href=""><h4><span class="badge bg-dark">  Share </span></h4> </a> 
                                                    
                                                    <span class="ms-2">Credited On <br/> {{ $data->updated_at }}</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-cube-outline display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                           


















                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection