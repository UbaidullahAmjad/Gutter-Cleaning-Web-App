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
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
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
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Subscriptions</h3>
                </div>
                <!-- Light table -->
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">


                        <!-- About Company -->


                        <div class="section-content">
                            <div class="pricingtable-row m-b30 p-lr15 no-col-gap">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="pricingtable-wrapper">
                                            <div class="pricingtable-inner pricingtable-highlight">

                                                <div class="pricingtable-title pricingtable-highlight">
                                                    <div class="row">
                                                        <div class="col-6 font-weight-bolder">
                                                            {{$package->name}}
                                                        </div>
                                                        <div class="col-6 font-weight-bolder">$
                                                            {{$package->price}}<span
                                                                class="pricingtable-type">/Month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <ul class="pricingtable-features" style="list-style-type: none;">
                                                    @foreach(json_decode($package->features) as
                                                    $feature)
                                                    <li><i class="fa fa-check"></i> {{$feature}} </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- About Company END -->

                        <!-- contact area  END -->
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('partials.footer')
</div>
@endsection
