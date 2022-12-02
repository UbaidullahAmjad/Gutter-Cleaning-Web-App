@extends('admin.layout')
@section('content')
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Bookings</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Customer</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bookings</li>
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
                    <h3 class="mb-0">Bookings</h3>
                </div>
                <!-- Light table -->
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" action="{{ route('admin.bookings.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="date">Name</label>
                                <input class="form-control" type="date" name="date" required>
                            </div>
                            <div class="active-slots">
                            </div>
                            <div id="slot_template">
                                <h2>Time Slot</h2>
                                <div class="form-group">
                                    <label for="date">Start Time</label>
                                    <input class="form-control" type="time" name="start_time[]" required>
                                </div>
                                <div class="form-group">
                                    <label for="date">End Time</label>
                                    <input class="form-control" type="time" name="end_time[]" required>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary"
                                onclick="$('.active-slots').append($('#slot_template').html())">Add 1 more slot</button>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Create</button>
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
