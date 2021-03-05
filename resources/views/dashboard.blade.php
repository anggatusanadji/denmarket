@extends('layout.main-dashboard')
@section('title', 'Dashboard')

@section('container')
 <!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col">
              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Produk</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline">Jumlah Data : {{$jumlah_produk}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-shoe-prints fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
        <a href="{{url('dashboard/produk')}}" class="text-decoration-none">
          <div class="card-footer">
            <span class="text-danger">View Details</span>
            <span style="float:right"><i class="fa fa-arrow-circle-right text-danger"></i></span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kategori</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline">Jumlah Data : {{$jumlah_kategori}}</div>
            </div>
            <div class="col-auto">
              <i class="fa fa-th-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
        <a href="{{url('dashboard/kategori')}}" class="text-decoration-none">
          <div class="card-footer">
            <span class="text-success">View Details</span>
            <span style="float:right"><i class="fa fa-arrow-circle-right text-success"></i></span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pesan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline">Jumlah Data : {{$jumlah_pesan}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comment-dots fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
        <a href="{{url('dashboard/pesan')}}" class="text-decoration-none">
          <div class="card-footer">
            <span class="text-info">View Details</span>
            <span style="float:right"><i class="fa fa-arrow-circle-right text-info"></i></span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline">Jumlah Data : {{$jumlah_admin}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-address-card fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
        <a href="{{url('dashboard/admin')}}" class="text-decoration-none">
          <div class="card-footer">
            <span class="text-warning">View Details</span>
            <span style="float:right"><i class="fa fa-arrow-circle-right text-warning"></i></span>
          </div>
        </a>
      </div>
    </div>

    </div>
  </div>

</div>
@endsection