@extends('layout/main-dashboard')

@section('title', 'Dashboard')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Content Row -->

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
          <h6 class="m-0 font-weight-bold text-danger">Data Pesan</h6>
        </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>                        
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($kontak as $ktk)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $ktk->nama}}</td>
                            <td>{{ $ktk->email}}</td>
                            <td>{{ $ktk->pesan}}</td>
                            <td class="text-center">
                                <a href="{{ url('dashboard/pesan/'. $ktk->id) }}" class="btn btn-danger">
                                    <i class="fa fa-trash"> Hapus</i>
                                </a>
                         
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

