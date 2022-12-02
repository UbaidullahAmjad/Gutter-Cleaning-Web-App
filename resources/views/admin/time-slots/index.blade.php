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
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Time Slots</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Start</th>
                                <th scope="col" class="sort" data-sort="budget">End</th>
                                <th scope="col" class="sort" data-sort="budget">Status</th>
                                <th scope="col" class="sort" data-sort="budget">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($slots as $slot)
                            <tr>
                                <td>
                                    {{ $loop->index+1 }}
                                </td>
                                <td>
                                    {{ $slot->start_time }}
                                </td>
                                <td>
                                    {{ $slot->end_time }}
                                </td>
                                <td>
                                    @if($slot->active == 1)
                                    <a class="btn btn-success"
                                        href="{{ route('admin.time_days.change' , $slot->id) }}">&nbsp;Active&nbsp;&nbsp;</a>
                                    @else
                                    <a class="btn btn-danger"
                                        href="{{ route('admin.time_days.change',$slot->id) }}">Inactive</a>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-icon-only"
                                        href="{{ route('admin.time-slots.edit',['time_slot'=>$slot->id]) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.time-slots.destroy',['time_slot'=>$slot->id]) }}"
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
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('partials.footer')
</div>
@endsection
