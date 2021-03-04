@extends('layout/main-dashboard')

@section('title', 'Dashboard')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Content Row -->

    <div class="card col-12 mx-auto mb-4">
        <div class="row">
            <div class="card-header col-12 bg-white">
                <h3 class="mb-0 d-inline text-danger">Detail Produk</h3>
                <a href="{{ url('dashboard/produk') }}" type="submit" class="btn float-right btn-sm btn-danger" style="width:33px; font-weight:bold;">X</a>
            </div>

            <div class="card-header text-center bg-white mx-auto py-4" style="width:100%">
                <div class="card mx-auto py-2">
                    <img src="{{ asset('image/product/'.$produk->gambar_produk) }}" width="250px" class="mx-auto mt-3 mb-3 rounded-lg">
                    <h4>{{ $produk->nama_produk}}</h4>
                </div>
            </div>

            <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Deskripsi Produk</th>
                        <td>{{ $produk->deskripsi_produk }}</td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>{{ $produk->kategori->nama_kategori }}</td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <td>{{ $produk->size_produk }}</td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>{{ $produk->harga_produk }}</td>
                    </tr>
                    <tr>
                        <th>Tipe</th>
                        <td>{{ $produk->tipe->tipe_produk }}</td>
                    </tr>
                </thead>
            </table> 
            </div>
        </div>
    </div>
  </div>

</div>
@endsection