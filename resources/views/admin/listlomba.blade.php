@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Lomba</a>
        </li>
        <li class="breadcrumb-item active">List</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> List Lomba</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Deskripsi</th>
                  <th>Tingkat</th>
                  <th>Deadline</th>
                  <th>Info</th>
                  <th>Poster</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($lombas as $lomba)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $lomba->nama_lomba }}</td>
                        <td style="text-align: justify">{{ $lomba->deskripsi }}</td>
                        <td>{{ $lomba->tingkat }}</td>
                        <td>{{ $lomba->deadline }}</td>
                        <td>{{ $lomba->info }}</td>
                        <td><img src="{{ asset('assets/img/'.$lomba->poster) }}" alt="" style="width: 100px;"></td>
                        <td>
                        <a href="" data-toggle="modal" data-target="#modalEdit-{{ $lomba->id }}" style="font-size: 20px; margin-left: 10px;"><i class="fa fa-edit"></i></a>
                        <a href="" style="font-size: 20px; margin-left: 10px;"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <section>
                      <!-- Modal -->
                      <div class="modal fade" id="modalEdit-{{ $lomba->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                              <label for="namalomba" class="col-form-label">Nama</label>
                                              <input type="text" class="form-control" value="{{ $lomba->nama_lomba }}" id="namalomba" name="namalomba">
                                              <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                              <textarea type="text" style="height: 150px" class="form-control" id="deskripsi" name="deskripsi">{{ $lomba->deskripsi }}</textarea>
                                              <label for="tingkat" class="col-form-label">Tingkat</label>
                                              <input type="text" class="form-control" value="{{ $lomba->tingkat }}" id="tingkat" name="tingkat">
                                              <label for="deadline" class="col-form-label">Deadline</label>
                                              <input type="date" class="form-control" value="{{ $lomba->deadline }}" id="deadline" name="deadline">
                                              <label for="info" class="col-form-label">Info</label>
                                              <input type="text" class="form-control" value="{{ $lomba->info }}" id="info" name="info">
                                              <label for="poster" class="col-form-label">Poster</label>
                                              <input type="file" class="form-control" value="{{ $lomba->poster }}" id="poster" name="poster">
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