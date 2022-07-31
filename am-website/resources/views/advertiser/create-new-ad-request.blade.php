@extends('advertiser.app')

@section('content')
    <main>
        <div class="breadcrumb  p-0 mb-4 bg-white">
            <div class="container">
                <h4 class="mb-0">Create New Ad Request</h4>
                <nav aria-label="breadcrumb " class="breadcrumb-wrapper  mb-0 mr-2 ">
                    <ol class="breadcrumb mb-0 p-0 bg-white">
                        <li class="breadcrumb-item "><a href="{{ route('adv.dashboard') }}"
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
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar" class="mb-5">
                                <li class="active"><span>Campaign Subject & <br /> Request Type</span></li>
                                <li><span>Target</span></li>
                                <li><span>Attachments & <br /> Presentation Preparation</span></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="row mb-5">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>{{ trans('labels.AD.NEW_AD_HEADLINE') }}</label>
                                            <input type="text" class="form-control" id="v_headline" name="v_headline"
                                                placeholder="Enter Ad Headline" required
                                                data-parsley-errors-container="#err-headline">
                                        </div>
                                        <div id="err-headline" class="error-p"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>{{ trans('labels.AD.NEW_AD_DESCRIPTION') }}</label>
                                            <textarea class="form-control py-2" name="v_description" id="v_description"
                                                placeholder="Write Description here..." rows="5" required
                                                data-parsley-errors-container="#err-description"></textarea>
                                        </div>
                                        <div id="err-description" class="error-p"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label>{{ trans('labels.AD.NEW_AD_DATE') }}</label>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group date position-relative" data-provide="datepicker">
                                                    <input type="text" class="form-control" name="v_start_date"
                                                        id="v_start_date" placeholder="Start Date" required
                                                        data-parsley-errors-container="#err-sdate">
                                                    <div class="input-group-addon ">
                                                        <img
                                                            src="{{ frontAssets('advertiser/images/calendar-icon.png') }}">
                                                    </div>
                                                    <div id="err-sdate" class="error-p"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group date position-relative" data-provide="datepicker">
                                                    <input type="text" class="form-control" name="v_end_date"
                                                        id="v_end_date" placeholder="End Date" required
                                                        data-parsley-errors-container="#err-edate">
                                                    <div class="input-group-addon ">
                                                        <img
                                                            src="{{ frontAssets('advertiser/images/calendar-icon.png') }}">
                                                    </div>
                                                </div>
                                                <div id="err-edate" class="error-p"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label class="mb-4">{{ trans('labels.AD.NEW_AD_RANGE') }}</label>
                                                <input id="range" type="text" name="v_range" required />
                                                {{-- <input id="range" type="hidden" name="min">
                                                <input id="range" type="hidden" name="max"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next"
                                    class="next action-button btn medium btn-primary px-5 float-right mt-4" value="NEXT">
                                <input type="button" name="saveforlater"
                                    class=" btn btn-outline-primary medium px-4 float-right mr-3 mt-4 border-radius-30"
                                    value="SAVE FOR LATER" data-target="#save-as-modal" data-toggle="modal">

                            </fieldset>
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label
                                                class="control-label d-block">{{ trans('labels.AD.NEW_AD_PLATFORM') }}</label>
                                            <div class="wrap">
                                                <div class="form" id="foo_form">
                                                    <select class="js-select2" name="v_platform" id="v_platform" multiple
                                                        required>
                                                        <option value="Twitter" data-badge="">Twitter</option>
                                                        <option value="Facebook" data-badge="">Facebook</option>
                                                        <option value="Instagram" data-badge="">Instagram</option>
                                                    </select>
                                                </div>
                                            </div><!-- .wrap -->
                                        </div>
                                        <div class="input-group-prepend d-block select-border overflow-hidden mb-3">
                                            <label
                                                class="control-label d-block">{{ trans('labels.AD.NEW_AD_GENDER') }}</label>
                                            <select class="select2" name="v_gender" id="v_gender"
                                                data-placeholder="Choose one thing" data-allow-clear="1" required>
                                                <option value="male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label class="mb-4">{{ trans('labels.AD.NEW_AD_AVERAGE') }}</label>
                                            <div>
                                                <input id="range2" type="text" name="v_average_range" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>{{ trans('labels.AD.NEW_AD_COUNTRY') }}</label>
                                            <input type="text" id="v_country" class="form-control" name="v_country"
                                                placeholder="Saudi Arabia" required>
                                        </div>
                                        <div class="input-group-prepend d-block select-border overflow-hidden">
                                            <label
                                                class="control-label d-block">{{ trans('labels.AD.NEW_AD_CITY') }}</label>
                                            <select class="select2" name="v_city" id="v_city"
                                                data-placeholder="Choose one thing" data-allow-clear="1" required>
                                                <option>Dammam</option>
                                                <option>Abha</option>
                                                <option>Jalajil</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next"
                                    class="text-uppercase  next action-button  btn btn-primary  float-right px-4"
                                    value="Next" />
                                <input type="button" name="previous"
                                    class="text-uppercase  previous action-button-previous btn btn-outline-primary border-radius-30 float-right mr-3"
                                    value="Previous" />
                                <input type="button" name="saveforlater"
                                    class="text-uppercase btn btn-outline-primary border-radius-30  float-right mr-3"
                                    value="save for later " data-target="#save-as-modal" data-toggle="modal" />
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type="file" name="v_upload" id="imageUpload" required />
                                            <label for="imageUpload"><img
                                                    src="{{ frontAssets('advertiser/images/img-upload.png') }}"
                                                    class="img-fluid"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url({{ frontAssets('advertiser/images/img-upload.png') }});">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label d-block">Select Ad Presentation Preferences</label>
                                    <div class="ad-wrapper d-flex align-items-center flex-wrap">
                                        <img src="{{ frontAssets('advertiser/images/s1.png') }}" class="img-fluid mr-3">
                                        <img src="{{ frontAssets('advertiser/images/s2.png') }}" class="img-fluid mr-3">
                                        <img src="{{ frontAssets('advertiser/images/s3.png') }}" class="img-fluid mr-3">
                                        <img src="{{ frontAssets('advertiser/images/s4.png') }}" class="img-fluid mr-3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label d-block">{{ trans('labels.AD.NEW_AD_SERVICES') }}</label>
                                    <div class="d-flex align-items-center" required>
                                        <div class="custom-control custom-checkbox mr-4">
                                            <input type="checkbox" class="custom-control-input" id="customCheck"
                                                name="v_services" value="Logistics">
                                            <label class="custom-control-label"
                                                for="customCheck">{{ trans('labels.AD.NEW_AD_LOGISTICS') }} <img
                                                    src="{{ frontAssets('advertiser/images/info.png') }}"></label>
                                        </div>
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2"
                                                name="v_services" value="Media House">
                                            <label class="custom-control-label"
                                                for="customCheck2">{{ trans('labels.AD.NEW_AD_MEDIAHOUSE') }} <img
                                                    src="{{ frontAssets('advertiser/images/info.png') }}"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('labels.AD.NEW_AD_REGISTER_AS') }}</label>
                                    <div class="clear"></div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="v_register_as" checked="checked" value="Public"
                                            class="custom-control-input" id="customRadio1">

                                        <label class="custom-control-label"
                                            for="customRadio1">{{ trans('labels.AD.NEW_AD_PUBLIC') }} <img
                                                src="{{ frontAssets('advertiser/images/info.png') }}"></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="v_register_as" value="Private"
                                            class="custom-control-input" id="customRadio2">

                                        <label class="custom-control-label"
                                            for="customRadio2">{{ trans('labels.AD.NEW_AD_PRIVATE') }} <img
                                                src="{{ frontAssets('advertiser/images/info.png') }}"></label>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="px-4 text-uppercase float-right  action-button px-3 btn btn-primary"
                                    onclick="postAd()" data-toggle="modal" data-target="#ad-request-modal"> POST </button>
                                {{-- <a href="#" class="px-4 text-uppercase float-right  action-button px-3 btn btn-primary"
                                    data-toggle="modal" data-target="#ad-request-modal"> POST </a> --}}
                                <input type="button" name="previous"
                                    class="px-3 text-uppercase previous action-button-previous btn btn-outline-primary border-radius-30 float-right mr-3 "
                                    value="Previous" />
                                <a href="#"
                                    class="px-3 text-uppercase btn btn-outline-primary border-radius-30 float-right mr-3"
                                    data-target="#save-as-modal" data-toggle="modal">save for later</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.MultiStep Form -->
        </div>
    </main>
    <div class="web-help">
        <a href="{{ route('adv.web-service') }}" class="position-relative d-inline-block text-decoration-none">
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
    <div class="modal fade" id="save-as-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">

                        <div class="row align-items-center">

                            <div class="col-12 mb-3 mt-4">
                                <div class="text-center">
                                    <img src="{{ frontAssets('advertiser/images/check-icon.png') }}" class="img-fluid">
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
                                    <img src="{{ frontAssets('advertiser/images/check-icon.png') }}   "
                                        class="img-fluid">
                                    <h3 class="text-black mb-0 font24 mb-0 semi-bold">Ad Request Posted <br /> Successfully!
                                    </h3>
                                    <p class="text-gray font18 my-3">Start Inviting advertisers for your private ad request
                                        to <br />receive offers from them.</p>
                                    <div class="d-flex align-items-center justify-content-between w-75 mx-auto">
                                        <a href="{{ route('adv.dashboard') }}"
                                            class="btn btn-outline-primary border-radius-30 w-100 mx-2">HOME</a>
                                        <a href="{{ route('adv.my-ads') }}"
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
    <link href="{{ frontAssets('advertiser/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/bootstrap-slider.min.css') }}" />
    <link href="{{ frontAssets('advertiser/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/jalendar.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/bootstrap-datepicker3.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ frontAssets('advertiser/parsley/parsley.css') }}">

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
    <script src="{{ frontAssets('advertiser/parsley/parsley.min.js') }}"></script>
    <script src="{{ frontAssets('custom.js') }}"></script>

@endpush
@push('jsfun')
    <script type="text/javascript">
        $('.select2').select2({
            theme: 'bootstrap4',
        });
        var newAdRoute = "{{ route('addRequest') }}";

    </script>
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

        // $(function() {
        //     $('.multiselect-ui').multiselect({
        //         includeSelectAllOption: true
        //     });
        // });
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
