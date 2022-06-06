@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Prestasi</a>
        </li>
        <li class="breadcrumb-item">Validasi</li>
        <li class="breadcrumb-item active">Tim</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Validasi</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Tim</th>
                  <th>Ketua</th>
                  <th>Anggota</th>
                  <th>Nama Lomba</th>
                  <th>Kategori</th>
                  <th>Prestasi</th>
                  <th>Tahun</th>
                  <th>Sertifikat</th>
                  <th>Validate</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($prestasiTims as $prestasiTim)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $prestasiTim->tim->nama_tim }}</td>
                        <td>{{ $prestasiTim->tim->user->mahasiswa->full_name }}</td>
                        <td>
                          <?php 
                            $pt = $prestasiTim->tim->users->where('pivot.status', '1')->where('pivot.tim_id', $prestasiTim->tim->id);
                          ?>
                          @foreach ($pt as $data)
                            <ul style="padding: 0">{{ $data->mahasiswa->full_name }}</ul>
                          @endforeach
                          
                          
                        </td>
                        <td>{{ $prestasiTim->tim->lomba->nama_lomba }}</td>
                        <td>{{ $prestasiTim->tim->bidang }}</td>
                        <td>{{ $prestasiTim->keterangan }}</td>
                        <td>{{ $prestasiTim->tahun }}</td>
                        <td><img src="{{ asset('storage/'.$prestasiTim->sertifikat) }}" alt="" style="width: 100px;"></td>
                        <td>
                          <div class="switchToggle">
                            <input type="checkbox" id="switch{{ $loop->index + 1 }}" {{ ($prestasiTim->status === 1) ? 'checked' : ''}}>
                            <label for="switch{{ $loop->index + 1 }}">Toggle</label>
                          </div>
                        </td>
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