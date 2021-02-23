@extends('layout.header')

@section('title', 'Home')

@section('container')
    <div class="hero">
        <div class="row reverse-column mt-3 h-100">
            <div class="hero-text col-lg-5 col-sm-12 text-center">
                <p class="font-weight-normal" style="font-size: 30px">Welcome To DenMarket Sport   </p>
                <p class="font-weight-bold" style="font-size: 40px; line-height:40px">It’s okay to be a little obsessed with shoes!</p>
                <p class="font-weight-bold" style="font-size: 24pxpx">be a force in the court with your shoes</p>
            </div>
            <div class="col-lg-7 col-sm-12 img">
                <img src="{{ asset('image/Hero.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection
