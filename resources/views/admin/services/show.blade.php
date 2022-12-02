@extends('admin.layout')
@section('content')
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Services</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Time Slots</h3>
                </div>
                <!-- Light table -->
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="col-4 mb-3">
                            <span class="font-weight-bold">
                                <img src="{{ asset('storage/services/' . $service->photo) }}" alt="" height="200px">
                            </span>
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-md-6"><span class="font-weight-bold">Name :</span></div>
                                <div class="col-md-6">{{ $service->name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><span class="font-weight-bold">Price:</span></div>
                                <div class="col-md-6">{{ $service->price }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><span class="font-weight-bold">Delivery Time:</span></div>
                                <div class="col-md-6">{{ $service->delivery_time }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Footer -->
@include('partials.footer')
</div>
@endsection
