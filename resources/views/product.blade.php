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

        <title>Product</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/home')}}">Home</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="nav-item active">
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

            <div class="product">
                <div class="container">
                    <div class="row">
                        <ul class="col-lg-6 offset-lg-3 d-flex justify-content-around ul-product">
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
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
                                </div>
                                <div class="contentBox">
                                    <h3>Football Shoes</h3>
                                    <h2 class="price"><small>Rp.</small> 200.000</h2>
                                    <a href="#" class="buy">Buy Now</a>
                                </div>
                            </div>
                            <div class="card product-card">
                                <div class="imgBox">
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
                                </div>
                                <div class="contentBox">
                                    <h3>Football Shoes</h3>
                                    <h2 class="price"><small>Rp.</small> 200.000</h2>
                                    <a href="#" class="buy">Buy Now</a>
                                </div>
                            </div>
                            <div class="card product-card">
                                <div class="imgBox">
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
                                </div>
                                <div class="contentBox">
                                    <h3>Football Shoes</h3>
                                    <h2 class="price"><small>Rp.</small> 200.000</h2>
                                    <a href="#" class="buy">Buy Now</a>
                                </div>
                            </div>
                            <div class="card product-card">
                                <div class="imgBox">
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
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
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
                                </div>
                                <div class="contentBox">
                                    <h3>Football Shoes</h3>
                                    <h2 class="price"><small>Rp.</small> 200.000</h2>
                                    <a href="#" class="buy">Buy Now</a>
                                </div>
                            </div>
                            <div class="card product-card">
                                <div class="imgBox">
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
                                </div>
                                <div class="contentBox">
                                    <h3>Football Shoes</h3>
                                    <h2 class="price"><small>Rp.</small> 200.000</h2>
                                    <a href="#" class="buy">Buy Now</a>
                                </div>
                            </div>
                            <div class="card product-card">
                                <div class="imgBox">
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
                                </div>
                                <div class="contentBox">
                                    <h3>Football Shoes</h3>
                                    <h2 class="price"><small>Rp.</small> 200.000</h2>
                                    <a href="#" class="buy">Buy Now</a>
                                </div>
                            </div>
                            <div class="card product-card">
                                <div class="imgBox">
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
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
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
                                </div>
                                <div class="contentBox">
                                    <h3>Football Shoes</h3>
                                    <h2 class="price"><small>Rp.</small> 200.000</h2>
                                    <a href="#" class="buy">Buy Now</a>
                                </div>
                            </div>
                            <div class="card product-card">
                                <div class="imgBox">
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
                                </div>
                                <div class="contentBox">
                                    <h3>Football Shoes</h3>
                                    <h2 class="price"><small>Rp.</small> 200.000</h2>
                                    <a href="#" class="buy">Buy Now</a>
                                </div>
                            </div>
                            <div class="card product-card">
                                <div class="imgBox">
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
                                </div>
                                <div class="contentBox">
                                    <h3>Football Shoes</h3>
                                    <h2 class="price"><small>Rp.</small> 200.000</h2>
                                    <a href="#" class="buy">Buy Now</a>
                                </div>
                            </div>
                            <div class="card product-card">
                                <div class="imgBox">
                                    <img src="{{ asset('image/futsal4.png') }}" alt="" class="shoe">
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
    
  