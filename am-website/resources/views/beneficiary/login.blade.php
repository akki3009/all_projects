@extends('beneficiary.app')

@section('content')
    <main>
        <section class="login-register">
            <div class="container-xl">
                <h1 class="title mb-5">Login</h1>

                <div class="row justify-content-center">
                    <div class="col-md-4 col-xl-5">

                        <form action="" method="post" id="loginfrm">
                            <input type="hidden" name="v_type" id="v_type" value="Beneficiary">
                            @csrf
                            <input type="hidden" name="v_type">
                            <div class="form-group relative">
                                <i class="icon mail-icon"></i>
                                <input class="form-control form-control-lg" type="email" placeholder="{{trans('labels.v_email')}}" name="v_email"
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
                                <a href="{{ route('forget-password') }}" class="link">Forgot Password?</a>
                            </div>
                            <div class="form-group pt-3">
                                <button type="submit" class="btn btn-purple rounded-pill btn-block" onclick="login()">Login</button>
                                {{-- <a href="{{route('dashboard')}}" class="btn btn-purple rounded-pill btn-block">Login</a> --}}
                            </div>
                            <div class="form-group text-right">
                                <p class="text-center pt-3">Don't have an account? <a href="{{ route('signup') }}"
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
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/parsley/parsley.css') }}">
@endpush
@push('js')
    <script src="{{ frontAssets('beneficiary/parsley/parsley.min.js') }}"></script>
    <script src="{{ frontAssets('custom.js') }}"></script>
@endpush
@push('jsfun')
    <script>
        jQuery(document).ready(function() {
            jQuery('#loginfrm').parsley();
        });

        var loginRoute = "{{ route('front.login') }}";

    </script>
    <script>
        // var register_route="{{ route('front.register') }}";

    </script>
@endpush
