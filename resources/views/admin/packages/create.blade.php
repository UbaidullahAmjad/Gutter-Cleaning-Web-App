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
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('admin.packages.create') }}" class="btn btn-sm btn-neutral">New <i
                            class="fas fa-plus"></i></a>
                    {{-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
            @if($errors->any())
            {{ implode('', $errors->all(':message')) }}
            @endif
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Time Slots</h3>
                </div>
                <!-- Light table -->
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form action="{{ route('admin.packages.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="date">Name</label>
                                <input class="form-control" type="text" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Price</label>
                                <input class="form-control" type="number" name="price" required>
                            </div>
                            <div id="active_slots">
                                <div class="form-group pb-2">
                                    <label for="date">Feature</label>
                                    <input class="form-control" type="text" name="features[]" required>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary" onclick="feature()">Add more
                                feature</button>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary mt-4" value="Create">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="slot_template" class="form-group p-2 d-none">
                <label for="date">Feature</label>
                <input class="form-control" type="text" name="features[]">
            </div>
        </div>
    </div>
    <script>
        function feature(){
        $($('#slot_template').html()).appendTo('#active_slots')
        }
    </script>
    <!-- Footer -->
    @include('partials.footer')
</div>
@endsection
