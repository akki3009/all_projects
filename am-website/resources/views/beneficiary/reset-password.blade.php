@extends('beneficiary.app')

@section('content')
    <main>
        <section class="login-register">
            <div class="container-xl">
                <h1 class="title">Reset Password</h1>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-xl-5">

                        <form action="" method="post" enctype="multipart/form-data" id="resetForm">
                            @csrf
                            <input type="hidden" name="v_reset_code" id="v_reset_code" value="{{$token}}">
                            <div class="form-group relative" id="show_hide_password_1">
                                <a href="#"><img src="{{ frontAssets('beneficiary/images/eye.svg') }}"
                                        width="15px" /></a>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-right-0"><i
                                                class="icon lock-icon relative"></i></span>
                                    </div>
                                    <input class="form-control pl-2 border-left-0" type="password"
                                        placeholder="{{trans('labels.v_password')}}" name="password" id="password" required
                                        data-parsley-errors-container="#err-apassword">
                                </div>
                                <div id="err-apassword" class="error-p"></div>
                            </div>
                            <div class="form-group relative" id="show_hide_password_2">
                                <a href="#"><img src="{{ frontAssets('beneficiary/images/eye.svg') }}"
                                        width="15px" /></a>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-right-0"><i
                                                class="icon lock-icon relative"></i></span>
                                    </div>
                                    <input class="form-control pl-2 border-left-0" type="password"
                                        placeholder="{{trans('labels.v_confirm_password')}}" id="password_confirmation" name="password_confirmation" required
                                        data-parsley-errors-container="#err-password" data-parsley-equalto="#password">
                                </div>
                                <div id="err-password" class="error-p"></div>
                            </div>

                            <div class="form-group pt-3">
                                <button class="btn btn-purple rounded-pill btn-block" onclick="resetPassword()">Send</button>
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
    <link rel="stylesheet" href="{{adminAssets('plugins/toastr/toastr.min.css')}}">
@endpush
@push('js')
    <script src="{{ frontAssets('beneficiary/parsley/parsley.min.js') }}"></script>
    <script src="{{adminAssets('plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{ frontAssets('custom.js') }}"></script>
@endpush
@push('jsfun')
    <script>
        jQuery(document).ready(function() {
            jQuery('#resetForm').parsley();
        });

        var resetRoute = "{{ route('passwords.reset') }}";
        var loginRedirect = "{{route('login')}}";

    </script>
@endpush