@extends('frontend.layouts.app')
@section('content')

    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="bnr-inr bnr-inr-sm  overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="bnr-inr-entry">
                    <h1 class="text-white">Gutter Cleaning</h1>
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
                    <li>Gutter Cleaning</li>
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
                                 <li class="m-1"  style="background-color:#272480; color:white"><a href="#" class="p-1" style="color:white">GUTTER CLEANING</a> </li>
                                <li><a class="p-1" href="{{url('solar-cleaning')}}">SOLAR CLEANING</a>  </li>

                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="box">
                                    <div class="media m-b30 p-b5"> <a href="#"><img src="images/our-services/img11.jpg" alt=""></a> </div>
                                    <div class="media"> <a href="#"><img src="images/our-services/pic4.jpg" alt=""></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="box">

                                    <div class="media"> <a href="#"><img src="{{ asset('images/our-services/downspout-cleaning.png') }}" alt=""></a></div>
                                    <div class="info m-t30 ">
                                        <h4 class="title m-t0"><a href="#">Gutter Cleaning Perth</a></h4>
                                        <p>Regular gutter cleaning saves expensive repairs. Have you ever noticed black spots under your eaves? if you have that  is sure sign your gutter and downpipes are blocked. Booking a gutter clean is easy Gutter cleaning Don’t Risk a Fall Give us a Call. Don't go to the top of the ladder and risk a fall its just not worth the risk. Book a gutter clean online today!



                                            Remember we don't just hand scoop the leaves and debris from your gutters we VACUUM CLEAN THEM using a high power industrial strength purpose built vacuum system.</p>
                                        <div class="info m-t30 ">


                                            <p>When looking for professional gutter & solar panel cleaners, look for a company that offers all of the following:

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
