@extends('layout.header')

@section('title', 'Home')

@section('container')
    <div class="hero mt-2">
        <div class="row reverse-column h-100">
            <div class="hero-text col-lg-5 col-md-5 col-12 mt-5 d-flex flex-column justify-content-center">
                <div>
                    <p class="font-weight-normal welcome-hero">Welcome To DenMarket Sport</p>
                    <p class="font-weight-bold title-hero">It’s okay to be a little obsessed with shoes!</p>
                    <p class="font-weight-normal text-hero">be a force in the court with your shoes</p>
                </div>
                <div class="explore">
                    <a type="button" class="btn mr-2" ><i class="fas fa-chevron-down" style="color:#fff;"></i></a>
                    <a class="font-weight-normal mr-2">Explore More</a>
                    <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
                </div>
                <div class="elipse mt-5" >
                    <img src="{{ asset('image/Elipse1.png') }}" alt="" style="height:80px">
                </div>
            </div>
            <div class="col-lg-7 col-12 img">
                <img src="{{ asset('image/Hero.png') }}"  alt="">
            </div>
        </div>
    </div>

    <div class="quality">
        <div class="row">
            <div class="col-lg-6 col-12 img">
                <img src="{{ asset('image/MaskGroup.png') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-6 col-12 d-flex flex-column justify-content-center">
                <p class="font-weight-bold title-quality">With quality ingredients</p>
                <p class="font-weight-normal text-quality">a great fit for powerful players who want good ankle support from a shoe that still feels light. The sculpted, padded collar and exterior heel counter provide a stable fit, while visible cushioning units under the forefoot return energy with every step. </p>
            </div>  
        </div>
    </div>

    <div class="trending">
        <div class="row">
            <p class="font-weight-bold trending-title ml-auto"><span style="color: #FF4A4A">Trending</span> Collection</p>
        </div>
        <div class="row justify-content-center">
            <div class="card-deck col-lg-12">
                <div class="card col-lg-6 col-12">
                    <img src="{{ asset('image/futsal1.jpg') }}" alt="" class="w-100 h-100">
                </div>
                <div class="card col-lg-6 col-12">
                    <img src="{{ asset('image/futsal2.jpg') }}" alt="" class="w-100 h-100">
                </div>

                <div class="card col-lg-6 col-12">
                    <img src="{{ asset('image/futsal3.jpg') }}" alt="" class="w-100 h-100">
                </div>

                <div class="card col-lg-6 col-12">
                    <img src="{{ asset('image/futsal4.jpg') }}" alt="" class="w-100 h-100">
                </div>
            </div>
        </div>
    </div>

    <div class="discount">
        <div class="card">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 p-5">
                    <img src="{{ asset('image/discount banner.png') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center">
                    <p class="font-weight-bold title-discount">Get Your Shoes Now On <span style="color:#FF4A4A">15%</span> Discount</p>
                    <p class="font-weight-normal text-discount">Come on, choose your shoes immediately</p>
                    <div class="button-buy mt-2">
                        <a type="button" class="btn mr-2" ><i class="fas fa-plus" style="color:#fff;"></i></a>
                        <a class="font-weight-normal mr-2">Buy Now</a>
                        <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
                    </div>
                </div>
                <div class="col-lg-12 show">
                    <a type="button" class="btn mr-2" ><i class="fas fa-chevron-down" style="color:#fff;"></i></a>
                    <a class="font-weight-normal mr-2">Show More</a>
                    <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
                </div>
            </div>
           
        </div>
    </div>
@endsection
