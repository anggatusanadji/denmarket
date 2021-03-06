<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

        <title>@yield('title')</title>
    </head>
    <body>
    <div class="w-100 bg-white" style="z-index: 10; position:fixed; top:0;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand font-weight-bold" href="#"><span style=color:#FF4A4A>DenMarket</span> Sport</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-denmarket" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('/home')}}">Home</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="nav-item {{ Request::is('product/football', 'product/futsal', 'product/running') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('/product/football')}}">Product</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="nav-item {{ Request::is('contact/create') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('/contact/create')}}">Contact</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="nav-item {{ Request::is('location') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('/location')}}">Location</a>
                            <div class="underline-bar"></div>
                        </li>
                    </ul>
                </div>
            </nav>  
        </div>      
    </div>
    
    @yield('container')

    <!-- start footer -->
    <div class="container footer-cont">
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h2>DenMarket <span color="#FF4A4A">Sport</span></h2>
                    <p class="text-justify">A great fit for powerfull players</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Explore</h6>
                    <ul class="footer-links">
                        <li><a href="{{url('/home')}}">Home</a></li>
                        <li><a href="{{url('/product/football')}}">Product</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="{{url('/location')}}">Location</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Contact Us</h6>
                    <ul class="footer-links">
                        <li><a href="#">Denpasar - Bali</a></li>
                        <li><a href="mailto:anggatusanadji@gmail.com?subject=Halo!%20Saya%20membutuhkan%20bantuan">denmarket@gmail.com</a></li>
                        <li><a href="https://wa.me/083114803923?text=Halo!%20Saya%20membutuhkan%20bantuan">083-114-803-923</a></li>
                    </ul>
                </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by DenMarket Sport.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a></li>   
                    </ul>
                </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </body>
</html>