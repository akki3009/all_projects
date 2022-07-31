@extends('beneficiary.app')

@section('content')
    <main>
        <div class="breadcrumb  p-0 mb-4 bg-white">
            <div class="container">
                <h4 class="mb-0">Create New Ad Request</h4>
                <nav aria-label="breadcrumb " class="breadcrumb-wrapper  mb-0 mr-2 ">
                    <ol class="breadcrumb mb-0 p-0 bg-white">
                        <li class="breadcrumb-item "><a href="{{route('home')}}"
                                class="text-yellow text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item  active" aria-current="page">Create new ad request</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container">
            <!-- MultiStep Form -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card p-3">
                        <div class="row pt-2">
                            <div class="col-lg-12">
                                <p class="mb-3"><span
                                        class="text-gray font-18 bg-gray border-radius-30 font-14 badge-number mr-1">1</span>
                                    Campaign approach</p>
                                <div class="input-group-prepend d-block select-border overflow-hidden mb-3">
                                    <label class="control-label d-block">Select your campaign approach</label>
                                    <select class="select2" data-placeholder="Choose one thing" data-allow-clear="1">
                                        <option>Offer</option>
                                        <option>Offer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <p class="mb-3"><span
                                        class="text-gray font-18 bg-gray border-radius-30 font-14 badge-number mr-1">2</span>
                                    Campaign type</p>
                                <div class="input-group-prepend d-block select-border overflow-hidden mb-3">
                                    <label class="control-label d-block">Select your campaign type</label>
                                    <select class="select2" data-placeholder="Choose one thing" data-allow-clear="1">
                                        <option>Launch Product</option>
                                        <option>Launch Product</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <p class="mb-3"><span
                                        class="text-gray font-18 bg-gray border-radius-30 font-14 badge-number mr-1">3</span>
                                    Campaign Subject & Request Type</p>
                                <div class="input-group-prepend d-block select-border overflow-hidden mb-3">
                                    <label class="control-label d-block">Headline</label>
                                    <input type="text" class="form-control mb-3" placeholder="Headline goes here ">
                                    <label class="control-label d-block">Description</label>
                                    <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label d-block">Select date range you would like to have
                                            advertise within</label>
                                        <div class="row mb-3">
                                            <div class="col-lg-6">
                                                <div class="input-group date position-relative" data-provide="datepicker">
                                                    <input type="text" class="form-control" placeholder="Start Date">
                                                    <div class="input-group-addon ">
                                                        <img src="{{ frontAssets('beneficiary/images/calendar-icon.png') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group date position-relative" data-provide="datepicker">
                                                    <input type="text" class="form-control" placeholder="End Date">
                                                    <div class="input-group-addon ">
                                                        <img src="{{ frontAssets('beneficiary/images/calendar-icon.png') }}images/calendar-icon.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label d-block">Budget Range</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="" class="form-control" placeholder="SAR 100">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="" class="form-control" placeholder="SAR 200">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Select Ad Request Type</label>
                                    <div class="clear"></div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="types" checked="checked" value="1"
                                            class="custom-control-input" id="customRadio1">

                                        <label class="custom-control-label" for="customRadio1">Public</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="types" value="2" class="custom-control-input"
                                            id="customRadio2">

                                        <label class="custom-control-label" for="customRadio2">Private</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <p class="mb-3"><span
                                        class="text-gray font-18 bg-gray border-radius-30 font-14 badge-number mr-1">4</span>
                                    Target</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label d-block">Platforms</label>
                                            <div class="wrap">
                                                <div class="form" id="foo_form">
                                                    <select class="js-select2" multiple="multiple">
                                                        <option value="O1" data-badge="">Facebook</option>
                                                        <option value="O2" data-badge="">Twitter</option>
                                                        <option value="O3" data-badge="">Instagram</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label d-block">Gender</label>
                                            <div class="wrap">
                                                <div class="form" id="foo_form">
                                                    <select class="js-select2" multiple="multiple">
                                                        <option value="O1" data-badge="">Male</option>
                                                        <option value="O2" data-badge="">Female</option>
                                                        <option value="O3" data-badge="">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <div class="input-group-prepend d-block select-border overflow-hidden mb-3">
                                                <label class="control-label d-block">Country</label>
                                                <select class="select2" data-placeholder="Choose one thing"
                                                    data-allow-clear="1">
                                                    <option>Saudi Arabia</option>
                                                    <option>Saudi Arabia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="input-group-prepend d-block select-border overflow-hidden mb-3">
                                                <label class="control-label d-block">City</label>
                                                <select class="select2" data-placeholder="Choose one thing"
                                                    data-allow-clear="1">
                                                    <option>Riyadh</option>
                                                    <option>Riyadh</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="mb-4">Age Range</label>
                                    <input id="range" type="text" />
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="text-gray font-10">10</span>
                                        <span class="text-gray font-10">70</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <p class="mb-3"><span
                                        class="text-gray font-18 bg-gray border-radius-30 font-14 badge-number mr-1">5</span>
                                    Attachments & Presentation Preparation</p>
                                <p class="font-14 text-black mb-0">Upload Attachment</p>
                                <p class="font-12 text-gray mb-3">Upload Attachment</p>
                                <div class="img-group d-inline-flex">
                                    <div class="avatar-upload mr-3 d-inline-block">
                                        <div class="avatar-edit">
                                            <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
                                            <label for="imageUpload"><img src="{{ frontAssets('beneficiary/images/img-upload.png') }}"
                                                    class="img-fluid"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url({{ frontAssets('beneficiary/images/img-upload.png') }}images/img-upload.png);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative d-inline-block ">
                                        <a href="#" class="mr-2 position-relative d-inline-block">
                                            <img src="{{ frontAssets('beneficiary/images/a1.png') }}images/a1.png" class="img-fluid">
                                            <p class="mb-0 clear-img"><img src="{{ frontAssets('beneficiary/images/close.png') }}"></p>
                                        </a>
                                        <a href="#" class="mr-2 position-relative d-inline-block">
                                            <img src="{{ frontAssets('beneficiary/images/a2.png') }}" class="img-fluid">
                                            <p class="mb-0 clear-img"><img src="{{ frontAssets('beneficiary/images/close.png') }}"></p>
                                        </a>
                                        <a href="#" class="mr-2 position-relative d-inline-block">
                                            <img src="{{ frontAssets('beneficiary/images/a3.png') }}" class="img-fluid">
                                            <p class="mb-0 clear-img"><img src="{{ frontAssets('beneficiary/images/close.png') }}"></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="mb-3 d-block">Select Ad Presentation Preferences</label>
                                    <div class="btn-group btn-group-toggle select-ad" data-toggle="buttons">
                                        <label class="btn active p-0 mr-3">
                                            <input type="radio" name="options" id="option1" checked> <img
                                                src="{{ frontAssets('beneficiary/images/s1.png') }}">
                                        </label>
                                        <label class="btn p-0 mr-3">
                                            <input type="radio" name="options" id="option2"> <img src="{{ frontAssets('beneficiary/images/s2.png') }}">
                                        </label>
                                        <label class="btn p-0 mr-3">
                                            <input type="radio" name="options" id="option3"> <img src="{{ frontAssets('beneficiary/images/s3.png') }}">
                                        </label>
                                        <label class="btn p-0 mr-3">
                                            <input type="radio" name="options" id="option4"> <img src="{{ frontAssets('beneficiary/images/s4.png') }}">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label d-block">Add Services</label>
                                    <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox mr-4">
                                            <input type="checkbox" class="custom-control-input" id="customCheck"
                                                name="example1">
                                            <label class="custom-control-label" for="customCheck">Logistics</label>
                                        </div>
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2"
                                                name="example1">
                                            <label class="custom-control-label" for="customCheck2">Media House</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right mb-3">
                                    <a href="#" class="btn btn-primary px-4"> Update</a>
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
    <div class="modal fade" id="ad-request-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">

                        <div class="row align-items-center">

                            <div class="col-12 mb-3 mt-4">
                                <div class="text-center">
                                    <img src="{{ frontAssets('beneficiary/images/check-icon.png') }}   "
                                        class="img-fluid">
                                    <h3 class="text-black mb-0 font24 mb-0 semi-bold">Ad Request Posted <br /> Successfully!
                                    </h3>
                                    <p class="text-gray font18 my-3">Start Inviting advertisers for your private ad request
                                        to <br />receive offers from them.</p>
                                    <div class="d-flex align-items-center justify-content-between w-75 mx-auto">
                                        <a href="{{ route('dashboard') }}"
                                            class="btn btn-outline-primary border-radius-30 w-100 mx-2">HOME</a>
                                        <a href="{{ route('my-ads') }}"
                                            class="btn btn-outline-primary border-radius-30 w-100 mx-2">MY ADS</a>
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
