@extends('frontend.layouts.app')
@section('content')


    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="bnr-inr bnr-inr-sm  overlay-black-middle" style="background-image:url(images/banner/bnr11.jpg);">
            <div class="container">
                <div class="bnr-inr-entry">
                    <h1 class="text-white">Solar Cleaning</h1>
                    <div class="separator bg-primary"></div>

                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Solar Cleaning</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full bg-white content-inner">
            <!-- About Company -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="widget_services style-2 m-b40">
                            <ul>
                                <li><a class="p-1" href="{{url('gutter-cleaning')}}">Gutter Cleaning</a> </li>
                                <li class="m-1" style="background-color:#272480; color:white"><a href="#" class="p-1" style="color:white">Solar Cleaning</a></li>

                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="box">
                                    <div class="media m-b30 p-b5"> <a href="#"><img src="images/our-services/img111.jpg" alt=""></a> </div>
                                    <div class="media"> <a href="#"><img src="images/our-services/pic444.jpg" alt=""></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="box">

                                    <div class="media"> <a href="#"><img src="{{ asset('images/our-services/img55.png') }}" alt=""></a></div>
                                    <div class="info m-t30 ">
                                        <h4 class="title m-t0"><a href="#">Solar Panel Cleaning</a></h4>
                                        <p>Western Australian has plenty of sunny days to produce solar power but this could be a waste if your solar panels aren't working at there maximum potential.

                                            We clean your solar panels using a pure water system designed for cleaning solar panels without causing any damage to the panels no soaps or detergents are used.



                                            Unlike other companies we don't use an old brush and some soap we have invested in the best equipment designed to offer perfectly clean panels that will run at there full potential guaranteed!</p>
                                        <div class="info m-t30 ">


                                            <p>If your property is on water tanks no problems with our system we don't use any dangerous chemicals giving you peace of mind that your drinking water is left perfectly safe.



                                                When looking for professional gutter & solar panel cleaners, look for a company that offers all of the following:

                                            <ul>
                                                <li class="ml-3">A free no obligation quote.</li>
                                                <li class="ml-3">Solar panel cleaning.</li>
                                                <li class="ml-3">Fully insured.</li>
                                                <li class="ml-3">Fully licensed employees.</li>
                                                <li class="ml-3">Working at heights qualified.</li>
                                                <li class="ml-3">Use only the best equipment.</li>
                                                <li class="ml-3">Vacuum gutters not just rough hand scoop of debris and leaves.</li>
                                            </ul>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Company END -->
        </div>
    </div>

@endsection
