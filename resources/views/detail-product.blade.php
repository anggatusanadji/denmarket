@extends('layout.header')
@section('title', 'Detail')

@section('container')
    <div class="container">
        <div class="row mt-4 container-detail">
            <div class="col-lg-6 col-12 border d-flex justify-content-center align-items-center">    
                <div>
                    <img src="{{asset('image/product/football1.png')}}" alt=""
                    class="center-block d-block mx-auto">   
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <h1>
                    Nike Mercurial Superfly 7 Elite FG
                </h1>
                <p>
                    360-degree Flyknit construction wraps your foot for a second-skin fit
                    New high-tenacity yarn and a 1-piece lining create a close, secure feel on the field
                    A new ultra-thin NIKESKIN overlay gets you closer to the ball for high-speed maneuvers
                    The All Conditions Control (ACC) finish means you get a reliable touch in wet and dry conditions
                    The lightweight forefoot plate features a Nike Aerotrak zone with microgrooves
                    The angular studs combine with a new stiffer chassis for explosive acceleration with every step
                </p>
                <p>
                    Size : <br>
                    40, 41, 42, 43, 44, 45
                </p>
                <div class="button-buy mt-2">
                    <a type="button" class="btn mr-2" ><i class="fas fa-plus" style="color:#fff;"></i></a>
                    <a class="font-weight-normal mr-2">Buy Now</a>
                    <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
                </div>
            </div>
        </div>
    </div>
@endsection