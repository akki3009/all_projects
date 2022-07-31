@extends('beneficiary.app')

@section('content')
    <main>
        <div class="breadcrumb  p-0 mb-4 bg-white">
            <div class="container overflow-hidden">
                <h4 class="mb-0">Offers</h4>
                <div class="row">
                    <div class="col-md-7">
                        <nav aria-label="breadcrumb " class="breadcrumb-wrapper  mb-0 mr-2 ">
                            <ol class="breadcrumb mb-0 p-0 bg-white">
                                <li class="breadcrumb-item "><a href="{{route('my-ads')}}"
                                        class="text-yellow text-decoration-none">My Ads</a></li>
                                <li class="breadcrumb-item "><a href="{{route('my-ads')}}"
                                        class="text-yellow text-decoration-none">Standing Requests</a></li>
                                <li class="breadcrumb-item  active" aria-current="page">Offers</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex align-items-center justify-content-end overflow-hidden position-relative">
                            <p class="font-12 mb-0 mr-2 text-black">Sort by</p>
                            <div class="input-group-prepend d-block select-border overflow-hidden mb-0 overflow-hidden">
                                <select class="select2" data-placeholder="Choose one thing" data-allow-clear="1">
                                    <option>Lowest Offer</option>
                                    <option>Lowest Offer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- MultiStep Form -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card p-0 mb-3">

                            <div class="d-flex align-items-start p-3">
                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}" class="img-fluid rounded-circle" width="50px">
                                <div class="mx-2 flex-auto">
                                    <h4 class="font-14 mb-0">George Miller</h4>
                                    <p class="font-12 mb-0">Riyadh | Social Media Advertising</p>
                                </div>
                            </div>
                            <div class="card-footer mt-3 mb-0  pt-3 px-3">
                                <div class="row">
                                    <div class="col-md-5">
                                        <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                        <p class="font-16 text-primary mb-0">SAR 110</p>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="d-flex align-items-center justify-content-end">

                                            <a href="#"
                                                class=" btn btn-purple rounded-pill px-4 verify-otp-btn px-4 mr-2">ACCEPT</a>
                                            <a href="#"
                                                class=" btn btn-outline-primary px-4 border-radius-30 mr-2">REJECT</a>
                                            <a href="#" class=" btn btn-orange px-4 border-radius-30 mr-2">NEGOTIATE</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-0 mb-3">

                            <div class="d-flex align-items-start p-3">
                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}" class="img-fluid rounded-circle" width="50px">
                                <div class="mx-2 flex-auto">
                                    <h4 class="font-14 mb-0">George Miller</h4>
                                    <p class="font-12 mb-0">Riyadh | Social Media Advertising</p>
                                </div>
                            </div>

                            <div class="card-footer bg-white p-0 ">
                                <div class="d-flex align-items-center justify-content-between p-3">
                                    <div>
                                        <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                        <p class="font-16 text-primary mb-0">SAR 110</p>
                                    </div>
                                    <a href="javascript:;"
                                        class="text-primary text-decoration-none medium view-detail icon-rotate">View
                                        Negotiations <i class="fa fa-angle-down medium"></i></a>
                                </div>
                                <div class="bg-gray p-3 view-more-detail">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <p class="font-14 text-black mb-1 medium">Negotiated </p>
                                            <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                            <p class="font-16 text-orange mb-0">SAR 110 <span class="text-black font-14"> -
                                                    I hope this would be the good price for you..</span></p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card p-0 mb-3">

                            <div class="d-flex align-items-start p-3">
                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}" class="img-fluid rounded-circle" width="50px">
                                <div class="mx-2 flex-auto">
                                    <h4 class="font-14 mb-0">George Miller</h4>
                                    <p class="font-12 mb-0">Riyadh | Social Media Advertising</p>
                                </div>
                            </div>

                            <div class="card-footer bg-white p-0 ">
                                <div class="d-flex align-items-center justify-content-between p-3">
                                    <div>
                                        <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                        <p class="font-16 text-primary mb-0">SAR 110</p>
                                    </div>
                                    <a href="javascript:;"
                                        class="text-primary text-decoration-none medium view-detail icon-rotate"><span
                                            class="bg-orange text-white mr-1"
                                            style="min-width: 18px;width: 18px;height: 18px;font-size: 10px;line-height: 0;text-align: center;display: inline-block;border-radius: 100%;margin:0 auto;padding: 9px 0;">4</span>
                                        View Negotiations <i class="fa fa-angle-down medium"></i></a>
                                </div>
                                <div class="bg-gray p-3 view-more-detail">
                                    <div class="row align-items-end">
                                        <div class="col-md-6 ">
                                            <div class="mb-3">
                                                <p class="font-14 text-black mb-1 medium">Negotiated </p>
                                                <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                                <p class="font-16 text-orange mb-0">SAR 110 <span
                                                        class="text-black font-14"> - I hope this would be the good price
                                                        for you..</span></p>
                                            </div>
                                            <div class="mb-3">
                                                <p class="font-14 text-black mb-1">9 Mar, 2020 - 11:15AM</p>
                                                <p class="font-16 text-primary mb-0">SAR 110 <span
                                                        class="text-black font-14"> - I can do in this price, what you
                                                        think.</span></p>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-3 ">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <a href="#"
                                                    class=" btn btn-purple rounded-pill px-4 verify-otp-btn px-4 mr-2">ACCEPT</a>
                                                <a href="#" class=" btn btn-outline-primary px-4 border-radius-30 mr-2"
                                                    data-target="#rejection-modal" data-toggle="modal">REJECT</a>
                                                <a href="#" data-target="#nagotiate-modal" data-toggle="modal"
                                                    class=" btn btn-orange  border-radius-30 mr-2">NEGOTIATE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.MultiStep Form -->
            </div>
    </main>
    <div class="web-help">
        <a href="{{route('web-service')}}" class="position-relative d-inline-block text-decoration-none">
            <div class="d-flex align-items-center">
                <p class="mb-0 border-radius-8 web-tooltip">
                    How can I help you?
                </p>
                <img src="{{ frontAssets('beneficiary/images/logo-stickey.png') }}" class="img-fluid">
            </div>
        </a>
    </div>
    <!--jQuery -->
    <!-- <script type="text/javascript" src="js/jquery.js"></script>      -->
    <!--jQuery and Bootstrap Bundle (includes Popper)-->
    <div class="modal fade" id="save-as-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">

                        <div class="row align-items-center">

                            <div class="col-12 mb-3 mt-4">
                                <div class="text-center">
                                    <img src="{{ frontAssets('beneficiary/images/check-icon.png') }}" class="img-fluid">
                                    <h3 class="text-black mb-0 font24 mb-0 semi-bold">Ad Saved Successfully!</h3>
                                    <p class="text-gray font18 my-3">Your ad is saved successfully. edit or post your ad
                                        request at anytime from "Saved Ads" section in "My Ads".</p>
                                    <div class="d-flex align-items-center justify-content-between w-75 mx-auto">
                                        <a href="#" class="btn btn-outline-primary border-radius-30 w-100 mx-2">HOME</a>
                                        <a href="#" class="btn btn-outline-primary border-radius-30 w-100 mx-2">MY ADS</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="nagotiate-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header  pb-0">
                    <h2 class="font-24 flex-auto text-center mb-3 pl-4">Nagotiate</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ frontAssets('beneficiary/images/close-icon.png') }}">
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="px-4">
                        <div class="row align-items-center ">
                            <div class="col-12 mb-3 mt-4">
                                <div class="form-group">
                                    <label>Offer Amount</label>
                                    <input type="text" name="" class="form-control" placeholder="Enter Your Offer Amount">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" placeholder="Type Your Message Here..."
                                        rows="4"></textarea>
                                </div>

                                <div class="form-group text-center mt-4">
                                    <a href="#" data-dismiss="modal"
                                        class=" btn btn-purple rounded-pill px-4 verify-otp-btn px-4"
                                        data-target="#submit-contract-modal" data-toggle="modal">SUBMIT</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="rejection-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header  pb-0">
                    <h2 class="font-24 flex-auto text-center mb-3 pl-4">Reason of Rejection</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ frontAssets('beneficiary/images/close-icon.png') }}">
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="px-4">
                        <div class="row align-items-center ">
                            <div class="col-12 mb-3 mt-4">

                                <div class="form-group">
                                    <label>Reason of Rejection</label>
                                    <textarea class="form-control" placeholder="Type Here..." rows="4"></textarea>
                                </div>

                                <div class="form-group text-center mt-4">
                                    <a href="#" data-dismiss="modal"
                                        class=" btn btn-purple rounded-pill px-4 verify-otp-btn px-4"
                                        data-target="#submit-contract-modal" data-toggle="modal">SUBMIT</a>
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
    <link href="{{ frontAssets('beneficiary/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/css/bootstrap-slider.min.css') }}" />
    <link href="{{ frontAssets('beneficiary/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/css/jalendar.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/css/bootstrap-datepicker3.css') }}" type="text/css" />

@endpush
@push('js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="{{ frontAssets('beneficiary/js/jalendar.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ frontAssets('beneficiary/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ frontAssets('beneficiary/js/bootstrap-slider.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.js"></script>
    <script src="{{ frontAssets('beneficiary/select2/js/select2.min.js') }}"></script>
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

    </script>

@endpush
