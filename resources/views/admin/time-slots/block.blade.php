@extends('admin.layout')
@section('content')
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Time Slots</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Block Dates</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
{{--                    <a href="{{ route('admin.time-slots.create') }}" class="btn btn-sm btn-neutral">New</a>--}}
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
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Block Dates</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <form action="{{ route('admin.blocklist.store') }}" method="POST">
                        @csrf
                        <div class="row" style="margin: auto auto">
                            <div class="col-6">
                                <input type="date" class="form-control" name="date">
                            </div>
                            <div class="col-6">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                    <hr>

                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Start</th>
                                <th scope="col" class="sort" data-sort="budget">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($blocks as $block)
                            <tr>
                                <td>
                                    {{ $loop->index+1 }}
                                </td>
                                <td>
                                    {{ $block->date }}
                                </td>
                                <td>
                                    <a class="btn btn-danger" onclick="return confirm('Are you want to delete this?')"
                                        href="{{ route('admin.blocklist.delete',$block->date) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('partials.footer')
</div>
@endsection
