@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Prestasi</a>
        </li>
        <li class="breadcrumb-item active">List</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> List Prestasi</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NRP</th>
                  <th>Nama</th>
                  <th>Nama Lomba</th>
                  <th>Kategori</th>
                  <th>Prestasi</th>
                  <th>Tahun</th>
                  <th>Sertifikat</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($prestasis as $prestasi)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $prestasi->user->mahasiswa->nrp }}</td>
                        <td>{{ $prestasi->user->mahasiswa->full_name }}</td>
                        <td>{{ $prestasi->lomba->nama_lomba }}</td>
                        <td>{{ $prestasi->bidang }}</td>
                        <td>{{ $prestasi->keterangan }}</td>
                        <td>{{ $prestasi->tahun }}</td>
                        <td><img src="{{ asset('assets/img/'.$prestasi->sertifikat) }}" alt="" style="width: 100px;"></td>
                    </tr>
                  @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->
@endsection