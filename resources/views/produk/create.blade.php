@extends('layout/main-dashboard')

@section('title', 'Dashboard')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="card shadow mb-4 col-11 mx-auto">
        <div class="row">

            <div class="card-header col-12 bg-white my-1">
                <h3 class="mb-0 d-inline text-danger">Form Tambah Data Produk</h3>
                <a href="{{ url('dashboard/kategori') }}" type="submit" class="btn float-right btn-sm btn-danger"
                    style="width:33px; font-weight:bold;">X</a>
            </div>

            <div class="card-body">
                <form method="post" action="{{ url('dashboard/produk') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="text-dark" for="nama_produk">Nama</label>
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror"
                            id="nama_produk" placeholder="Masukkan Nama Produk" name="nama_produk"
                            value="{{old('nama_produk')}}">
                        @error('nama_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="deskripsi_produk">Deskripsi Produk</label>
                        <textarea type="text" class="form-control  @error('deskripsi_produk') is-invalid @enderror"
                            id="deskripsi_produk" placeholder="Masukkan Deskripsi" name="deskripsi_produk"
                            value="{{old('deskripsi_produk')}}"></textarea>
                        @error('deskripsi_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="kategori_id">Kategori</label>
                        <select name="kategori_id" id="kategori_id"
                            class="form-control  @error('kategori_id') is-invalid @enderror">
                            <option>- Pilih -</option>
                            @foreach($kategori as $ktg)
                            <option value="{{ $ktg->id }}"> {{ $ktg->nama_kategori }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="size_produk">Size</label>
                        <input type="text" class="form-control @error('size_produk') is-invalid @enderror"
                            id="size_produk" placeholder="Masukkan Ukuran Produk" name="size_produk"
                            value="{{old('size_produk')}}">
                        @error('size_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="harga_produk">Harga Produk</label>
                        <input type="text" class="form-control @error('harga_produk') is-invalid @enderror"
                            id="harga_produk" placeholder="Masukkan Harga Produk" name="harga_produk"
                            value="{{old('harga_produk')}}">
                        @error('harga_produk')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="tipe_id">Tipe</label>
                        <select name="tipe_id" id="tipe_id"
                            class="form-control  @error('tipe_id') is-invalid @enderror">
                            <option value>- Pilih -</option>
                            @foreach($tipe as $tpe)
                            <option value="{{ $tpe->id }}">{{ $tpe->tipe_produk }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="gambar_produk">Gambar</label>
                        <input type="file" name="gambar_produk" class="form-control" id="gambar_produk">
                    </div>

                    <button type="submit" class="btn btn-danger col-lg-12">Tambah Data!</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->
@endsection