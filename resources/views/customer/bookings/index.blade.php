@extends('customer.layout')
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
                    {{--                        <a href="{{ route('admin.bookings.create') }}" class="btn btn-sm
                    btn-neutral">New</a>--}}
                    {{--                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>--}}
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

                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
            @endif
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Bookings</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Service</th>
                                <th scope="col" class="sort" data-sort="budget">Start Time</th>
                                <th scope="col" class="sort" data-sort="budget">End Time</th>
                                <th scope="col" class="sort" data-sort="budget">Status</th>
                                <th scope="col" class="sort" data-sort="budget">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($bookings as $booking)
                            <tr>
                                <td>
                                    {{ $loop->index+1 }}
                                </td>

                                <td>
                                    {{ $booking->service->name }}
                                </td>
                                <td>
                                    {{ $booking->slot->start_time }}
                                </td>
                                <td>
                                    {{ $booking->slot->end_time }}
                                </td>
                                <td>
                                    {{ $booking->active == 1 ? 'Active' : 'In-active' }}
                                </td>
                                <td>
                                    <a href="{{ route('customer.bookings.changeStatus', ['booking'=>$booking->id]) }}"
                                        class="btn btn-primary">Cancel</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('partials.footer')
</div>
@endsection