@extends('layout.header')    
@section('title' , 'Product')

@section('container')
<div class="container">
    <div class="hero mt-2">
        <div class="row reverse-column h-100">
            <div class="hero-text col-lg-5 col-md-5 col-12 mt-5 d-flex flex-column justify-content-center position-relative">
                <div>
                    <p class="font-weight-bold title-hero2">Explore New Things</p>
                    <p class="font-weight-normal text-hero2">Explore your world in quality and colorfull shoes</p>
                </div>
                <div class="explore">
                    <a type="button" class="btn mr-2" ><i class="fas fa-chevron-down" style="color:#fff;"></i></a>
                    <a class="font-weight-normal mr-2">Check More</a>
                    <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
                </div>
            </div>
            <div class="col-lg-7 col-12 img">
                <img src="{{ asset('image/product-hero.png') }}"  alt="">
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="product">
            <div class="row text-center justify-content-center">
                <ul class="col-6 d-flex justify-content-between">
                    <li>
                        <a href="{{url('product/football')}}">Football Shoes</a>
                        <div class="underline"></div>
                    </li>
                    <li>
                        <a href="{{url('product/futsal')}}">Futsal Shoes</a>
                        <div class="underline"></div>
                    </li>
                    <li class="active">
                        <a href="{{url('product/running')}}">Running Shoes</a>
                        <div class="underline"></div>
                    </li>
                </ul>
            </div>
            <!-- row 1 -->
            <div class="row">
                <div class="row p-0">
                    @foreach($produk as $prd)
                    <div class="col-lg-3 mt-4">
                        <div class="card product-card col-lg-12 h-100" data-aos="flip-right" data-aos-duration="1000">
                            <div class="imgBox">
                                <img src="{{ asset('image/product/'.$prd->gambar_produk) }}" alt="" class="shoe">
                            </div>
                            <div class="contentBox">
                                <h3 class="text-center">{{ $prd->nama_produk }}</h3>
                                <h2 class="price"><small>Rp.</small>{{ $prd->harga_produk }}</h2>
                                <a href="{{ url('product/detail-product/'.$prd->id) }}" class="buy">Buy Now</a>
                            </div>
                        </div>
                    </div>             
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end container -->
@endsection     