<!DOCTYPE html>
<html lang="en">

<head><meta charset="euc-kr">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="Clean360° - Cleaning Servces Template" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/logo3.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('images/logo3.png') }}" />

    <!-- PAGE TITLE HERE -->
    {{--    <title>Services</title>--}}

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-old.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/skin/skin-4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templete.css') }}">

</head>

<body id="bg">
    <div id="loading-area"></div>
    <div class="page-wraper">

    @include('frontend.includes.header')
    <!-- header END -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">

    <style type="text/css">
        body {
            font-family: 'Nunito', sans-serif;
        }

        .ftco-section li {
            margin: 0 auto;
            margin-top: 20px;
            /*box-shadow: 2px 2px grey;*/
            width: 150px;
            text-align: center;
        }

        .ftco-section a {
            margin: 0 auto;
            border-radius: 40%;

        }

        .ftco-section .timeslot {
            background-color: #000054;
            width: auto;
            height: 20px;
            color: white;
            padding: 7px;
            margin-top: 5px;
            font-size: 14px;
            border-radius: 3px;
            vertical-align: center;
            text-align: center;
        }

        .ftco-section .timeslot:hover {
            background-color: #f8f9fd;
            width: auto;
            height: 20px;
            color: #000054;
            border: 2px solid #000054;
            padding: 7px;
            margin-top: 5px;
            font-size: 14px;
            border-radius: 3px;
            vertical-align: center;
            text-align: center;
        }
        
        #timePickerUl{
            height: 320px !important
        }
        
        @media(max-width: 480px){
            #timePickerUl{
                height: 0px !important
            }
            .pick-time{
                padding-top: 0px !important;
            }
        }
    </style>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <h2 class="heading-section">Choose Available Day</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="elegant-calencar d-md-flex">
                                <div class="wrap-header d-flex align-items-center">
                                    <p id="reset">reset</p>
                                    <div id="header" class="p-0">
                                        <div class="pre-button d-flex align-items-center justify-content-center"><i
                                                class="fa fa-chevron-left"></i></div>
                                        <div class="head-info">
                                            <div class="head-day" id="selected_day"></div>
                                            <div class="head-month" id="selected_month_year"></div>
                                        </div>
                                        <div class="next-button d-flex align-items-center justify-content-center"><i
                                                class="fa fa-chevron-right"></i></div>
                                    </div>
                                </div>
                                <div class="calendar-wrap">
                                    <table id="calendar">
                                        <thead>
                                            <tr>
                                                <th>Sun</th>
                                                <th>Mon</th>
                                                <th>Tue</th>
                                                <th>Wed</th>
                                                <th>Thu</th>
                                                <th>Fri</th>
                                                <th>Sat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-5">
                    <div class="pick-time mt-5">
                        <h5 style="text-align: center;">Choose Available Time</h5>
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-primary">
                            {{ $error }} <br>
                        </div>
                        @endforeach
                        @endif
                        <ul id="timePickerUl"
                            style="overflow: auto;list-style-type: none; padding-left: 0px;">
                        </ul>
                        {{-- <input type="hidden" name="selectedStartTime" id="selectedStartTime" readonly="" value="8am">
                        <input type="hidden" name="selectedEndTime" id="selectedEndTime" readonly="" value="9am"> --}}
                    </div>
                </div>
                <div class="col-md-2 pt-5">
                    <div class="pick-time mt-5">
                        <h5 style="text-align: center;"></h5>
                        <form action="{{ auth()->check() ? route('customer.services.book') : route('services.booking-form') }}" method="get">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                            <input type="hidden" name="time_slot_id" id="time_slot_id">
                            <input type="hidden" name="date" id="date">
                            <input type="submit" id="book_now" value="Book Now" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.includes.footer')
    <!-- JavaScript  files ========================================= -->
    <script src="{{ asset('js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
    <script src="{{ asset('plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
    <script src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS  -->
    <script src="{{ asset('plugins/switcher/js/switcher.js') }}"></script><!-- CONTACT JS  -->
    <script src="{{ asset('js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->


    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#morning_slots').hide();

            $('td').click(function(){

                let date_str = $('#selected_day').html() + " " + $('#selected_month_year').html();
                let dates = date_str.replace('-',"");
                let date = dates.replace('  '," ");

                $('#date').val(date);
                $('#timePickerUl').html('');

                //when a user clicks the date quickly two slots are
                //added for same time. To fix this code is here
                //now we don't sent more than one ajax at a time
                if(jQuery.active){
                    return false;
                }

                $.ajax({
                    method: "get",
                    url: "{{ route('get_time_slots') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        date: date
                    }
                })
                    .done(function(response) {
                        if(response.slots.length){
                            $.each(response.slots, function (index,slot) {
                                $('#timePickerUl')
                                    .append("<li data-time-slot-id=\"" + slot.id + "\" onclick=\"fillSlotId(" + slot.id + ")\" class='time-slot' data-start-time=\"" + slot.start_time + "\" data-end-time=\"" + slot.end_time + "\"><a class=\"timeslot\" href=\"javascript::void(0)\">" + slot.start_time + "- " + slot.end_time + "</a></li>");
                            });
                        }else{
                            $('#timePickerUl').append("<li>No slot available for this date</li>");
                        }


                    });
            })
        });

        function fillSlotId(id) {
            $('.timeslot').each(function(i, obj) {
                obj.style.backgroundColor = '#000054';
                obj.style.color = 'white';
                obj.style.border = '1 px solid green';
            });
            event.target.style.backgroundColor = 'green';
            event.target.style.color = 'white';
            event.target.style.border = '1 px solid green';

            $('#time_slot_id').val(id);
        }
    </script>
    </div>
</body>

</html>
