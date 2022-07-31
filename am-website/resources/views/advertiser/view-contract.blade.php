@extends('advertiser.app')

@section('content')
    <main>
        <div class="breadcrumb  p-0 mb-4 bg-white">
            <div class="container">
                <h4 class="mb-0">View Contract</h4>
                <nav aria-label="breadcrumb " class="breadcrumb-wrapper  mb-0 mr-2 ">
                    <ol class="breadcrumb mb-0 p-0 bg-white">
                        <li class="breadcrumb-item "><a href="{{ route('adv.my-ads') }}"
                                class="text-yellow text-decoration-none">My
                                Ads</a></li>
                        <li class="breadcrumb-item "><a
                                href="#"
                                class="text-yellow text-decoration-none">Standing Requests</a></li>
                        <li class="breadcrumb-item  active" aria-current="page">View Contract</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container">
            <!-- MultiStep Form -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card p-0 overflow-hidden mb-3">
                        <div class="bg-gray p-3 text-center">
                            <span class="font-18 text-black">Service Contract</span>
                        </div>
                        <div class="card-header p-3 bg-white ">

                            <div class="d-flex align-items-start justify-content-between ">
                                <div class="mr-2">
                                    <span class="font-12 text-gray">1 Mar, 2020 - 10:00AM</span>
                                    <p class="font-16 medium text-black mb-0">Headline goes here lorem ipsum dummy text</p>
                                </div>
                                <div class=" d-flex align-items-center ">

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card-ad-img">
                                        <img src="{{ frontAssets('advertiser/images/s1.png') }}" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p class="mb-2 font-14 text-black">Duration: 09 Mar, 2020 - 10 Mar, 2020</p>
                                    <p class="mb-2 font-14 text-black">Budget: SAR 100 - SAR 150</p>
                                    <p class="mb-2 font-14 text-black">Ad Type: Public</p>
                                    <p class="mb-2 font-14 text-black">City: Riyadh</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-2 font-14 text-black">Category: Services</p>
                                    <p class="mb-2 font-14 text-black">Added Services: Logistics</p>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white p-0">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <div>
                                    <div class="text-center d-flex align-items-start ">
                                        <span class="mx-2">
                                            <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                                class="img-fluid">
                                        </span>
                                        <span class="mx-2">
                                            <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"
                                                class="img-fluid">
                                        </span>
                                        <span class="mx-2">
                                            <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                                class="img-fluid">
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class=" p-3 ">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <p class="mb-2 font-14 medium text-black mb-0">Descriptions</p>
                                        <p class="font-13 text-black">Lorem ipsum, or lipsum as it is sometimes known, is
                                            dummy text used in laying out print, graphic or web designs. The passage is
                                            attributed to an unknown typesetter in the 15th century who is thought to have
                                            scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type
                                            specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="form-group mb-0">
                                    <label class="font-12 light">Content</label>
                                    <textarea class="form-control" rows="4" placeholder="Enter your lines..."></textarea>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-md-2 offset-md-10 text-center">
                                    <div class="signature border"></div>
                                    <span class="font-14">Beneficiary Signature</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-primary px-4 verify-btn" data-target="#otp-modal"
                            data-toggle="modal">VERIFY OTP</a>
                        <a href="#" class="btn btn-primary px-4 sign-contract-btn d-none" data-target="#sign-contract-modal"
                            data-toggle="modal">SIGN CONTRACT</a>
                        <a href="{{route('adv.my-ads')}}" class="btn btn-primary px-4 submit-contract-btn d-none">SUBMIT</a>
                    </div>
                </div>
            </div>
            <!-- /.MultiStep Form -->
        </div>
    </main>
    <div class="web-help">
        <a href="{{route('adv.web-service')}}" class="position-relative d-inline-block text-decoration-none">
            <div class="d-flex align-items-center">
                <p class="mb-0 border-radius-8 web-tooltip">
                    How can I help you?
                </p>
                <img src="{{ frontAssets('advertiser/images/logo-stickey.png') }}" class="img-fluid">
            </div>
        </a>
    </div>
    <!--jQuery -->
    <!-- <script type="text/javascript" src="js/jquery.js"></script>      -->
    <!--jQuery and Bootstrap Bundle (includes Popper)-->
    <div class="modal fade" id="otp-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header  pb-0">
                    <h2 class="font-24 flex-auto text-center mb-3 pl-4">Verify OTP</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ frontAssets('advertiser/images/close-icon.png') }}">
                    </button>
                </div>
                <div class="modal-body ">

                    <div class="px-4">

                        <div class="row align-items-center login-register">

                            <div class="col-12 mb-3 mt-4">
                                <div class="">

                                    <p class="text-center mb-4">Enter 6 digit OTP received on your mobile <br />number
                                        +966-1234560896</p>

                                    <div class="row justify-content-center">
                                        <div class="col-md-12">

                                            <form action="">
                                                <div class="form-group relative mb-0">
                                                    <i class="icon otp-icon"></i>
                                                    <input class="form-control form-control-lg" type="text"
                                                        placeholder="Enter OTP" name="otp">
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <p class="text-left pt-3">Didn't received OTP? <a href="#"
                                                                    class="link">Resend</a></p>
                                                        </div>
                                                        <div class="col-4">
                                                            <p class="text-right pt-3"><span
                                                                    class="medium purple">00:59:32</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group text-center">
                                                    <a href="#" data-dismiss="modal"
                                                        class="btn btn-purple rounded-pill px-4 verify-otp-btn px-4">VERIFY</a>

                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="sign-contract-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header  pb-0">
                    <h2 class="font-24 flex-auto text-center mb-3 pl-4">Your Signature</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ frontAssets('advertiser/images/close-icon.png') }}">
                    </button>
                </div>
                <div class="modal-body ">

                    <div class="px-4">

                        <div class="row align-items-center login-register">

                            <div class="col-12 mb-3 mt-4">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">

                                        <form action="">

                                            <div class="text-center">
                                                <img src="{{ frontAssets('advertiser/images/sign.png') }}"
                                                    class="img-fluid">
                                            </div>
                                            <div class="form-group text-center">
                                                <a href="#" data-dismiss="modal"
                                                    class="btn btn-outline-danger rounded-pill px-4 verify-otp-btn d-inline-flex align-items-center mr-2">REMOVE</a>
                                                <a href="#" data-dismiss="modal"
                                                    class=" btn btn-purple rounded-pill px-4 verify-otp-btn px-4"
                                                    data-target="#submit-contract-modal" data-toggle="modal">DONE</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="submit-contract-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header  pb-0">
                    <h2 class="font-24 flex-auto text-center mb-3 pl-4">Your Signature</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ frontAssets('advertiser/images/close-icon.png') }}">
                    </button>
                </div>
                <div class="modal-body pt-0">

                    <div class="px-4">

                        <div class="row align-items-center login-register">

                            <div class="col-12 mb-3">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <form action="">
                                            <div class="text-center">
                                                <img src="{{ frontAssets('advertiser/images/delete-ad.png') }}"
                                                    class="img-fluid w-50 mx-auto">
                                            </div>
                                            <p class="font-18 medium text-center text-black mb-0">Are you sure you want to
                                                delete this ad?</p>
                                            <p class="font-12 medium text-center">On deleting your ad will be no longer
                                                visible to advertisers and will be deleted permanently.</p>
                                            <div class="form-group text-center">
                                                <a href="#" data-dismiss="modal"
                                                    class="btn btn-outline-primary rounded-pill px-4 verify-otp-btn d-inline-flex align-items-center mr-2">CANCEL</a>
                                                <a href="#" data-dismiss="modal"
                                                    class="submit-contract btn btn-purple rounded-pill px-4 verify-otp-btn px-4">DELETE</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
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
@push('jsfun')

    <script type="text/javascript">
        $('#yourId').jalendar({
            color: '#577e9a',
            color2: '#57c8bf',
            lang: 'EN'
        });
        $(".calendar-icon").click(function() {
            $("#yourcal").toggleClass("d-none");
        });

    </script>
    <script>
        $(document).ready(function() {
            // Range Slider
            var slider = new Slider("#range", {
                min: 0,
                max: 100,
                value: [0, 50],
                tooltip_split: true,
                range: true,
                // tooltip: 'always'
            });
            var slider = new Slider("#range2", {
                min: 0,
                max: 150,
                value: [10, 300],
                tooltip_split: true,
                range: true,
                // tooltip: 'always'
            });
        });

        $(function() {
            $('.multiselect-ui').multiselect({
                includeSelectAllOption: true
            });
        });
        $('.select2').select2({
            theme: 'bootstrap4',
        });

        /*=============multi select==========*/

        $(".js-select2").select2({
            closeOnSelect: false,
            placeholder: "Placeholder",
            allowHtml: true,
            allowClear: true,
            tags: true // создает новые опции на лету
        });

        $('.icons_select2').select2({
            width: "100%",
            templateSelection: iformat,
            templateResult: iformat,
            allowHtml: true,
            placeholder: "Placeholder",
            dropdownParent: $('.select-icon'), //обавили класс
            allowClear: true,
            multiple: false
        });


        function iformat(icon, badge, ) {
            var originalOption = icon.element;
            var originalOptionBadge = $(originalOption).data('badge');

            return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text +
                '<span class="badge">' + originalOptionBadge + '</span></span>');
        }

    </script>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });

        $(".filter-box").click(function() {
            $(this).toggleClass("active");
            $(".filter-wrapper").toggleClass("d-none");
        });

    </script>
@endpush
