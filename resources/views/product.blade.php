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
            <div class="row">
                <ul class="col-6 offset-lg-3 d-flex justify-content-between ul-product">
                    <li class="active">
                        <a href="">Football Shoes</a>
                        <div class="underline"></div>
                    </li>
                    <li>
                        <a href="">Futsal Shoes</a>
                        <div class="underline"></div>
                    </li>
                    <li>
                        <a href="">Running Shoes</a>
                        <div class="underline"></div>
                    </li>
                </ul>
            </div>
            <!-- row 1 -->
            <div class="row justify-content-center mt-4">
                <div class="card-deck">
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="{{url('product/detail-product')}}" class="buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="#" class="buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="#" class="buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="#" class="buy">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row 2 -->
            <div class="row justify-content-center mt-4">
                <div class="card-deck">
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="#" class="buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="#" class="buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="#" class="buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="#" class="buy">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row 3 -->
            <div class="row justify-content-center mt-4">
                <div class="card-deck">
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="#" class="buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="#" class="buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="#" class="buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="card product-card">
                        <div class="imgBox">
                            <img src="{{ asset('image/product image/football/football2.png') }}" alt="" class="shoe">
                        </div>
                        <div class="contentBox">
                            <h3>Football Shoes</h3>
                            <h2 class="price"><small>Rp.</small> 200.000</h2>
                            <a href="#" class="buy">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end container -->
@endsection     