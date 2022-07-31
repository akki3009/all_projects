@extends('advertiser.app')

@section('content')
    <main>
        <div class="breadcrumb  p-0 mb-4 bg-white">
            <!--  <div class="container">
            <h4 class="mb-0 text-center">Privacy Policy</h4>
            <div class="d-flex align-items-end justify-content-between flex-wrap">
              <nav aria-label="breadcrumb " class="breadcrumb-wrapper  mb-0 mr-2 ">
                <ol class="breadcrumb mb-0 p-0 bg-white">
                  <li class="breadcrumb-item"><a href="./my-ads.html" class="text-yellow text-decoration-none">My Ads</a></li>
                  <li class="breadcrumb-item"><a href="./completed-ads.html" class="text-yellow text-decoration-none">Standing Requests</a></li>
                  <li class="breadcrumb-item  active" aria-current="page">Invites</li>
                </ol>
              </nav>
              <a href="#" class="btn btn-primary px-4"><i class="fa fa-plus mr-1"></i> INVITE NEW</a>
            </div>
          </div> -->
        </div>
        <div class="container">
            <!-- MultiStep Form -->
            <div class="row">
                <div class="col-md-12 content-pages">
                    <h4 class="title text-center font-40 mb-5">FAQs</h4>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div id="accordion" class="accordion p-2">
                                <div class="mb-0 border-0">
                                    <div class="box-shadow border-radius-12 mb-3 px-0">
                                        <div class="card-header px-3 collapsed py-3" data-toggle="collapse"
                                            href="#collapseOne" aria-expanded="false">
                                            <a class="card-title text-black semi-bold font16 text-decoration-none">
                                                1. Lorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea takimata
                                                sanctus est is the lorem?
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="card-body px-3 collapse bg-gray"
                                            data-parent="#accordion" style="">
                                            <p class="font14 ">Lorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea
                                                takimata sanctus est is the lorem.Lorem ipsum dolor sit amet,Stet clita kasd
                                                gubergren, no sea takimata sanctus est is the loremLorem ipsum dolor sit
                                                amet,Stet clita kasd gubergren, no sea takimata sanctus est is the
                                                loremLorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea takimata
                                                sanctus est is the Lorem ipsum.

                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-shadow border-radius-12 mb-3 px-0">
                                        <div class="card-header px-3 collapsed py-3" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
                                            <a class="card-title text-black semi-bold font16 text-decoration-none">
                                                2. Lorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea?
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="card-body px-3 collapse bg-gray"
                                            data-parent="#accordion">
                                            <p class="font14 ">Lorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea
                                                takimata sanctus est is the lorem.Lorem ipsum dolor sit amet,Stet clita kasd
                                                gubergren, no sea takimata sanctus est is the loremLorem ipsum dolor sit
                                                amet,Stet clita kasd gubergren, no sea takimata sanctus est is the
                                                loremLorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea takimata
                                                sanctus est is the Lorem ipsum.

                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-shadow border-radius-12 mb-3 px-0">
                                        <div class="card-header collapsed px-3 py-3" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseThree" aria-expanded="false">
                                            <a class="card-title text-black semi-bold font16 text-decoration-none">
                                                3. Lorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea takimata?
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="card-body px-3 collapse bg-gray"
                                            data-parent="#accordion">
                                            <p class="font14 ">Lorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea
                                                takimata sanctus est is the lorem.Lorem ipsum dolor sit amet,Stet clita kasd
                                                gubergren, no sea takimata sanctus est is the loremLorem ipsum dolor sit
                                                amet,Stet clita kasd gubergren, no sea takimata sanctus est is the
                                                loremLorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea takimata
                                                sanctus est is the Lorem ipsum.

                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-shadow border-radius-12 mb-3 px-0">
                                        <div class="card-header collapsed px-3 py-3" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFour" aria-expanded="false">
                                            <a class="card-title text-black semi-bold font16 text-decoration-none">
                                                4. Lorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea takimata?
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="card-body px-3 collapse bg-gray"
                                            data-parent="#accordion">
                                            <p class="font14 ">Lorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea
                                                takimata sanctus est is the lorem.Lorem ipsum dolor sit amet,Stet clita kasd
                                                gubergren, no sea takimata sanctus est is the loremLorem ipsum dolor sit
                                                amet,Stet clita kasd gubergren, no sea takimata sanctus est is the
                                                loremLorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea takimata
                                                sanctus est is the Lorem ipsum.

                                            </p>
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
                                    <img src="{{ frontAssets('advertiser/images/check-icon.png') }}" class="img-fluid">
                                    <h3 class="text-black mb-0 font24 mb-0 semi-bold">Ad Request Posted <br /> Successfully!
                                    </h3>
                                    <p class="text-gray font18 my-3">Start Inviting advertisers for your private ad request
                                        to <br />receive offers from them.</p>
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
