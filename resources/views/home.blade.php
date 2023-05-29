@extends('layout.header')

@section('title' ,'Home')

@section('container')
<div class="container" style="margin-top: 80px">
    <div class="hero">
        <div class="row reverse-column h-100">
            <div class="hero-text col-lg-5 col-md-5 col-12 mt-5 d-flex flex-column justify-content-center"
                data-aos="fade-right" data-aos-duration="1000">
                <div>
                    <p class="font-weight-normal welcome-hero">Welcome To DenMarket Sport</p>
                    <p class="font-weight-bold title-hero">It’s okay to be a little obsessed with shoes!</p>
                    <p class="font-weight-normal text-hero">be a force in the court with your shoes</p>
                </div>
                <div class="explore">
                    <a type="button" class="btn mr-2" href="#trending"><i class="fas fa-chevron-down"
                            style="color:#fff;"></i></a>
                    <a class="font-weight-normal mr-2" href="#trending">Explore More</a>
                    <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
                </div>
                <div class="elipse mt-5">
                    <img src="{{ asset('image/Elipse1.png') }}" alt="" style="height:80px">
                </div>
            </div>
            <div class="col-lg-7 col-12 img" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('image/Hero.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="quality" data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-lg-6 col-12 img">
                <img src="{{ asset('image/MaskGroup.png') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-6 col-12 d-flex flex-column justify-content-center">
                <p class="font-weight-bold title-quality">With quality ingredients</p>
                <p class="font-weight-normal text-quality">a great fit for powerful players who want good ankle support
                    from a shoe that still feels light. The sculpted, padded collar and exterior heel counter provide a
                    stable fit, while visible cushioning units under the forefoot return energy with every step. </p>
            </div>
        </div>
    </div>

    <div class="trending">
        <div class="container"">
                <div class=" row" id="trending">
            <p class="font-weight-bold trending-title ml-auto" id="scroll-bawah"><span
                    style="color: #FF4A4A">Trending</span> Collection</p>
        </div>

        <div class="row">
            <div class="MultiCarousel" data-items="1,3,4,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    @foreach($produk as $prd)
                    <div class="item">
                        <div class="pad15 box">
                            <a href="{{ url('product/detail-product/'.$prd->id) }}">
                                <img src="{{ asset('image/product/'.$prd->gambar_produk) }}" alt="" class="w-100 h-100">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="btn leftLst"><i class="fa fa-arrow-left fa-sm" aria-hidden="true"></i></button>
                <button class="btn rightLst"><i class="fa fa-arrow-right fa-sm" aria-hidden="true"></i></button>
            </div>
        </div>

        <div class="row">
            <div class="show mx-auto mt-3" data-aos="fade-up" data-aos-duration="750">
                <a type="button" class="btn mr-2" href="{{url('product/football')}}"><i class="fas fa-chevron-down"
                        style="color:#fff;"></i></a>
                <a class="font-weight-normal mr-2" href="{{url('product/football')}}">Show More</a>
                <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
            </div>
        </div>
    </div>
</div>

<section class="testimonials">
    <div class="container">
        <div class="heading wow fadeIn text-center">
            <h2>Our
                <span>Testimonials</span>
            </h2>
            <p>Some testimonials from customers who have purchased our products</p>
        </div>
        <div class="row">
            <!-- Box-1 -->
            <div class="col-lg-6">
                <div class="box d-flex align-items-center wow fadeInLeft h-100">
                    <div class="content">
                        <h3 class="text-danger">Gana Untaran</h3>
                        <p>A very good product, prioritizing quality and user comfort</p>
                    </div>
                    <div class="image"><img src="{{asset('image/testi1.png')}}" alt="" class="img-fluid"></div>
                </div>
            </div>
            <!-- Box-2 -->
            <div class="col-lg-6">
                <div class="box d-flex align-items-center wow fadeInRight h-100">
                    <div class="content">
                        <h3 class="text-danger">Surya Amerta</h3>
                        <p>a good shop, selling quality products at the right price</p>
                    </div>
                    <div class="image h-80"><img src="{{asset('image/testi2.png')}}" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Box-3 -->
            <div class="col-lg-6">
                <div class="box d-flex align-items-center wow fadeInLeft h-100">
                    <div class="content">
                        <h3 class="text-danger">Wahyu Purnama</h3>
                        <p>very trustworthy shop, great. I will buy it here again</p>
                    </div>
                    <div class="image"><img src="{{asset('image/testi3.png')}}" alt="" class="img-fluid"></div>
                </div>
            </div>
            <!-- Box-4 -->
            <div class="col-lg-6">
                <div class="box d-flex align-items-center wow fadeInRight h-100">
                    <div class="content">
                        <h3 class="text-danger">Prihandana</h3>
                        <p>I ordered, and the item has been sent, really great</p>
                    </div>
                    <div class="image"><img src="{{asset('image/testi4.png')}}" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <div class="discount">
    <div class="card" data-aos="zoom-in" data-aos-duration="500">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 p-5">
                <img src="{{ asset('image/discount banner.png') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center col-discount">
                <p class="font-weight-bold title-discount">Get Your Shoes Now On <span style="color:#FF4A4A">15%</span>
                    Discount</p>
                <p class="font-weight-normal text-discount">Come on, choose your shoes immediately</p>
                <div class="button-buy mt-2">
                    <a type="button" class="btn mr-2" href="{{url('product/football')}}"><i class="fas fa-plus"
                            style="color:#fff;"></i></a>
                    <a class="font-weight-normal mr-2" href="{{url('product/football')}}">Buy Now</a>
                    <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
                </div>
            </div>
        </div>
    </div>
</div> --}}
</div>

<script>
    $(document).ready(function () {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });

        ResCarouselSize();




        $(window).resize(function () {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function () {
                id = id + 1
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 992) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                }
                else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                $(this).find(itemClass).each(function () {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            }
            else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }

    });
</script>
<!-- end container -->
@endsection