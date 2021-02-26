@extends('layout.header')

@section('title' ,'Location')

@section('container')
    <img src="{{asset('image/about-hero2.png')}}" alt="" class="mx-auto d-block border border-top-0">
    {{-- <div class="container d-flex justify-content-center align-items-center">
        <div class="row container-about-location">
            <div class="card p-5 col-lg-10 offset-lg-1">
                <h2 class="card-title">Our<span style="color:#FF4A4A">Location</span></h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.7756174132164!2d115.18160121538986!3d-8.617528289945058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238d3fc832585%3A0x2805d9c77b300e6d!2sJl.%20Tukad%20Buana%20V%2C%20Padangsambian%20Kaja%2C%20Kec.%20Denpasar%20Bar.%2C%20Kota%20Denpasar%2C%20Bali%2080116!5e0!3m2!1sid!2sid!4v1614310547069!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row container-about-location">
            <div class="card p-5 col-lg-10 offset-lg-1">
                    <h2 class="card-title">Our<span style="color:#FF4A4A">Location</span></h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.7756174132164!2d115.18160121538986!3d-8.617528289945058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238d3fc832585%3A0x2805d9c77b300e6d!2sJl.%20Tukad%20Buana%20V%2C%20Padangsambian%20Kaja%2C%20Kec.%20Denpasar%20Bar.%2C%20Kota%20Denpasar%2C%20Bali%2080116!5e0!3m2!1sid!2sid!4v1614310547069!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection