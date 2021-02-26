@extends('layout.header')

@section('title' ,'Location')

@section('container')
<div class="container">
    <div class="contact-us">
        <div class="row">
            <div class="col-lg-6">
                <div class="row px-4 d-flex justify-content-center all-card border">
                    <div class="card-deck">
                        <div class="card col-6 mt-4" style="width: 18rem;">
                            <img class="card-img-top w-100 smartphone-icon mt-3" src="{{asset('image/smartphone.svg')}}" alt="Card image cap">
                            <div class="card-body text-center">
                              <h4 class="card-title">Product & Orders</h4>
                              <p class="card-text">083-114-803-923</p>
                              <p class="card-text">24 hours a day</p>
                              <p class="card-text">7 days a week</p>
                            </div>
                        </div>
                        <div class="card col-6 mt-4" style="width: 18rem;">
                            <img class="card-img-top w-100 smartphone-icon mt-3" src="{{asset('image/chat.svg')}}" alt="Card image cap">
                            <div class="card-body text-center">
                              <h4 class="card-title">Product & Orders</h4>
                              <p class="card-text">Chat with us</p>
                              <p class="card-text">24 hours a day</p>
                              <p class="card-text">7 days a week</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck mb-4">
                        <div class="card col-6 mt-4" style="width: 18rem;">
                            <img class="card-img-top w-100 smartphone-icon mt-3" src="{{asset('image/mail.svg')}}" alt="Card image cap">
                            <div class="card-body text-center">
                              <h4 class="card-title">Product & Orders</h4>
                              <p class="card-text">Email us</p>
                              <p class="card-text-all">We'll reply within five business days</p>
                            </div>
                        </div>
                        <div class="card col-6 mt-4" style="width: 18rem;">
                            <img class="card-img-top w-100 smartphone-icon mt-3" src="{{asset('image/location.svg')}}" alt="Card image cap">
                            <div class="card-body text-center">
                              <h4 class="card-title">Store Location</h4>
                              <p class="card-text-all">Find DenMarket Sport in here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="font-weight-normal contact-title"><span style="color:#FF4A4A">Contact</span> Us</p>
                <p class="font-weight-normal contact-text">Contact us if you need help</p>
                <div class="row info-contact">
                    <div class="col-lg-4 address">
                        <p class="address-title">Address</p>
                        <p class="address-text">Denpasar - Bali</p>
                    </div>
                    <div class="col-lg-4 phone">
                        <p class="email-title">Phone</p>
                        <p class="email-text">083114803923</p>
                    </div>
                    <div class="col-lg-4 email">
                        <p class="email-title">Email</p>
                        <p class="email-text">denmarket@gmail.com</p>
                    </div>
                </div>
                <p class="contact-text mt-4">Send Message</p>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama">Message</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <a class="btn ml-auto" href="">Send Message</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end container -->
@endsection