@extends('admin.layout')
@section('content')
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Bookings History</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bookings History</li>
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
                    <h3 class="mb-0">User Bookings</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">User</th>
                                <th scope="col" class="sort" data-sort="budget">Date</th>
                                <th scope="col" class="sort" data-sort="budget">Start Time</th>
                                <th scope="col" class="sort" data-sort="budget">End Time</th>
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
                                    {{ $booking->customer->name }}
                                </td>
                                <td>
                                    {{ $booking->date }}
                                </td>
                                <td>
                                    {{ $booking->slot->start_time }}
                                </td>
                                <td>
                                    {{ $booking->slot->end_time }}
                                </td>

                                <td>
                                    <a href="{{ route('admin.bookings.changeStatus', ['booking'=>$booking->id]) }}"
                                        class="btn  btn-sm btn-primary">Mark as active</a>

                                    <a href="{{ route('admin.bookings.show', ['booking'=>$booking->id]) }}"
                                        class="btn btn-sm btn-primary">View</a>
                                    <a href="{{ route('admin.bookings.deleted', ['booking'=>$booking->id]) }}"
                                        class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Guest Bookings</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">User</th>
                                <th scope="col" class="sort" data-sort="budget">Date</th>
                                <th scope="col" class="sort" data-sort="budget">Start Time</th>
                                <th scope="col" class="sort" data-sort="budget">End Time</th>
                                <th scope="col" class="sort" data-sort="budget">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($guest_bookings as $booking)
                            <tr>
                                <td>
                                    {{ $loop->index+1 }}
                                </td>
                                <td>
                                    {{ $booking->guest->name }}
                                </td>
                                <td>
                                    {{ $booking->date }}
                                </td>
                                <td>
                                    {{ $booking->slot->start_time }}
                                </td>
                                <td>
                                    {{ $booking->slot->end_time }}
                                </td>

                                <td>
                                    <a href="{{ route('admin.bookings.changeStatus', ['booking'=>$booking->id]) }}"
                                        class="btn  btn-sm btn-primary">Mark as active</a>

                                    <a href="{{ route('admin.guest_bookings.show', ['booking'=>$booking->id]) }}"
                                        class="btn btn-sm btn-primary">View</a>
                                        <a href="{{ route('admin.bookings.deleted', ['booking'=>$booking->id]) }}"
                                        class="btn btn-sm btn-danger">Delete</a>
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
