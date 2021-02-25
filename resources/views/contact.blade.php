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

        <title>Contact</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/product')}}">Product</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                            <div class="underline-bar"></div>
                        </li>
                        <li class="nav-item active">
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
            <div class="contact-us">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="card-deck">
                                <div class="card" style="width: 18rem;">
                                    <i class="fas fa-mobile"></i>
                                    <div class="card-body">
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
    
  