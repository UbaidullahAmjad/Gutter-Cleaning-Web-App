@extends('admin.layout')
@section('content')
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Packages</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Packages</li>
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
                    <h3 class="mb-0">Packages</h3>
                </div>
                <!-- Light table -->
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Package Description</h2>
                                <br>
                            </div>
                            <div class="col-2 mb-3"><span class="font-weight-bold">Name:</span>
                            </div>
                            <div class="col-2 mb-3">{{ $package->name }}</div>
                            <div class="col-2 mb-3"><span class="font-weight-bold">Price:
                                </span></div>
                            <div class="col-2 mb-3">{{ $package->price }}</div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Features:</h4>
                            </div>
                            @foreach(json_decode($package->features) as $feature)

                            <div class="col-4 mb-3"><i class="fas fa-check"></i> {{ $feature }}</div>
                            @endforeach
                        </div>
                        @if(!empty($package->subscribers->items))
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Subscribers</h2>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-bordered col-12">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Subscriber Name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Phone #
                                            </th>
                                        </tr>

                                    </thead>

                                    <tbody>
                                        @foreach($package->subscribers as $subscriber)
                                        <tr>
                                            <td>
                                                {{ $loop->index+1 }}
                                            </td>
                                            <td>
                                                {{ $subscriber->name }}
                                            </td>
                                            <td>
                                                {{ $subscriber->email }}
                                            </td>
                                            <td>
                                                {{ $subscriber->phone_number }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('partials.footer')
</div>
@endsection
