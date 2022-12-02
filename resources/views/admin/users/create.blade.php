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
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card-header border-0">
                    <h3 class="mb-0">Users</h3>
                </div>
                <!-- Light table -->
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" action="{{ route('admin.users.update',['user'=>$user->id]) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="date">Name</label>
                                <input class="form-control" type="text" name="name" required value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="date">Email</label>
                                <input class="form-control" type="email" name="email" required
                                    value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input class="form-control" type="text" name="phone_number" required
                                    value="{{ $user->phone_number }}">
                            </div>
                            <div class="form-group">
                                <label for="date">Address</label>
                                <input class="form-control" type="text" name="address" required
                                    value="{{ $user->address }}">
                            </div>
                            <div class="form-group">
                                <label for="date">Password</label>
                                <input class="form-control" type="password" name="password" autocomplete="off">
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
