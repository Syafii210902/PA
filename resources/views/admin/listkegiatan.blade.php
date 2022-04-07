@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Kegiatan</a>
        </li>
        <li class="breadcrumb-item active">List</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> List Kegiatan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Deskripsi</th>
                  <th>Deadline</th>
                  <th>Info</th>
                  <th>Poster</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($kegiatans as $kegiatan)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $kegiatan->nama_kegiatan }}</td>
                        <td style="text-align: justify">{{ $kegiatan->deskripsi }}</td>
                        <td>{{ $kegiatan->deadline }}</td>
                        <td>{{ $kegiatan->info }}</td>
                        <td><img src="{{ asset('assets/img/'.$kegiatan->poster) }}" alt="" style="width: 100px;"></td>
                        <td>
                        <a href="" data-toggle="modal" data-target="#modalEdit-{{ $kegiatan->id }}" style="font-size: 20px; margin-left: 10px;"><i class="fa fa-edit"></i></a>
                        <a href="" style="font-size: 20px; margin-left: 10px;"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <section>
                      <!-- Modal -->
                      <div class="modal fade" id="modalEdit-{{ $kegiatan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <form action="">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="mb-3">
                                              <label for="namakegiatan" class="col-form-label">Nama</label>
                                              <input type="text" class="form-control" value="{{ $kegiatan->nama_kegiatan }}" id="namakegiatan" name="namakegiatan">
                                              <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                              <textarea type="text" style="height: 150px" class="form-control" id="deskripsi" name="deskripsi">{{ $kegiatan->deskripsi }}</textarea>
                                              <label for="deadline" class="col-form-label">Deadline</label>
                                              <input type="date" class="form-control" value="{{ $kegiatan->deadline }}" id="deadline" name="deadline">
                                              <label for="info" class="col-form-label">Info</label>
                                              <input type="text" class="form-control" value="{{ $kegiatan->info }}" id="info" name="info">
                                              <label for="poster" class="col-form-label">Poster</label>
                                              <input type="file" class="form-control" value="{{ $kegiatan->poster }}" id="poster" name="poster">
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </section>
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