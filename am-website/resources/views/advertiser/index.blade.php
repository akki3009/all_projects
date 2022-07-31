@extends('advertiser.app')

@section('content')
    <div class="hero-banner d-flex align-items-center" id="home">
        <div class="hero-content">
            <h1 class="animate__animated animate__fadeInUp">Grow Your Business</h1>
            <p class="animate__animated animate__fadeInUp">Let's find best deals for your advertisements!</p>
            <button class="btn btn-orange rounded-pill animate__animated animate__fadeInUp" type="button">Sign Up</button>
            <span class="element"><img src="{{ frontAssets('advertiser/images/banner_shape.svg') }}" width="100%"></span>
        </div>
    </div>
    <!--/hero-banner-->
    <!--main-->
    <main>
        <section class="features" id="features">
            <div class="container-xl">
                <h1 class="title">Features</h1>
                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesettink.</p>
                <div class="row box">
                    <div class="col-md-4">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <img src="{{ frontAssets('advertiser/images/flexible.svg') }}" alt="" />
                            <h3 class="purple">Flexible</h3>
                            <p>Allows you to ease your search for you and find a perfect advertisers ensuring all your
                                needs.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <img src="{{ frontAssets('advertiser/images/deals.svg') }}" alt="" />
                            <h3 class="red">Get Deals</h3>
                            <p>Get Deals Directly from Advertisers. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card wow animate__animated animate__fadeInUp">
                            <img src="{{ frontAssets('advertiser/images/payments.svg') }}" alt="" />
                            <h3 class="yellow">Payments</h3>
                            <p>Easy payment transfer. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="howitworks overflow-hidden" id="how-it-works">
            <div class="container-xl">
                <h1 class="title">How It Works</h1>
                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesettink.</p>
                <div class="steplists">
                    <div class="row right">
                        <div class="col-md-6">
                            <figure class="wow animate__animated animate__fadeInLeft"><img src="{{ frontAssets('advertiser/images/img1@2x.png') }}"
                                    class="img-fluid rounded-circle" alt="" /></figure>
                        </div>
                        <div class="col-md-6 divider step1">
                            <div class="card wow animate__animated animate__fadeInRight">
                                <div><img src="{{ frontAssets('advertiser/images/file.svg') }}" alt=""><span class="purple">STEP 1</span></div>
                                <h3>Create & Post Advertisement</h3>
                                <p>Fill few details to create and post advertisement. Lorem Ipsum is simply dummy text of
                                    the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row left">
                        <div class="col-md-6 divider step2">
                            <div class="card wow animate__animated animate__fadeInLeft">
                                <div><img src="{{ frontAssets('advertiser/images/offer.svg') }}" alt=""><span class="magenta">STEP 2</span></div>
                                <h3>Receive Offers from Advertiser</h3>
                                <p>Fill few details to create and post advertisement. Lorem Ipsum is simply dummy text of
                                    the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure class="wow animate__animated animate__fadeInRight"><img src="{{ frontAssets('advertiser/images/img2@2x.png') }}"
                                    class="img-fluid rounded-circle" alt="" /></figure>
                        </div>
                    </div>
                    <div class="row right">
                        <div class="col-md-6">
                            <figure class="wow animate__animated animate__fadeInLeft"><img src="{{ frontAssets('advertiser/images/img3@2x.png') }}"
                                    class="img-fluid rounded-circle" alt="" /></figure>
                        </div>
                        <div class="col-md-6 divider step3">
                            <div class="card wow animate__animated animate__fadeInRight">
                                <div><img src="{{ frontAssets('advertiser/images/negotiate.svg') }}" alt=""><span class="orange">STEP 3</span></div>
                                <h3>Easy Negotiate</h3>
                                <p>Fill few details to create and post advertisement. Lorem Ipsum is simply dummy text of
                                    the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row left">
                        <div class="col-md-6 divider step4">
                            <div class="card wow animate__animated animate__fadeInLeft" style="margin-bottom: 50px;">
                                <div><img src="{{ frontAssets('advertiser/images/close_deal.svg') }}" alt=""><span class="yellow">STEP 4</span></div>
                                <h3>Close A Deal</h3>
                                <p>Fill few details to create and post advertisement. Lorem Ipsum is simply dummy text of
                                    the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure class="wow animate__animated animate__fadeInRight"><img src="{{ frontAssets('advertiser/images/img4@2x.png') }}"
                                    class="img-fluid rounded-circle" alt="" /></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-three wow animate__animated animate__fadeIn">
            <div class="container-xl" align="center">
                <h1 class="title mb-3">Get access to wide range of Ad Postings to make offer</h1>
                <div class="col-md-10" align="center">
                    <p class="text-center mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an printer.</p>
                </div>
                <button type="button" class="btn btn-purple rounded-pill">Sign Up as advertiser</button>
            </div>
        </section>
    </main>
    <!--/main-->
@endsection
