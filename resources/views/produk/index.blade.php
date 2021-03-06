@extends('layout/main-dashboard')

@section('title', 'Dashboard')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Content Row -->
    
    <!-- ini tambah data -->         
    <a href="{{ url('dashboard/produk/create') }}" class="btn btn-danger my-3"><i class="fas fa-plus-square"></i> Tambah Data Produk Sepatu</a> 

    <!-- Flash -->
    @if(session()->get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session()->get('status') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger" style="display:inline;">Data Produk Sepatu</h6>
        </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" cellspacing="0">
                <thead>
                  <tr class="text-center">                        
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Gambar</th>
                      <th scope="col" width="120px">Aksi</th>
                  </tr>
                </thead>
              <tbody>
                  @foreach($produk as $prd)
                  <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $prd->nama_produk }}</td>
                      <td>{{ $prd->kategori->nama_kategori }}</td>
                      @php
                          $harga = number_format($prd->harga_produk)
                      @endphp
                      <td>Rp. {{ $harga }}</td>
                      <td><img src="{{ asset('image/product/'.$prd->gambar_produk) }}" width="100px"></td>
                      <td class="text-center">  
                        <a href="{{ url('dashboard/produk/'.$prd->id) }}" class="btn btn-info">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ url('dashboard/produk/'.$prd->id.'/edit') }}" type="button" class="btn btn-primary">
                          <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ url('dashboard/produk/'.$prd->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
              </table>
            </div>
          </div>
      </div> 
  </div>
</div>
<!-- End of Main Content -->
@endsection