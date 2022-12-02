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
                    <h3 class="mb-0">Package Management</h3>
                </div>
                <!-- Light table -->
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" action="{{ route('admin.packages.update', ['package'=>$package->id]) }}"
                            method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="date">Name</label>
                                <input class="form-control" type="text" name="name" required value="{{$package->name}}">
                            </div>
                            <div class="form-group">
                                <label for="date">Price</label>
                                <input class="form-control" type="number" name="price" required
                                    value="{{$package->price}}">
                            </div>
                            <div id="active_slots">
                                <h2>Features</h2>
                                @foreach(json_decode($package->features) as $feature)

                                <div class="form-group">
                                    <label for="date">Feature {{ $loop->index+1 }}</label>
                                    <input class="form-control" type="text" name="features[]" required
                                        value="{{$feature}}">
                                </div>
                                @endforeach

                            </div>
                            <button type="button" class="btn btn-primary" id="add_feature">Add more feature</button>
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
@push('custom-scripts')
<script>
    $('#add_feature').click(function () {
            $("         <div class=\"form-group\">\n" +
            "                                        <label for=\"date\">Feature</label>\n" +
            "                                        <input class=\"form-control\" type=\"text\" name=\"features[]\" >\n" +
            "                                    </div>")
                .appendTo('#active_slots');
        })
</script>
@endpush
@endsection
