@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add</li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-file"></i>Add Kegiatan</h2>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="namalomba">Nama Kegiatan</label>
                            <input type="text" class="form-control" placeholder="Nama" name="namalomba" id="namalomba" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori" required>
                                <option value="it" disabled selected>Select Category</option>
                                <option value="it">Teknik Informatika</option>
                                <option value="telkom">Teknik Komputer</option>
                                <option value="elin">Elektro Industri</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="deadline">Deadline</label>
                            <input type="date" class="form-control" name="deadline" id="deadline">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="info">Info</label>
                            <input type="text" class="form-control" placeholder="Info Selengkapnya" name="info" id="indo">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" placeholder="Description" name="description" id="description">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="poster">Poster</label>
                            <input type="file" class="form-control" name="poster" id="poster">
                        </div>
                    </div>
                    <p><input type="submit" class="btn_1 medium"></p>
            </div>
        </form>
        </div>
        </div>
        <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->
@endsection