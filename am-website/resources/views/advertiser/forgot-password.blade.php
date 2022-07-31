@extends('advertiser.app')

@section('content')
    <main>
        <section class="login-register">
            <div class="container-xl">
                <h1 class="title">Forgot Password</h1>
                <p class="text-center mb-5">Don't Worry! we will send you a password reset link on your registered email
                    address.</p>

                <div class="row justify-content-center">
                    <div class="col-md-4 col-xl-5">

                        <form action="" method="post" id="forgetform">
                            <div class="form-group relative">
                                <i class="icon mail-icon"></i>
                                <input class="form-control form-control-lg" type="email" placeholder="{{trans('labels.v_email')}}" name="v_email"
                                    id="v_email" required data-parsley-errors-container="#err-email">
                            </div>

                            <div class="form-group pt-3">
                                <button class="btn btn-purple rounded-pill btn-block"
                                    onclick="forgetPassword()">Send</button>
                            </div>
                            <div class="form-group text-right">
                                <p class="text-center pt-3">Back to <a href="{{ route('adv.login') }}"
                                        class="link">Login</a></p>
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
            jQuery('#forgetform').parsley();
        });

        var forgetRoute = "{{ route('passwords.sent') }}";

    </script>
@endpush
