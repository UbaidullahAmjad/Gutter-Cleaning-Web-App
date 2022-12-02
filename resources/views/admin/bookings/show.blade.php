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
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bookings</li>
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
                    <h3 class="mb-0">Booking</h3>
                </div>
                <!-- Light table -->
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="row">
                            <div class="col-md-12 mb-3"><span class="font-weight-bold">Customer:</span>
                                {{ $booking->customer->name }}</div>
                            <div class="col-md-12 mb-3"><span class="font-weight-bold">Date: </span>{{ $booking->date }}
                            </div><br>
                            <div class="col-md-12 mb-3"><span class="font-weight-bold">Start Time:
                                </span>{{ $booking->slot->start_time }}</div>
                            <div class="col-md-12 mb-3"><span class="font-weight-bold">End
                                    Time:</span>{{ $booking->slot->end_time }}</div>
                            <div class="col-md-8 mb-3"><span
                                    class="font-weight-bold">Service:</span>{{ $booking->service->name }}</div>
                            <div class="col-md-8 mb-3"><span
                                    class="font-weight-bold">Status:</span>{{ $booking->active == 1 ? 'Active' : 'Past' }}
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
