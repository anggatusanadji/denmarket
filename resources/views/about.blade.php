@extends('layout.header')

@section('title' ,'About')

@section('container')
    <div class="container">
        <img src="{{asset('image/about-hero2.png')}}" alt="" class="mx-auto d-block border border-top-0">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row container-about-location">
                <div class="card p-5 col-lg-10 offset-lg-1">
                    <h2 class="card-title"><span style="color:#FF4A4A">About</span> Us</h2>
                    <p class="card-text" >Our mission is what drives us to do everything possible to expand human potential. We do that by creating groundbreaking sport innovations, 
                        making our products more sustainably, building a creative and diverse global team, and making a positive impact in communities where we live and work.</p>
                    <div class="row mt-4">
                        <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="750">
                            <img src="{{asset('image/about-mask-1.png')}}" alt="">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-duration="750">
                            <p>We provide a variety od shoe options with a good combination of design and product materials and consider the price and comfort of use that can compete in the market</p>
                        </div>
                    </div>
                    <div class="row session-about-reverse mt-3">
                        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-duration="750">
                            <p class="text-right">Presenting a wide selection of the best products with the right photos, accurate descriptions, and competitive prices. You Will not disappoint.</p>
                        </div>
                        <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="750">
                            <img src="{{asset('image/about-mask-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
@endsection
