@extends('beneficiary.app')

@section('content')
    <main>
        <div class="breadcrumb  p-0 mb-4 bg-white">
            <div class="container">
                <h4 class="mb-0">Notification</h4>
                <!-- <div class="d-flex align-items-end justify-content-between flex-wrap">
                      <nav aria-label="breadcrumb " class="breadcrumb-wrapper  mb-0 mr-2 ">
                        <ol class="breadcrumb mb-0 p-0 bg-white">
                          <li class="breadcrumb-item"><a href="./my-ads.html" class="text-yellow text-decoration-none">My Ads</a></li>
                          <li class="breadcrumb-item"><a href="./completed-ads.html" class="text-yellow text-decoration-none">Standing Requests</a></li>
                          <li class="breadcrumb-item  active" aria-current="page">Invites</li>
                        </ol>
                      </nav>
                      <a href="#" class="btn btn-primary px-4"><i class="fa fa-plus mr-1"></i> INVITE NEW</a>
                    </div> -->
            </div>
        </div>
        <div class="container">
            <div class="info-wrapper message-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card p-3 mb-3">
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap ">
                                <div class="d-flex align-items-start mr-2">
                                    <img src="{{ frontAssets('beneficiary/images/accepted-icon.png') }}"
                                        class="img-fluid">
                                    <div class="ml-3">
                                        <h5 class="font-16 mb-0 d-flex align-items-center flex-wrap">Offer Accepted <span
                                                class=" ml-3 regular badge position-relative bg-danger p-2 border-radius-30">New</span>
                                        </h5>
                                        <p class="mb-0">Mark henry accepted offer made by you.</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0 font-12 text-black ">Today</p>
                                    <p class="mb-0 font-12 text-black">10:00 AM</p>
                                </div>
                            </div>
                        </div>
                        <div class="card p-3 mb-3">
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap ">
                                <div class="d-flex align-items-start mr-2">
                                    <img src="{{ frontAssets('beneficiary/images/rejected-icon.png') }}"
                                        class="img-fluid">
                                    <div class="ml-3">
                                        <h5 class="font-16 mb-0 d-flex align-items-center flex-wrap">Offer Rejected</h5>
                                        <p class="mb-0">Mark henry accepted offer made by you.</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0 font-12 text-black ">Today</p>
                                    <p class="mb-0 font-12 text-black">10:00 AM</p>
                                </div>
                            </div>
                        </div>
                        <div class="card p-3 mb-3">
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap ">
                                <div class="d-flex align-items-start mr-2">
                                    <img src="{{ frontAssets('beneficiary/images/accepted2-icon.png') }}"
                                        class="img-fluid">
                                    <div class="ml-3">
                                        <h5 class="font-16 mb-0 d-flex align-items-center flex-wrap">Offer Accepted</h5>
                                        <p class="mb-0">Mark henry accepted offer made by you.</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0 font-12 text-black ">Today</p>
                                    <p class="mb-0 font-12 text-black">10:00 AM</p>
                                </div>
                            </div>
                        </div>
                        <div class="card p-3 mb-3">
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap ">
                                <div class="d-flex align-items-start mr-2">
                                    <img src="{{ frontAssets('beneficiary/images/rejected2-icon.png') }}"
                                        class="img-fluid">
                                    <div class="ml-3">
                                        <h5 class="font-16 mb-0 d-flex align-items-center flex-wrap">Offer Rejected</h5>
                                        <p class="mb-0">Mark henry accepted offer made by you.</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0 font-12 text-black ">Today</p>
                                    <p class="mb-0 font-12 text-black">10:00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <div class="modal fade" id="block-list-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header  pb-0">
                    <h2 class="font-24 flex-auto text-center mb-3 pl-4">Blocked Users</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ frontAssets('beneficiary/images/close-icon.png') }}">
                    </button>
                </div>
                <div class="modal-body pt--">
                    <div class="">

                        <div class="row align-items-center">

                            <div class="col-12 mb-3 mt-0">
                                <div
                                    class="border-bottom py-3 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                            class="img-fluid rounded-circle" width="50px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">George Miller</h4>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-outline-primary border-radius-30 px-4 text-uppercase">unblock</a>
                                </div>
                                <div
                                    class="border-bottom py-3 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                            class="img-fluid rounded-circle" width="50px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">George Miller</h4>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-outline-primary border-radius-30 px-4 text-uppercase">unblock</a>
                                </div>
                                <div
                                    class="border-bottom py-3 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                            class="img-fluid rounded-circle" width="50px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">George Miller</h4>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-outline-primary border-radius-30 px-4 text-uppercase">unblock</a>
                                </div>
                                <div
                                    class="border-bottom py-3 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                            class="img-fluid rounded-circle" width="50px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">George Miller</h4>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-outline-primary border-radius-30 px-4 text-uppercase">unblock</a>
                                </div>
                                <div
                                    class="border-bottom py-3 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                            class="img-fluid rounded-circle" width="50px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">George Miller</h4>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-outline-primary border-radius-30 px-4 text-uppercase">unblock</a>
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

        $(".filter-box").click(function() {
            $(this).toggleClass("active");
            $(".filter-wrapper").toggleClass("d-none");
        });

    </script>
@endpush
