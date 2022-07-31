@extends('advertiser.app')

@section('content')
    <main>
        <section class="login-register">
            <div class="container-xl">
                <h1 class="title mb-5">Login</h1>

                <div class="row justify-content-center">
                    <div class="col-md-4 col-xl-5">

                        <form action="" method="post" id="loginform">
                            <input type="hidden" id="v_type" name="v_type" value="Advertiser">
                            @csrf
                            <div class="form-group relative">
                                <i class="icon mail-icon"></i>
                                <input class="form-control form-control-lg" type="text" placeholder="{{trans('labels.v_email')}}" name="v_email"
                                    required data-parsley-errors-container="#err-email">
                                <div id="err-email" class="error-p"></div>
                            </div>
                            <div class="form-group relative">
                                <i class="icon lock-icon"></i>
                                <input class="form-control form-control-lg" type="password" placeholder="{{trans('labels.v_password')}}"
                                    name="password" required data-parsley-errors-container="#err-password">
                                <div id="err-password" class="error-p"></div>
                            </div>
                            <div class="form-group text-right">
                                <a href="{{ route('adv.forgot-password') }}" class="link">Forgot Password?</a>
                            </div>
                            <div class="form-group pt-3">
                                <button type="submit" class="btn btn-purple rounded-pill btn-block" onclick="login()">Login</button>
                                {{-- <a href="{{route('adv.dashboard')}}" class="btn btn-purple rounded-pill btn-block">Login</a> --}}
                            </div>
                            <div class="form-group text-right">
                                <p class="text-center pt-3">Don't have an account? <a href="{{ route('adv.signup') }}"
                                        class="link">Create New Account</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ frontAssets('advertiser/parsley/parsley.css') }}">
@endpush
@push('js')
    <script src="{{ frontAssets('advertiser/parsley/parsley.min.js') }}"></script>
    <script src="{{ frontAssets('custom.js') }}"></script>
@endpush
@push('jsfun')
    <script>
        jQuery(document).ready(function() {
            jQuery('#loginform').parsley();
        });

    </script>
    <script>
        var loginRoute = "{{ route('front.login') }}";

    </script>
@endpush
