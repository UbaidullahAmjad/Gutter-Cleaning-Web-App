@extends('frontend.layouts.app')
@section('content')
    <div class="page-content">


        <div class="section-full bg-white content-inner">
            <!-- About Company -->
            <div class="container">
                <div class="signup-form  m-0 m-auto mt-3">
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <h2>Sign Up</h2>
                            <p>Please fill in this form to create an account!</p>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    
                                
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                               required="required" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                               required="required" value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="phone_number" placeholder="Phone Number"
                                       required="required" value="{{ old('phone_number') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address"
                                       required="required" value="{{ old('address') }}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation"
                                       placeholder="Confirm Password" required="required">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                            </div>
                        </form>
{{--                        <div class="hint-text">Already have an account? <a href="{{ route('login') }}">Login here</a></div>--}}
                    </div>
                </div>
            </div>
            <!-- About Company END -->


            <!-- contact area  END -->
        </div>
        <!-- Content END-->
    </div>
    @push('custom-scripts')
        <script>
            $(document).ready(function () {

                $('.input').focus(function () {
                    $(this).parent().find(".label-txt").addClass('label-active');
                });

                $(".input").focusout(function () {
                    if ($(this).val() == '') {
                        $(this).parent().find(".label-txt").removeClass('label-active');
                    }
                });

            });
        </script>

    @endpush
@endsection
