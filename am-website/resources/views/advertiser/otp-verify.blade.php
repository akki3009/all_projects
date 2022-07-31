@extends('advertiser.app')

@section('content')
    <main>
        <section class="login-register">
            <div class="container-xl">
                <h1 class="title">Enter OTP</h1>
                <p class="text-center">Enter 6 digit OTP received on your mobile number +966-1234560896</p>
                <p class="text-center mb-5"><a href="#" class="link" data-toggle="modal" data-target="#change-number">Change
                        Mobile Number</a></p>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-xl-5">

                        <form action="">
                            <div class="form-group relative">
                                <i class="icon otp-icon"></i>
                                <input class="form-control form-control-lg" type="text" placeholder="Enter OTP" name="otp">
                            </div>

                            <div class="form-group pt-3">
                                <button type="submit" class="btn btn-purple rounded-pill btn-block">verify</button>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-8">
                                        <p class="text-left pt-3">Didn't received OTP? <a href="#" class="link">Resend</a>
                                        </p>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-right pt-3"><span class="medium purple">00:59:32</span></p>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="modal fade" id="change-number" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Mobile Number</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form class="">
                        <div class="form-group relative py-4">
                            <label>Mobile Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend pt-0 pb-0 pr-0">
                                    <span class="input-group-text  pt-0 pb-0 pr-0"><i
                                            class="icon phone-icon relative"></i></span>
                                </div>
                                <div class="input-group-prepend">
                                    <select data-placeholder="Choose one thing" data-allow-clear="1">
                                        <option>+966</option>
                                        <option>+1</option>
                                        <option>+2</option>
                                        <option>+3</option>
                                    </select>
                                </div>
                                <input class="form-control pl-3" type="text" placeholder="Contact Number"
                                    value="123 456 7890" name="number">
                            </div>
                        </div>
                        <button type="button" class="btn btn-purple-outline rounded-pill btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link href="{{ frontAssets('advertiser/select2/css/select2.min.css') }}" rel="stylesheet" />

@endpush
@push('js')
    <script src="{{ frontAssets('advertiser/select2/js/select2.min.js') }}"></script>
    <script>
        $('select').select2({
            theme: 'bootstrap4',
        });

    </script>
@endpush
