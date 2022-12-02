@extends('frontend.layouts.app')
@section('content')
<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="bnr-inr bnr-inr-sm overlay-black-middle"
        style="background-image: url({{ asset('images/Services-banner.jpg') }});">
        <div class="container">
            <div class="bnr-inr-entry">
                <h1 class="text-white">Book gutter and solar panel cleaning online </h1>
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
                <li>Prices</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->






    <div class="section-full bg-white content-inner">
        <!-- About Company -->
        <div class="container">
            <div class="p-a30 bg-white m-b30">
                <div class="section-head">
                    <h2 class="text-uppercase">Our Prices</h2>
                </div>
                <div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                    <h6 data-ux="Details" data-aid="SECONDARY_TITLE_RENDERED" data-typography="DetailsAlpha"
                        class="x-el x-el-h6 c1-1 c1-2 c1-1l c1-1m c1-1n c1-1o c1-58 c1-4v c1-b c1-92 c1-45 c1-1r c1-47 c1-48 c1-49 c1-4a">
                    </h6>
                    <h2 role="heading" aria-level="2" data-ux="HeadingMajor" data-aid="SECTION_TITLE_RENDERED"
                        data-typography="HeadingAlpha"
                        class="x-el x-el-h2 c1-1 c1-2 c1-1l c1-1m c1-8d c1-2y c1-3k c1-1o c1-1p c1-4v c1-2i c1-3o c1-2k c1-3p c1-7h c1-2x c1-93 c1-1r c1-7q c1-94 c1-95 c1-96 c1-97 c1-98 c1-99 c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g">
                        Book online</h2>
                    <p>Step 1: Choose Service.</p>
                    <p>Step 2: Book Day & Time.</p>
                    <p>Step 3: Email and SMS confirmation and reminder sent.</p>
                    <p>Step 4: Gutters and Solar Panels Cleaned.</p>
                    <p>Step 5: Invoice sent by email or pay on the day use Visa Mastercard  or EFT.</p>
                    <div data-ux="HorizontalBox"
                        class="x-el x-el-div x-el c1-1 c1-2 c1-76 c1-4 c1-16 c1-2s c1-90 c1-9h c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                        <div data-ux="Text" data-aid="DESCRIPTION_TEXT" data-typography="BodyBeta"
                            class="x-el c1-1 c1-2 c1-1l c1-1m c1-1n c1-1o c1-1p c1-15 c1-b c1-3q c1-6p c1-1r c1-6s c1-6u c1-6v c1-6w x-rt">
                            <!--<p style="margin:0"><span>Gutter cleaning guys offer booking online service for your-->
                            <!--        convenience. Payments are non contact we accept all forms of payment Visa ,-->
                            <!--        Mastercard , Zip Pay or we can send you an invoice to pay online using bank transfer-->
                            <!--        or visa , Mastercard. Gutter &amp; solar panel cleaning book online.</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="row mt-5" style="margin:  0px 0px">
                    @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 m-3 card">
                        <div class="row">
                            <img class="service-image" src="{{ asset('storage/services/' . $service->photo) }}" alt=""
                                style="width: 100%;height:200px;">
                        </div>
                        <div class="row service-card mt-3 font-weight-bold">
                            <div class="col-12">
                                <span class="service-deliv"><b>Name:</b> </span>&nbsp;&nbsp;
                                <span class="service-deliv">{{ $service->name }}</span><br>
                                
                                <span class="service-deliv"><b>Price:</b> </span>&nbsp;&nbsp;
                                <span class="service-deliv">${{$service->price}}.00</span>
                                <!--<div class="row">-->
                                <!--    <div class="col-6">-->
                                        
                                <!--    </div>-->
                                <!--    <div class="col-6">-->
                                        
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="row">-->
                                <!--    <div class="col-6">-->
                                        
                                <!--    </div>-->
                                <!--    <div class="col-6">-->
                                        
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="row">-->
                                <!--    <div class="col-6">-->
                                        
                                <!--    </div>-->
                                <!--    <div class="col-6">-->
                                         
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                            
                        </div>
                        <div class="row service-card mt-3 mb-2">
                            <a href="{{ route('calender', ['service'=>$service->id]) }}"
                                class="booknow btn btn-success ml-2">Book Now</a>
                        </div>
                    </div>
                    {{-- @if(!$loop->last)
                    <div class="col-md-1"></div>
                    @endif --}}
                    @endforeach
                </div>
            </div>
        </div>
        <!-- About Company END -->







        <!-- contact area  END -->
    </div>
    <!-- Content END-->
</div>
@endsection
