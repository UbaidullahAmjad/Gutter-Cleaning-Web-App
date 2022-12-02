@extends('admin.layout')
@section('content')
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Users</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                    <h3 class="mb-0">User</h3>
                </div>
                <!-- Light table -->
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="row">
                            <div class="col-md-4 mb-3"><span class="font-weight-bold">Name:</span> {{ $user->name }}
                            </div>
                            <div class="col-md-4 mb-3"><span class="font-weight-bold">Email: </span>{{ $user->email }}
                            </div>
                            <div class="col-md-4 mb-3"><span class="font-weight-bold">Phone
                                    Number: </span>{{ $user->phone_number }}</div>
                            <div class="col-md-4 mb-3"><span
                                    class="font-weight-bold">Address: </span>{{ $user->address }}</div>
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
