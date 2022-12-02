@extends('frontend.layouts.app')
@section('content')
    <!-- Content -->
    <div class="page-content">






        <div class="section-full bg-white content-inner">
            <!-- About Company -->
            <div class="container">
                <div class="p-a30 bg-white m-b30">
                    <div class="section-head">
                        <h2 class="text-uppercase">Service Booking Form</h2>
                    </div>
                    <div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                        <h6 data-ux="Details" data-aid="SECONDARY_TITLE_RENDERED" data-typography="DetailsAlpha"
                            class="x-el x-el-h6 c1-1 c1-2 c1-1l c1-1m c1-1n c1-1o c1-58 c1-4v c1-b c1-92 c1-45 c1-1r c1-47 c1-48 c1-49 c1-4a">
                        </h6>
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
                        <form class="" action="{{ route('services.book') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone_number">Phone #</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                            </div>
                            <button type="submit" class="btn btn-success">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- About Company END -->







            <!-- contact area  END -->
        </div>
        <!-- Content END-->
    </div>
@endsection
