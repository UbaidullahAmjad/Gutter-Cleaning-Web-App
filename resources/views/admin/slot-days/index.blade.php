@extends('admin.layout')
@section('content')
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Slot Management</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Slot Management</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('admin.time-slots.create') }}" class="btn btn-sm btn-neutral">New <i class="fas fa-plus"></i></a>
                    <a href="{{ url('/admin/Block-list') }}" class="btn btn-sm
                    btn-neutral">Block Date</a>
                    {{-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> --}}
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
                    <h3 class="mb-0">Days</h3>
                </div>

                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Day</th>
                                <th scope="col" class="sort" data-sort="budget">Status</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($days as $day)
                            <tr>
                                <td>
                                    {{ $loop->index+1 }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.slot_days.index',$day->id) }}">{{ $day->name }}</a>
                                </td>
                                <td>
                                    @if($day->active == 1)
                                    <a class="btn btn-success"
                                        href="{{ route('admin.slot_days.change',$day->id) }}">&nbsp;Active&nbsp;&nbsp;</a>
                                    @else
                                    <a class="btn btn-danger"
                                        href="{{ route('admin.slot_days.change',$day->id) }}">Inactive</a>
                                    @endif
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
