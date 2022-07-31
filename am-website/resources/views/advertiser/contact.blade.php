@extends('advertiser.app')

@section('content')
    <main style="padding: 65px 0 0;">
        <section class="about overflow-hidden">
            <div class="">
                <div class="d-flex align-items-center justify-content-between overflow-hidden flex-wrap">
                    <div class="contact-inf">
                        <div class="card ">
                            <h4 class="font-20 text-black medium mb-4">Contact Information</h4>
                            <div class="d-flex align-items-start mb-4">
                                <img src="{{ frontAssets('advertiser/images/map-pin.png') }}" class="mr-3 mt-1">
                                <p class="text-black font-16 mb-0 light">Lorem Ipsum is simply dummy text, dummy text.</p>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <img src="{{ frontAssets('advertiser/images/phone.png') }}" class="mr-3">
                                <p class="text-black font-16 mb-0 light">+966 000 000 000</p>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <img src="{{ frontAssets('advertiser/images/mail.png') }}" class="mr-3">
                                <p class="text-black font-16 mb-0 light ">support@link.com</p>
                            </div>
                            <p class="font-16 light mt-5 text-black medium mb-2">Join Us</p>
                            <div class="text-center d-flex align-items-start mb-4">
                                <span class="mx-2">
                                    <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                        class="img-fluid">
                                </span>
                                <span class="mx-2">
                                    <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}" class="img-fluid">
                                </span>
                                <span class="mx-2">
                                    <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                        class="img-fluid">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form py-4">
                        <h4 class="font-40 text-black medium mb-3">Get In Touch!</h4>
                        <div class="input-group-prepend d-block select-border overflow-hidden mb-3">
                            <label class="control-label d-block">Reason</label>
                            <select class="select2" data-placeholder="Choose one thing" data-allow-clear="1">
                                <option>Select</option>
                                <option>Select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label d-block">Description</label>
                            <textarea class="form-control" placeholder="Enter Text ..." rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-primary w-100">SUBMIT</a>
                        </div>
                        <div class="form-group">
                            <a href="#"
                                class="btn btn-outline-success border-radius-30 d-flex align-items-center justify-content-center w-100"><img
                                    src="{{ frontAssets('advertiser/images/whatsapp.png') }}" class="mr-2"> +966
                                343-487-4987</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
@push('css')
    <link href="{{ frontAssets('advertiser/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/bootstrap-slider.min.css') }}" />
    <link href="{{ frontAssets('advertiser/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/jalendar.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/bootstrap-datepicker3.css') }}" type="text/css" />

@endpush
@push('js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="{{ frontAssets('advertiser/js/jalendar.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ frontAssets('advertiser/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ frontAssets('advertiser/js/bootstrap-slider.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.js"></script>
    <script src="{{ frontAssets('advertiser/select2/js/select2.min.js') }}"></script>
    <script type="text/javascript">
        $('.select2').select2({
            theme: 'bootstrap4',
        });

    </script>
@endpush
