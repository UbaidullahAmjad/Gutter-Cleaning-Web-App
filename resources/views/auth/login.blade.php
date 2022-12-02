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
                      <form class="card p-a30 form" action="{{ route('login') }}" method="post">
                        @csrf
                        <h3 class="form-title m-t0">Sign In</h3>
                        <div class="separator-outer m-b5">
                            <div class="separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address and your password. </p>
                        <div class="form-group">
                            <input name="email" required="" class="form-control" placeholder="Email" type="email" value="{{ old('email') }}"/>
                        </div>
                        <div class="form-group">
                            <input name="password" required="" class="form-control " placeholder="Type Password" type="password"/>
                        </div>
                        <div class="form-group text-left">
                            <button class="site-button m-r5 dz-xs-flex" type="submit">login</button>
                            <div class="m-t20">
                                <label class="m-b0">
                                    <input id="check1" type="checkbox" name="remember">
                                    <label for="check1">{{ __('Remember me') }}</label>
                                </label>
{{--                                @if (Route::has('password.request'))--}}

{{--                                <a  href="{{ route('password.request') }}" class="m-l10"><i class="fa fa-unlock-alt"></i> {{ __('Forgot your password?') }}</a>--}}

{{--                                @endif--}}

                            </div>
                        </div>
                         <div class="bg-primary p-a15 bottom">
                        <a  href="{{ route('register') }}" class="text-white">Create an account</a>
                    </div>
                    </form>
                   
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
