@extends('layout/main-dashboard')

@section('title', 'Dashboard')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Content Row -->
  <div class="card shadow mb-4 col-11 mx-auto">
    <div class="row">

      <div class="card-header col-12 bg-white my-1">
        <h3 class="mb-0 d-inline text-danger">Form Tambah Data Kategori</h3>
        <a href="{{ url('dashboard/kategori') }}" type="submit" class="btn float-right btn-sm btn-danger"
          style="width:33px; font-weight:bold;">X</a>
      </div>

      <div class="card-body">
        <form method="post" action="{{ url('dashboard/kategori') }}">
          @csrf
          <div class="form-group">
            <label class="text-dark" for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori"
              placeholder="Masukkan Kategori" name="nama_kategori" value="{{old('nama_kategori')}}">
            @error('nama_kategori')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
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