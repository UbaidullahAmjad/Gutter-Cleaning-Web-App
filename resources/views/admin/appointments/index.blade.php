@extends('admin.layout')

@section('content')
<!-- Header -->
<!-- Header -->

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Appointments</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Appointments</li>
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
                    <h3 class="mb-0">Appointments</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Name</th>
                                <th scope="col" class="sort" data-sort="budget">Email</th>
                                <th scope="col" class="sort" data-sort="budget">Phone #</th>
                                <th scope="col" class="sort" data-sort="budget">Service Type</th>
                                <th scope="col" class="sort" data-sort="budget" colspan="">Message</th>
                                <th scope="col" class="sort" data-sort="budget" colspan="">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($appointments as $booking)
                            <tr>
                                <td>
                                    {{ $loop->index+1 }}
                                </td>
                                <td>
                                    {{ $booking->name }}
                                </td>
                                <td>
                                    {{ $booking->email }}
                                </td>
                                <td>
                                    {{ $booking->phone_number }}
                                </td>
                                <td>
                                    <span class="badge badge-warning">{{ $booking->service_type }}</span>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $booking->id }}">
                                        View Message
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $booking->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <marquee behavior="scroll" direction="left">{{ $booking->message }}</marquee>
                                                </div>
                                                <div class="modal-footer">
                                                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
{{--                                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>

                                    <form action="{{ route('admin.appointments.destroy',['appointment'=>$booking->id]) }}"
                                          method="post" style="display: inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-icon-only"><i
                                                class="far fa-trash-alt"></i></button>
                                    </form>
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
