@extends('layout.header')
@section('title', 'Detail')

@section('container')
    <div class="container" style="margin-top: 80px">
        <div class="row mt-4 container-detail">
            <div class="col-lg-6 col-12 border d-flex justify-content-center align-items-center">    
                <div>
                    <img src="{{ asset('image/product/'.$produk->gambar_produk) }}" alt=""
                    class="center-block d-block mx-auto">   
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <h1>
                    {{ $produk->nama_produk}}
                </h1>
                <p>
                    {{ $produk->deskripsi_produk }}
                </p>
                <p>
                    Size : <br>
                    {{ $produk->size_produk }}
                </p>
                @php
                    $harga = number_format($produk->harga_produk)
                @endphp
                <p>
                    Harga : <br>
                    Rp. {{ $harga }}
                </p>
                <div class="button-buy mt-2">
                    <a type="button" class="btn mr-2" href="https://wa.me/+6283114803923?text=Halo%20Saya%20ingin%20memesan%20sepatu%20{{$produk->nama_produk}}"><i class="fas fa-plus" style="color:#fff;"></i></a>
                    <a class="font-weight-normal mr-2" href="https://wa.me/+6283114803923?text=Halo%20Saya%20ingin%20memesan%20sepatu%20{{$produk->nama_produk}}">Buy Now</a>
                    <img src="{{ asset('image/line.svg') }}" alt="" style="width:30px;">
                </div>
            </div>
        </div>
    </div>
@endsection