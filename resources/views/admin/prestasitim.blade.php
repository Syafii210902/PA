@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Prestasi</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Kelompok</a>
        </li>
        <li class="breadcrumb-item active">List</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> List Prestasi</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Tim</th>
                  <th>NRP</th>
                  <th>Nama</th>
                  <th>Prodi</th>
                  <th>Jurusan</th>
                  <th>Kelas</th>
                  <th>Nama Lomba</th>
                  <th>Kategori</th>
                  <th>Prestasi</th>
                  <th>Tahun</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($prestasis as $prestasi)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $prestasi->tim->nama_tim }}</td>
                      <?php 
                        $pt = $prestasi->tim->users->where('pivot.status', '1')->where('pivot.tim_id', $prestasi->tim->id);
                      ?>
                      <td>
                        <ul style="padding: 0">{{ $prestasi->tim->user->mahasiswa->nrp }}</ul>
                        @foreach ($pt as $data)
                          <ul style="padding: 0">{{ $data->mahasiswa->nrp }}</ul>
                        @endforeach
                      </td>
                      <td><ul style="padding: 0">{{ $prestasi->tim->user->mahasiswa->full_name }} (Ketua)</ul>
                          @foreach ($pt as $data)
                            <ul style="padding: 0">{{ $data->mahasiswa->full_name }}</ul>
                          @endforeach
                      </td>
                      <td>
                        <ul style="padding: 0">{{ $prestasi->tim->user->mahasiswa->program->programstudi }}</ul>
                        @foreach ($pt as $data)
                          <ul style="padding: 0">{{ $data->mahasiswa->program->programstudi }}</ul>
                        @endforeach
                      </td>
                      <td>
                        <ul style="padding: 0">{{ $prestasi->tim->user->mahasiswa->jurusan->namajurusan }}</ul>
                        @foreach ($pt as $data)
                          <ul style="padding: 0">{{ $data->mahasiswa->jurusan->namajurusan }}</ul>
                        @endforeach
                      </td>
                      <td>
                        <ul style="padding: 0">{{ $prestasi->tim->user->mahasiswa->kelas }}</ul>
                        @foreach ($pt as $data)
                          <ul style="padding: 0">{{ $data->mahasiswa->kelas }}</ul>
                        @endforeach
                      </td>
                      <td>{{ $prestasi->tim->lomba->nama_lomba }}</td>
                      <td>{{ $prestasi->tim->bidang }}</td>
                      <td>{{ $prestasi->keterangan }}</td>
                      <td>{{ $prestasi->tahun }}</td>
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