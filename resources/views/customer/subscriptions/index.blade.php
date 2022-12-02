@extends('customer.layout')
@section('content')
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Subscriptions</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Customer</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Subscriptions</li>
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
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Subscriptions</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Package Name</th>
                                <th scope="col" class="sort" data-sort="budget">Package Price</th>
                                <th scope="col" class="sort" data-sort="budget">Status</th>
                                <th scope="col" class="sort" data-sort="budget">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($subscriptions as $subscription)
                            <tr>
                                <td>
                                    {{ $loop->index+1 }}
                                </td>
                                <td>
                                    {{ $subscription->package->name }}
                                </td>
                                <td>
                                    {{ $subscription->package->price }}
                                </td>
                                <td>
                                    @if($subscription->active==1)
                                        <span class="badge badge-lg badge-success">Active</span>
                                    @endif
                                    @if($subscription->active==0)
                                        <span class="badge badge-lg badge-danger">In active</span>
                                    @endif
                                    @if($subscription->active==2)
                                        <span class="badge badge-lg badge-warning">Pending</span>
                                    @endif
                                </td>
                                <td class="" colspan="">
                                    <a class="btn btn-sm btn-icon-only"
                                        href="{{ route('customer.subscriptions.show', ['subscription'=>$subscription->id]) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    @role('admin')
                                    <form
                                        action="{{ route('customer.subscriptions.destroy',['subscription'=>$subscription->id]) }}"
                                        method="post" style="display: inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-icon-only"><i
                                                class="far fa-trash-alt"></i></button>
                                    </form>
                                    @endrole
                                    <a class="btn btn-sm btn-danger"
                                        href="{{ route('customer.subscriptions.changeStatus', ['subscription'=>$subscription->id]) }}">
                                        <?php
                                        if($subscription->active == 1 || $subscription->active == 2){
                                            echo "Unsubscribe";
                                        }
                                        if($subscription->active == 0){
                                            echo "Subscribe";
                                        }
                                        ?>
                                    </a>
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
