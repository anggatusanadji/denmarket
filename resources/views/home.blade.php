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

        <title>Home</title>
    </head>
    <body>
        <div class="container">
            <!-- start nav -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand font-weight-bold" href="#"><span style=color:#FF4A4A>DenMarket</span> Sport</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-denmarket" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/home')}}">Home</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/product')}}">Product</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/location')}}">Location</a>
                            <div class="underline-bar"></div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end nav -->
            
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
                <div class="container">
                    <div class="row">
                        <p class="font-weight-bold trending-title ml-auto"><span style="color: #FF4A4A">Trending</span> Collection</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="card-deck">
                            <div class="card col-lg-6 col-12">
                                <img src="{{ asset('image/futsal1.png') }}" alt="" class="w-100 h-100">
                            </div>
                            <div class="card col-lg-6 col-12">
                                <img src="{{ asset('image/futsal2.png') }}" alt="" class="w-100 h-100">
                            </div>
    
                            <div class="card col-lg-6 col-12">
                                <img src="{{ asset('image/futsal3.png') }}" alt="" class="w-100 h-100">
                            </div>
    
                            <div class="card col-lg-6 col-12">
                                <img src="{{ asset('image/futsal4.png') }}" alt="" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="show mx-auto mt-3">
                            <a type="button" class="btn mr-2" ><i class="fas fa-chevron-down" style="color:#fff;"></i></a>
                            <a class="font-weight-normal mr-2">Explore More</a>
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
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry
                            when an unknown printer took
                            <br>
                            a galley of type and scrambled it to make a type specimen book It has survived
                            not only five centuries.</p>
                    </div>
                    <div class="row">
                        <!-- Box-1 -->
                        <div class="col-lg-6">
                            <div class="box d-flex align-items-center wow fadeInLeft">
                                <div class="content">
                                    <h3>Your Name
                                        <span>Graphic Designer</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer</p>
                                    <div class="social d-flex">
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-dribbble"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="image"><img src="https://i.ibb.co/8x9xK4H/team.jpg" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                        <!-- Box-2 -->
                        <div class="col-lg-6">
                            <div class="box d-flex align-items-center wow fadeInRight">
                                <div class="content">
                                    <h3>Your Name
                                        <span>Graphic Designer</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer</p>
                                    <div class="social d-flex">
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-dribbble"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="image"><img src="https://i.ibb.co/8x9xK4H/team.jpg" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Box-3 -->
                        <div class="col-lg-6">
                            <div class="box d-flex align-items-center wow fadeInLeft">
                                <div class="content">
                                    <h3>Your Name
                                        <span>Graphic Designer</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer</p>
                                    <div class="social d-flex">
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-dribbble"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="image"><img src="https://i.ibb.co/8x9xK4H/team.jpg" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                        <!-- Box-4 -->
                        <div class="col-lg-6">
                            <div class="box d-flex align-items-center wow fadeInRight">
                                <div class="content">
                                    <h3>Your Name
                                        <span>Graphic Designer</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer</p>
                                    <div class="social d-flex">
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#0" class="icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-dribbble"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="image"><img src="https://i.ibb.co/8x9xK4H/team.jpg" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->

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
                            <li><a href="{{url('/product')}}">Product</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/location')}}">Location</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Contact Us</h6>
                        <ul class="footer-links">
                            <li><a href="#">Denpasar - Bali</a></li>
                            <li><a href="#">denmarket@gmail.com</a></li>
                            <li><a href="#">083-114-803-923</a></li>
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
    