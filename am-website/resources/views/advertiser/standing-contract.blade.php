@extends('advertiser.app')

@section('content')
    <main>
        <div class="breadcrumb p-0 mb-4 bg-white">
            <div class="container">
                <h4 class="mb-0">Standing Contracts</h4>
                <!-- <nav aria-label="breadcrumb " class="breadcrumb-wrapper  mb-0 mr-2 ">
                                      <ol class="breadcrumb mb-0 p-0 bg-white">
                                        <li class="breadcrumb-item "><a href="./index.html" class="text-yellow text-decoration-none">Home</a></li>
                                        <li class="breadcrumb-item  active" aria-current="page">Create new ad request</li>
                                      </ol>
                                    </nav> -->
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
                                    aria-selected="true">Unsigned | 09</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link semi-bold" id="Progress-tab" data-toggle="pill" href="#Progress"
                                    role="tab" aria-controls="Progress" aria-selected="false">Signed | 10</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="Standing-Requests" role="tabpanel"
                                aria-labelledby="Standing-Requests-tab">
                                <div class="card p-0 overflow-hidden mb-3">
                                    <div class="card-header p-3 bg-white ">
                                        <div class="d-flex align-items-start justify-content-between ">
                                            <div class="mr-2">
                                                <!-- <span class="font-12 text-gray">1 Mar, 2020 - 10:00AM</span> -->
                                                <p class="font-16 medium text-black mb-0">Headline goes here lorem ipsum
                                                    dummy text</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="card-ad-img">
                                                    <img src="{{ frontAssets('advertiser/images/s1.png') }}"
                                                        class="img-fluid">
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
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="d-flex align-items-start p-3">
                                                            <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                                class="img-fluid rounded-circle" width="50px">
                                                            <div class="mx-2 flex-auto">
                                                                <h4 class="font-14 mb-0">George Miller</h4>
                                                                <p class="font-12 mb-0">Riyadh</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 text-left text-md-right">
                                                        <a href="{{route('adv.view-contract')}}"
                                                            class="btn btn-outline-primary border-radius-30 font14  text-uppercase">VIEW
                                                            CONTRACT </a>
                                                    </div>
                                                </div>
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
                                            <a href="javascript:;"
                                                class="text-primary text-decoration-none medium view-detail">View Detail <i
                                                    class="fa fa-angle-down medium"></i></a>
                                        </div>
                                        <div class="bg-gray p-3 view-more-detail d-none">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <p class="mb-2 font-14 medium text-black mb-0">Descriptions</p>
                                                    <p class="font-13 text-black">Lorem ipsum, or lipsum as it is sometimes
                                                        known, is dummy text used in laying out print, graphic or web
                                                        designs. The passage is attributed to an unknown typesetter in the
                                                        15th century who is thought to have scrambled parts of Cicero's De
                                                        Finibus Bonorum et Malorum for use in a type specimen book.</p>
                                                    <p class="mb-2 font-14 text-black mb-2">Gender:<span class="medium">
                                                            Male, Female</span></p>
                                                    <p class="mb-2 font-14 text-black mb-2">Age Group:<span class="medium">
                                                            20 - 60</span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="font-14 text-black medium mb-3">Attachments (5)</h4>
                                                    <div class="attachment-wrapper">
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card p-0 overflow-hidden mb-3">
                                    <div class="card-header p-3 bg-white ">
                                        <div class="d-flex align-items-start justify-content-between ">
                                            <div class="mr-2">
                                                <!-- <span class="font-12 text-gray">1 Mar, 2020 - 10:00AM</span> -->
                                                <p class="font-16 medium text-black mb-0">Headline goes here lorem ipsum
                                                    dummy text</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="card-ad-img">
                                                    <img src="{{ frontAssets('advertiser/images/s1.png') }}"
                                                        class="img-fluid">
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
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="d-flex align-items-start p-3">
                                                            <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                                class="img-fluid rounded-circle" width="50px">
                                                            <div class="mx-2 flex-auto">
                                                                <h4 class="font-14 mb-0">George Miller</h4>
                                                                <p class="font-12 mb-0">Riyadh</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 text-left text-md-right">
                                                        <a href="{{route('adv.view-contract')}}"
                                                            class="btn btn-outline-primary border-radius-30 font14  text-uppercase">VIEW
                                                            CONTRACT </a>
                                                    </div>
                                                </div>
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
                                            <a href="javascript:;"
                                                class="text-primary text-decoration-none medium view-detail">View Detail <i
                                                    class="fa fa-angle-down medium"></i></a>
                                        </div>
                                        <div class="bg-gray p-3 view-more-detail d-none">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <p class="mb-2 font-14 medium text-black mb-0">Descriptions</p>
                                                    <p class="font-13 text-black">Lorem ipsum, or lipsum as it is sometimes
                                                        known, is dummy text used in laying out print, graphic or web
                                                        designs. The passage is attributed to an unknown typesetter in the
                                                        15th century who is thought to have scrambled parts of Cicero's De
                                                        Finibus Bonorum et Malorum for use in a type specimen book.</p>
                                                    <p class="mb-2 font-14 text-black mb-2">Gender:<span class="medium">
                                                            Male, Female</span></p>
                                                    <p class="mb-2 font-14 text-black mb-2">Age Group:<span class="medium">
                                                            20 - 60</span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="font-14 text-black medium mb-3">Attachments (5)</h4>
                                                    <div class="attachment-wrapper">
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Progress" role="tabpanel" aria-labelledby="Progress-tab">

                                <div class="card p-0 overflow-hidden mb-3">
                                    <div class="card-header p-3 bg-white ">
                                        <div class="d-flex align-items-start justify-content-between ">
                                            <div class="mr-2">
                                                <!-- <span class="font-12 text-gray">1 Mar, 2020 - 10:00AM</span> -->
                                                <p class="font-16 medium text-black mb-0">Headline goes here lorem ipsum
                                                    dummy text</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="card-ad-img">
                                                    <img src="{{ frontAssets('advertiser/images/s1.png') }}"
                                                        class="img-fluid">
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
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="d-flex align-items-start p-3">
                                                            <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                                class="img-fluid rounded-circle" width="50px">
                                                            <div class="mx-2 flex-auto">
                                                                <h4 class="font-14 mb-0">George Miller</h4>
                                                                <p class="font-12 mb-0">Riyadh</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 text-left text-md-right">
                                                        <a href="{{route('adv.view-contract')}}"
                                                            class="btn btn-outline-primary border-radius-30 font14  text-uppercase">VIEW
                                                            CONTRACT </a>
                                                    </div>
                                                </div>
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
                                            <a href="javascript:;"
                                                class="text-primary text-decoration-none medium view-detail">View Detail <i
                                                    class="fa fa-angle-down medium"></i></a>
                                        </div>
                                        <div class="bg-gray p-3 view-more-detail d-none">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <p class="mb-2 font-14 medium text-black mb-0">Descriptions</p>
                                                    <p class="font-13 text-black">Lorem ipsum, or lipsum as it is sometimes
                                                        known, is dummy text used in laying out print, graphic or web
                                                        designs. The passage is attributed to an unknown typesetter in the
                                                        15th century who is thought to have scrambled parts of Cicero's De
                                                        Finibus Bonorum et Malorum for use in a type specimen book.</p>
                                                    <p class="mb-2 font-14 text-black mb-2">Gender:<span class="medium">
                                                            Male, Female</span></p>
                                                    <p class="mb-2 font-14 text-black mb-2">Age Group:<span class="medium">
                                                            20 - 60</span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="font-14 text-black medium mb-3">Attachments (5)</h4>
                                                    <div class="attachment-wrapper">
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card p-0 overflow-hidden mb-3">
                                    <div class="card-header p-3 bg-white ">
                                        <div class="d-flex align-items-start justify-content-between ">
                                            <div class="mr-2">
                                                <!-- <span class="font-12 text-gray">1 Mar, 2020 - 10:00AM</span> -->
                                                <p class="font-16 medium text-black mb-0">Headline goes here lorem ipsum
                                                    dummy text</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="card-ad-img">
                                                    <img src="{{ frontAssets('advertiser/images/s1.png') }}"
                                                        class="img-fluid">
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
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="d-flex align-items-start p-3">
                                                            <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                                class="img-fluid rounded-circle" width="50px">
                                                            <div class="mx-2 flex-auto">
                                                                <h4 class="font-14 mb-0">George Miller</h4>
                                                                <p class="font-12 mb-0">Riyadh</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 text-left text-md-right">
                                                        <a href="{{route('adv.view-contract')}}"
                                                            class="btn btn-outline-primary border-radius-30 font14  text-uppercase">VIEW
                                                            CONTRACT </a>
                                                    </div>
                                                </div>
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
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="javascript:;"
                                                class="text-primary text-decoration-none medium view-detail">View Detail <i
                                                    class="fa fa-angle-down medium"></i></a>
                                        </div>
                                        <div class="bg-gray p-3 view-more-detail d-none">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <p class="mb-2 font-14 medium text-black mb-0">Descriptions</p>
                                                    <p class="font-13 text-black">Lorem ipsum, or lipsum as it is sometimes
                                                        known, is dummy text used in laying out print, graphic or web
                                                        designs. The passage is attributed to an unknown typesetter in the
                                                        15th century who is thought to have scrambled parts of Cicero's De
                                                        Finibus Bonorum et Malorum for use in a type specimen book.</p>
                                                    <p class="mb-2 font-14 text-black mb-2">Gender:<span class="medium">
                                                            Male, Female</span></p>
                                                    <p class="mb-2 font-14 text-black mb-2">Age Group:<span class="medium">
                                                            20 - 60</span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="font-14 text-black medium mb-3">Attachments (5)</h4>
                                                    <div class="attachment-wrapper">
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
                                                        <a href="#"><img
                                                                src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                class="img-fluid mr-2 mb-2"></a>
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
                                        <a href="{{route('adv.my-ads')}}" class="btn btn-primary  px-5">YES</a>
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
        $('#yourId').jalendar({
            color: '#577e9a',
            color2: '#57c8bf',
            lang: 'EN'
        });
        $(".calendar-icon").click(function() {
            $("#yourcal").toggleClass("d-none");
        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

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
            tags: true // ?????????????? ?????????? ?????????? ???? ????????
        });

        $('.icons_select2').select2({
            width: "100%",
            templateSelection: iformat,
            templateResult: iformat,
            allowHtml: true,
            placeholder: "Placeholder",
            dropdownParent: $('.select-icon'), //?????????????? ??????????
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
