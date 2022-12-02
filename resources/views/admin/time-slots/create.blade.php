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
                            <li class="breadcrumb-item active" aria-current="page">Time Slots</li>
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
                    <h3 class="mb-0">Time Slots</h3>
                </div>
                <!-- Light table -->
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">


                            {{ $error }} <br>


                        </div>
                        @endforeach
                        @endif
                        <form role="form" action="{{ route('admin.time-slots.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="date">Day</label>
                                <select name="day_id" id="" class="form-control" required>
                                    <option value="">Select day</option>
                                    @foreach($days as $day)
                                    <option value="{{ $day->id }}">{{ $day->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="active_slots">
                                <h2>Time Slot</h2>
                                <div class="form-group">
                                    <label for="date">Start Time</label>
                                    <input class="form-control" type="time" name="start_time[]" required>
                                </div>
                                <div class="form-group">
                                    <label for="date">End Time</label>
                                    <input class="form-control" type="time" name="end_time[]" required>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" id="add_slot">Add more slot</button>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
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
    $('#add_slot').click(function () {
                $("<h2>Time Slot</h2>\n" +
                    "<div class=\"form-group\">\n" +
                    "    <label for=\"date\">Start Time</label>\n" +
                    "    <input class=\"form-control\" type=\"time\" name=\"start_time[]\" required>\n" +
                    "</div>\n" +
                    "<div class=\"form-group\">\n" +
                    "    <label for=\"date\">End Time</label>\n" +
                    "    <input class=\"form-control\" type=\"time\" name=\"end_time[]\" required>\n" +
                    "</div>")
                    .appendTo('#active_slots');
            })
</script>
@endpush
@endsection
