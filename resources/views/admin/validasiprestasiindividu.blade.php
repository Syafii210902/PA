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
        <li class="breadcrumb-item active">Individu</li>
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
                  <th>NRP</th>
                  <th>Nama</th>
                  <th>Prodi</th>
                  <th>Jurusan</th>
                  <th>Kelas</th>
                  <th>Nama Lomba</th>
                  <th>Kategori</th>
                  <th>Prestasi</th>
                  <th>Tahun</th>
                  <th>Sertifikat</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($prestasiIndividus as $prestasiIndividu)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $prestasiIndividu->user->mahasiswa->nrp }}</td>
                        <td>{{ $prestasiIndividu->user->mahasiswa->full_name }}</td>
                        <td>{{ $prestasiIndividu->user->mahasiswa->program->programstudi }}</td>
                        <td>{{ $prestasiIndividu->user->mahasiswa->jurusan->namajurusan }}</td>
                        <td>{{ $prestasiIndividu->user->mahasiswa->kelas }}</td>
                        <td>{{ $prestasiIndividu->lomba->nama_lomba }}</td>
                        <td>{{ $prestasiIndividu->bidang }}</td>
                        <td>{{ $prestasiIndividu->keterangan }}</td>
                        <td>{{ $prestasiIndividu->tahun }}</td>
                        <td><img src="{{ asset('storage/'.$prestasiIndividu->sertifikat) }}" alt="" style="width: 100px;"></td>
                        <td>
                          <div class="switchToggle">
                            <select name="status[]" id="status">
                              <option value="0" selected>No</option>
                              <option value="1" {{ ($prestasiIndividu->status === 1) ? 'selected' : ''}}>Yes</option>
                              <input type="hidden" name="user_id[]" value="{{ $prestasiIndividu->user->id }}">
                          </select>
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