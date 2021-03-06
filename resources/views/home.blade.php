@extends('layout.header')

@section('title' ,'Home')

@section('container')
    <div class="container" style="margin-top: 80px">
        <div class="hero">
            <div class="row reverse-column h-100">
                <div class="hero-text col-lg-5 col-md-5 col-12 mt-5 d-flex flex-column justify-content-center"  data-aos="fade-right" data-aos-duration="1000">
                    <div>
                        <p class="font-weight-normal welcome-hero">Welcome To DenMarket Sport</p>
                        <p class="font-weight-bold title-hero">It’s okay to be a little obsessed with shoes!</p>
                        <p class="font-weight-normal text-hero">be a force in the court with your shoes</p>
                    </div>
                    <div class="explore">
                        <a type="button" class="btn mr-2" href="#trending"><i class="fas fa-chevron-down" style="color:#fff;"></i></a>
                        <a class="font-weight-normal mr-2" href="#trending">Explore More</a>
                        <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
                    </div>
                    <div class="elipse mt-5">
                        <img src="{{ asset('image/Elipse1.png') }}" alt="" style="height:80px">
                    </div>
                </div>
                <div class="col-lg-7 col-12 img" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('image/Hero.png') }}"  alt="">
                </div>
            </div>
        </div>

        <div class="quality"  data-aos="zoom-in-up" data-aos-duration="1000">
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
            <div class="container"">
                <div class="row" id="trending">
                    <p class="font-weight-bold trending-title ml-auto" id="scroll-bawah"><span style="color: #FF4A4A">Trending</span> Collection</p>
                </div>
                <div class="row">   
                    @foreach($produk as $prd)
                    <div class="col-lg-4">
                        <div class="card col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{ asset('image/product/'.$prd->gambar_produk) }}" alt="" class="w-100 h-100">
                        </div>
                    </div>
                    @endforeach
                </div>
              
                <div class="row">
                    <div class="show mx-auto mt-3" data-aos="fade-up" data-aos-duration="750">
                        <a type="button" class="btn mr-2" href="{{url('product/football')}}"><i class="fas fa-chevron-down" style="color:#fff;"></i></a>
                        <a class="font-weight-normal mr-2" href="{{url('product/football')}}">Show More</a>
                        <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
                    </div>
                </div>
            </div>
        </div>

        <section class="testimonials">
            <div class="container">
                <div class="heading wow fadeIn text-center">
                    <h2>Our
                        <span>Testimonials</span></h2>
                    <p>Some testimonials from customers who have purchased our products</p>
                </div>
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-lg-6">
                        <div class="box d-flex align-items-center wow fadeInLeft h-100">
                            <div class="content">
                                <h3 class="text-danger">Gana Untaran</h3>
                                <p>A very good product, prioritizing quality and user comfort</p>
                            </div>
                            <div class="image"><img src="{{asset('image/testi1.png')}}" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-lg-6">
                        <div class="box d-flex align-items-center wow fadeInRight h-100">
                            <div class="content">
                                <h3 class="text-danger">Surya Amerta</h3>
                                <p>a good shop, selling quality products at the right price</p>
                            </div>
                            <div class="image h-80"><img src="{{asset('image/testi2.png')}}" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Box-3 -->
                    <div class="col-lg-6">
                        <div class="box d-flex align-items-center wow fadeInLeft h-100">
                            <div class="content">
                                <h3 class="text-danger">Wahyu Purnama</h3>
                                <p>very trustworthy shop, great. I will buy it here again</p>
                            </div>
                            <div class="image"><img src="{{asset('image/testi3.png')}}" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                    <!-- Box-4 -->
                    <div class="col-lg-6">
                        <div class="box d-flex align-items-center wow fadeInRight h-100">
                            <div class="content">
                                <h3 class="text-danger">Prihandana</h3>
                                <p>I ordered, and the item has been sent, really great</p>
                            </div>
                            <div class="image"><img src="{{asset('image/testi4.png')}}" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="discount">
            <div class="card" data-aos="zoom-in" data-aos-duration="500">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 p-5">
                        <img src="{{ asset('image/discount banner.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center col-discount">
                        <p class="font-weight-bold title-discount">Get Your Shoes Now On <span style="color:#FF4A4A">15%</span> Discount</p>
                        <p class="font-weight-normal text-discount">Come on, choose your shoes immediately</p>
                        <div class="button-buy mt-2">
                            <a type="button" class="btn mr-2" href="{{url('product/football')}}"><i class="fas fa-plus" style="color:#fff;"></i></a>
                            <a class="font-weight-normal mr-2" href="{{url('product/football')}}">Buy Now</a>
                            <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- end container -->
@endsection