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
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
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
                    <h3 class="mb-0">Service Management</h3>
                </div>
                <!-- Light table -->
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" action="{{ route('admin.services.update', ['service'=>$service->id]) }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="date">Name</label>
                                <input class="form-control" type="text" name="name" required
                                    value="{{ $service->name }}">
                            </div>
                            <div class="form-group">
                                <label for="date">Price</label>
                                <input class="form-control" type="number" name="price" required
                                    value="{{$service->price}}">
                            </div>
                            <div class="form-group">
                                <label for="date">Delivery Time</label>
                                <input class="form-control" type="text" name="delivery_time" required
                                    value="{{ $service->delivery_time }}">
                            </div>
                            <div class="form-group">
                                <label for="date">Photo</label>
                                <input class="form-control" type="hidden" name="prev_photo" required
                                    value="{{ $service->photo }}">
                                <input class="form-control" type="file" name="photo">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('partials.footer')
</div>
@endsection
