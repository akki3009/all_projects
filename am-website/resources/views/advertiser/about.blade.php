@extends('advertiser.app')

@section('content')
    <div class="hero-banner inner d-flex align-items-center" id="home">
        <div class="hero-content">
            <h1 class="animate__animated animate__fadeInUp">About Us</h1>
        </div>
    </div>
    <!--/hero-banner-->
    <!--main-->
    <main>
        <section class="about overflow-hidden">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <figure class="text-center"><img src="{{ frontAssets('advertiser/images/qoute.svg') }}" alt=""></figure>
                        <h5 class="text-center regular">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <figure class="wow animate__animated animate__fadeInLeft text-center mt-5 p-4"><img
                                src="{{ frontAssets('advertiser/images/img.png') }}" class="img-fluid rounded-circle" alt=""></figure>
                    </div>
                    <div class="col-md-6 pt-5">
                        <div class="card wow animate__animated animate__fadeInRight mt-5">
                            <figure><img src="{{ frontAssets('advertiser/images/mission.svg') }}" alt=""></figure>
                            <h3>Our Mission</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 pt-5">
                        <div class="card wow animate__animated animate__fadeInLeft mt-5">
                            <figure><img src="{{ frontAssets('advertiser/images/vision.svg') }}" alt=""></figure>
                            <h3>Our Vision</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <figure class="wow animate__animated animate__fadeInRight text-center mt-5 p-4"><img
                                src="{{ frontAssets('advertiser/images/img.png') }}" class="img-fluid rounded-circle" alt=""></figure>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!--/main-->
@endsection
