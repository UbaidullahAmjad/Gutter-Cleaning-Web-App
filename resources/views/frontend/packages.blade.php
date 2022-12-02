@extends('frontend.layouts.app')
@section('content')
<div class="page-content">
    <!-- inner page banner -->
    <div class="bnr-inr bnr-inr-sm overlay-black-middle" style="background-image: url(banner3.jpg);">
        <div class="container">
            <div class="bnr-inr-entry">
                <h1 class="text-white">Specials</h1>
                <div class="separator bg-primary"></div>
                <p class="text-white max-w800 m-auto m-b50"></p>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Specials</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="section-full bg-white content-inner">
        <!-- About Company -->
        <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="p-a30 bg-white m-b30">
                <div class="section-head">
                    <h2 class="text-uppercase">Our Specials</h2>
                </div>
                @foreach ($packages->chunk(3) as $chunk)
                <div class="section-content pb-5">

                    <div class="pricingtable-row m-b30 p-lr15 no-col-gap">
                        <div class="row">
                            @foreach ($chunk as $package)

                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="pricingtable-wrapper">
                                    <div class="pricingtable-inner {{$loop->even ? 'pricingtable-highlight' : ''}}">
                                        <div class="pricingtable-price"> <span class="pricingtable-bx">$
                                                {{$package->price}}</span> 
                                                <!--<span class="pricingtable-type">Month</span>-->
                                        </div>
                                        <div class="pricingtable-title {{$loop->even ? 'pricingtable-highlight' : ''}}">
                                            <h2>{{$package->name}}</h2>
                                        </div>
                                        <ul class="pricingtable-features">
                                            {{$loop->even ? '<br>' : ''}}
                                            @foreach(json_decode($package->features) as $feature)
                                                <li><i class="fa fa-check"></i> {{$feature}} </li>
                                            @endforeach
                                        </ul>
                                        <div class="pricingtable-footer"> <a
                                                href="{{ route('customer.packages.subscribe', ['package'=>$package->id]) }}"
                                                class="site-button ">Book Now</a> </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- About Company END -->

        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    <button class="scroltop fa fa-arrow-up"></button>
</div>
@endsection
