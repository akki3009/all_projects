@extends('advertiser.app')

@section('content')
    <main>
        <div class="breadcrumb p-0 mb-4 bg-white">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Earnings</h4>
                    <div class="d-flex align-items-center flex-wrap">
                        <div class="text-right mr-3">
                            <p class="font-14 text-gray mb-0">Total Pending Amount</p>
                            <span class="font18 medium mb-0">SAR 20,000</span>
                        </div>
                        <a href="{{ route('adv.view-contract') }}"
                            class="btn btn-outline-primary border-radius-30 font14 mr-2 text-uppercase">VIEW CONTRACT</a>
                        <a href="#"><img src="{{ frontAssets('advertiser/images/download-icon.png') }}"
                                class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- MultiStep Form -->
            <div class="row">
                <div class="col-md-12">
                    <div class="my-ads-wrapper tabs-wrapper">
                        <ul class="nav nav-pills mb-3 border-bottom" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active semi-bold " id="Standing-Requests-tab" data-toggle="pill"
                                    href="#Standing-Requests" role="tab" aria-controls="Standing-Requests"
                                    aria-selected="true">Pending | 09</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link semi-bold" id="Progress-tab" data-toggle="pill" href="#Progress"
                                    role="tab" aria-controls="Progress" aria-selected="false">Received | 10</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="Standing-Requests" role="tabpanel"
                                aria-labelledby="Standing-Requests-tab">
                                <div class="row ">
                                    <div class="col-lg-12  pb-4">
                                        <div
                                            class="table-reponsive border-radius-8 overflow-hidden card p-0 mt-4 table-bdr">
                                            <table
                                                class="table table-hover table-striped table-border border-radius-8 overflow-hidden ">
                                                <thead style="background: #F8F8F8;">
                                                    <th class="medium" width="30"></th>
                                                    <th class="medium">Transaction ID</th>
                                                    <th class="medium">Ad Headline</th>
                                                    <th class="medium">Ad Price</th>
                                                    <th class="medium">Invoice Date</th>
                                                    <th class="medium">Earning Amount</th>
                                                </thead>
                                                <tbody>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                    </tr>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                    </tr>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                    </tr>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                    </tr>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                    </tr>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Progress" role="tabpanel" aria-labelledby="Progress-tab">
                                <div class="row ">
                                    <div class="col-lg-12  pb-4">
                                        <div
                                            class="table-reponsive border-radius-8 overflow-hidden card p-0 mt-4 table-bdr">
                                            <table
                                                class="table table-hover table-striped table-border border-radius-8 overflow-hidden ">
                                                <thead style="background: #F8F8F8;">
                                                    <th class="medium" width="30"></th>
                                                    <th class="medium">Transaction ID</th>
                                                    <th class="medium">Ad Headline</th>
                                                    <th class="medium">Ad Price</th>
                                                    <th class="medium">Invoice Date</th>
                                                    <th class="medium">Earning Amount</th>
                                                    <th class="medium">Received On</th>
                                                </thead>
                                                <tbody>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020 - 10:05 AM
                                                        </td>
                                                    </tr>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020 - 10:05 AM
                                                        </td>
                                                    </tr>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020 - 10:05 AM
                                                        </td>
                                                    </tr>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020 - 10:05 AM
                                                        </td>
                                                    </tr>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020 - 10:05 AM
                                                        </td>
                                                    </tr>
                                                    <tr class='clickable-row'
                                                        data-href='{{ route('adv.advertiser-detail') }}'>
                                                        <td width="30">
                                                            <div class="custom-control custom-checkbox  mb-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="customCheck" name="example1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            124576
                                                        </td>
                                                        <td>
                                                            Headline goes here
                                                        </td>
                                                        <td>
                                                            SAR 200
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020
                                                        </td>
                                                        <td>
                                                            SAR 120
                                                        </td>
                                                        <td>
                                                            3 Oct, 2020 - 10:05 AM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
    <div class="modal fade" id="accept-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">

                        <div class="row align-items-center">

                            <div class="col-12 mb-3 mt-4">
                                <div class="text-center">
                                    <img src="{{ frontAssets('advertiser/images/delete-ad.png') }}" class="img-fluid">
                                    <h3 class="text-black mb-0 font24 mb-0 medium mx-4 mb-5">Are you sure you want to accept
                                        this offer?</h3>

                                    <div class="d-flex align-items-center justify-content-between w-75 mx-auto">
                                        <a href="#" class="btn btn-outline-primary border-radius-30 w-100 mx-2">NO</a>
                                        <a href="#" class="btn btn-primary w-100 mx-2" data-dismiss="modal"
                                            data-toggle="modal" data-target="#offer-accept-modal">YES</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="offer-accept-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">

                        <div class="row align-items-center">

                            <div class="col-12 mb-3 mt-4">
                                <div class="text-center">
                                    <img src="{{ frontAssets('advertiser/images/check-icon.png') }}" class="img-fluid">
                                    <h3 class="text-black font24 medium  mb-2">Offer Accepted!</h3>
                                    <p class="text-gray font18 my-3">You accepted offer please wait for the beneficiary to
                                        sign the contract, once sign by beneficiary you will be notified and you can view &
                                        sign contract in "Standing Contracts" section.</p>
                                    <div class="d-flex align-items-center justify-content-center w-75 mx-auto mt-4">
                                        <a href="{{ route('adv.my-ads') }}" class="btn btn-primary  px-5">YES</a>
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
                        <img src="{{ frontAssets('advertiser/images/close-icon.png') }}">
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
                        <img src="{{ frontAssets('advertiser/images/close-icon.png') }}">
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
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });

    </script>

@endpush
