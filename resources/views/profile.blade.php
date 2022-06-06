@extends('layout.app')

@section('content')
    <!-- ======= Top Section ======= -->
    <section id="top" class="top">
        <div class="container">
            <h2>Hello, {{ $user[0]->username }}</h2>
            <p>This is your profile page. You can set your profile to make other people
                know about you and your experience.</p>
        </div>
    </section>

    <!-- ======= Bottom Section ======= -->
    <section id="bottom" class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="account">
                        <div class="box">
                            <div class="top-card">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>My Account</h3>
                                    </div>
                                    <div class="col-6">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#modalaccount"><div class="top-button" >Edit</div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="body-card">
                                <h4>USER INFORMATION</h4>
                                <form action="" method="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Username</p>
                                            <input type="text" name="username" value="{{ $user[0]->username }}" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Email</p>
                                            <input type="text" name="email" value="{{ $user[0]->email }}" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Full Name</p>
                                            <input type="text" name="fullname" value="{{ $user[0]->mahasiswa->full_name }}" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Nrp</p>
                                            <input type="text" name="nrp" value="{{ $user[0]->mahasiswa->nrp }}" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Kelas</p>
                                            <input type="text" name="kelas" value="{{ $user[0]->mahasiswa->kelas }} {{ $user[0]->mahasiswa->program->programstudi }} {{ $user[0]->mahasiswa->jurusan->alias }} {{ $user[0]->mahasiswa->paralel }}" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Jurusan</p>
                                            <input type="text" name="jurusan" value="{{ $user[0]->mahasiswa->jurusan->namajurusan }}" readonly>
                                        </div>
                                        <div class="col-12">
                                            <p>About</p>
                                            <input type="text" name="about" value="{{ $user[0]->mahasiswa->bio }}" readonly>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <section>
                                <div class="modal fade" id="modalaccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Account</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="/updateaccount" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="username" class="col-form-label">Username</label>
                                                    <input type="text" class="form-control" value="{{ $user[0]->username }}" name="username" id="username">
                                                    <label for="email" class="col-form-label">Email</label>
                                                    <input type="email" class="form-control" value="{{ $user[0]->email }}" name="email" id="email">
                                                    <label for="desc" class="col-form-label">About</label>
                                                    <input type="text" class="form-control" value="{{ $user[0]->mahasiswa->bio }}" name="bio" id="desc">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                            </section>
                        </div>
                    </div>
                    <div class="prestasi">
                        <div class="box">
                            <div class="top-card">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Prestasi</h3>
                                    </div>
                                    <div class="col-6">
                                            <a href="" class="join" data-bs-toggle="modal" data-bs-target="#modalprestasi"><div class="top-button">Add</div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="body-card">
                                <div class="row">
                                    <div class="col-11">
                                        @if($prestasis->count() == 0)
                                            <p>This is your profile page. You can set your profile to make other people know about
                                            you and your experience.</p>
                                        @endif
                                        @foreach($prestasis as $prestasi)
                                            <p>{{ $prestasi->keterangan }} {{ $prestasi->bidang }} - {{ $prestasi->lomba->nama_lomba }} {{ $prestasi->tahun }}</p>
                                        @endforeach
                                    </div>
                                    <div class="col-1">
                                        @foreach($prestasis as $prestasi)
                                            <a href="" style="font-size: 25px; color: #7a7a7a;"><i class='bx bxs-edit-alt'></i></a>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Prestasi --}}
                    <section>
                        <div class="modal fade" id="modalprestasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel">Prestasi</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ url('addprestasi') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama-lomba" class="col-form-label">Nama Lomba</label>
                                            <input type="text" class="typehead form-control" id="nama_lomba" name="nama_lomba" required>
                                            <label for="kategori" class="col-form-label">Kategori</label>
                                            <input type="text" class="form-control" id="kategori" name="kategori">
                                            <label for="prestasi" class="col-form-label">Prestasi</label>
                                            <input type="text" class="form-control" id="prestasi" name="prestasi" required>
                                            <label for="tingkat" class="col-form-label">Tingkat</label>
                                            <input type="text" class="form-control" id="tingkat" name="tingkat" required>
                                            <label for="tahun" class="col-form-label">Tahun</label>
                                            <input type="text" class="form-control" id="tahun" name="tahun" required>
                                            <label for="sertifikat" class="col-form-label">Sertifikat</label>
                                            <input type="file" class="form-control" name="sertifikat" id="sertifikat" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                              </div>
                            </div>
                          </div>
                    </section>
                    {{-- End Modal Prestasi --}}
                    <div class="pengalaman">
                        <div class="box">
                            <div class="top-card">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Pengalaman</h3>
                                    </div>
                                    <div class="col-6">
                                            <a href="" class="join"data-bs-toggle="modal" data-bs-target="#modalpengalaman"><div class="top-button">Add</div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="body-card">
                                <div class="row">
                                    <div class="col-11">
                                        @if($pengalamans->count() == 0)
                                            <p>This is your profile page. You can set your profile to make other people know about
                                            you and your experience.</p>
                                        @endif
                                        @foreach($pengalamans as $pengalaman)
                                            <p>{{ $pengalaman->jabatan }} - {{ $pengalaman->nama_kegiatan }} {{ $pengalaman->tahun }}</p>
                                        @endforeach
                                    </div>
                                    <div class="col-1">
                                        @foreach($pengalamans as $pengalaman)
                                        <a href="" style="font-size: 25px; color: #7a7a7a;"><i class='bx bxs-edit-alt'></i></a>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section>
                        <div class="modal fade" id="modalpengalaman" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel">Pengalaman</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ url('addpengalaman') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama_kegiatan" class="col-form-label">Nama Kegiatan</label>
                                            <input type="text" class="form-control" name="nama_kegiatan" id="nama-kegiatan" required>
                                            <label for="jabatan" class="col-form-label">Jabatan</label>
                                            <input type="text" class="form-control" name="jabatan" id="jabatan" required>
                                            <label for="tahun" class="col-form-label">Tahun</label>
                                            <input type="text" class="form-control" name="tahun" id="tahun" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                              </div>
                            </div>
                          </div>
                    </section>
                    <div class="lowongan">
                        <div class="box">
                            <div class="top-card">
                                <div class="row">
                                    <div class="col-6">
                                        <form method="get" action="/profile/{{ $user[0]->username }}">
                                            <select id="select_tim" name="select_tim" onchange="this.form.submit()">
                                                <option disabled selected><h3>Select Team</h3></option>
                                                @foreach($tims as $tim)
                                                    <option value="{{ $tim->id }}" {{ ($tim->id == $selected_id)? 'selected' : '' }}><h3>{{ $tim->nama_tim }}</h3></option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="judul">
                                <div class="row">
                                    <div class="col-5 text-center">
                                        <p>Nama</p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <p>Whatsapp</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>Accept</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grup">
                                @if ($selected_id ==! null)
                                    <form method="post" action="{{ url('profile') }}" enctype="multipart/form-data">
                                        <input type="hidden" name="tim_id" value="{{ $selected_id }}">
                                        @csrf
                                        @foreach($tims->find($selected_id)->users as $anggota)
                                            <div class="body-card item-group" style="background-color: #fff;">
                                                <div class="row">
                                                    <div class="col-1" style="margin: auto 0;">
                                                        <img src="{{is_null($anggota->image) ? asset('assets/img/pp.png') : asset('storage/'.$anggota->image)}}" alt="">
                                                    </div>
                                                    <div class="col-4" style="margin: auto 0">
                                                        <a href="">{{ $anggota->mahasiswa->full_name }}</a>
                                                    </div>
                                                    <div class="col-4 text-center" style="margin: auto 0;">
                                                        <p>{{ $anggota->pivot->no_wa }}</p>
                                                    </div>
                                                    <div class="col-3 text-center" style="margin: auto 0;">
                                                        <div class="switchToggle">
                                                            <select name="status[]" id="status">
                                                                <option value="0" selected>No</option>
                                                                <option value="1" {{ ($anggota->pivot->status === 1) ? 'selected' : ''}}>Yes</option>
                                                                <input type="hidden" name="user_id[]" value="{{ $anggota->id }}">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        
                                    </form>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bio">
                        <div class="bio-box">
                            <img src={{ is_null($user[0]->image) ? asset('assets/img/pp.png') : asset('storage/' . $user[0]->image)}} alt="" data-bs-toggle="modal" data-bs-target="#modalimage" style="cursor: pointer;">
                            <p style="font-weight: 600; font-size: 24px;">{{ $user[0]->mahasiswa->full_name }}</p>
                            <p>{{ $user[0]->mahasiswa->nrp }}</p>
                            <p>{{ $user[0]->mahasiswa->kelas }} {{ $user[0]->mahasiswa->program->programstudi }} {{ $user[0]->mahasiswa->jurusan->alias }} {{ $user[0]->mahasiswa->paralel }}</p>
                            <p style="text-transform: uppercase; font-weight: bold; font-size: 20px;">{{ $user[0]->mahasiswa->jurusan->namajurusan }}</p>
                            <p style="font-size: 18px;">{{ $user[0]->mahasiswa->bio }}</p>
                        </div>
                    </div>
                    <div class="report mt-4 text-center " >
                        <div class="box p-4" data-bs-toggle="modal" data-bs-target="#modalReport">
                            <p><i class="bx bxs-trophy"></i> REPORT</p>
                        </div>
                    </div>
                    <div class="mykegiatan">
                        <div class="box">
                            <div class="top-card">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Kegiatan</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="judul">
                                <div class="row">
                                    <div class="col-9">
                                        <p>Nama Kegiatan</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>Status</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                {{-- Belum ditambahkan kondisi diterima di divisi apa berdasarkan status1/status2 --}}
                                @foreach($accepted_divisis as $accepted_divisi)
                                    @foreach($accepted_divisi->users->where('id', $user[0]->id) as $item)
                                        @if($item->pivot->status1 === 1 or $item->pivot->status2 === 1)
                                            <div class="body-card item-group" style="background-color: #fff;">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <a href="">{{ $accepted_divisi->kegiatan->nama_kegiatan }} - Divisi 
                                                            @if($item->pivot->status1 === 1) 
                                                                {{ $item->pivot->pilihan1 }}
                                                                @else
                                                                {{ $item->pivot->pilihan2 }}
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="col-3 text-center" style="margin: auto 0;">
                                                        <p>Diterima</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach    
                            </div>
                        </div>
                    </div>
                    <div class="mylomba">
                        <div class="box">
                            <div class="top-card">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Tim Lomba</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="judul">
                                <div class="row">
                                    <div class="col-9">
                                        <p>Nama Tim</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>Status</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                @foreach($accepted_tims as $accepted_tim)
                                    @foreach($accepted_tim->users->where('id', $user[0]->id) as $data)
                                        @if($data->pivot->status === 1)
                                            <div class="body-card item-group" style="background-color: #fff;">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <a href="">{{ $accepted_tim->nama_tim }}</a>
                                                    </div>
                                                    <div class="col-3 text-center" style="margin: auto 0;">
                                                        <p>Diterima</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="modalimage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Photo Profile</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/updateavatar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="photoprofile" class="col-form-label">Photo Profile</label>
                            <input type="file" class="form-control" name="photoprofile" id="photoprofile" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
    </section>
    <section>
        <div class="modal fade" id="modalReport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Report Juara</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <div class="mb-3 text-center">
                            <p class="form-control p-3" data-bs-toggle="modal" data-bs-target="#prestasiIndividu">INDIVIDU</p>
                            <p class="form-control p-3" data-bs-toggle="modal" data-bs-target="#prestasiKelompok">TIM</p>
                        </div>
                    </div>
              </div>
            </div>
          </div>
    </section>
    <section>
        <div class="modal fade" id="prestasiIndividu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Individu</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ url('addjuaraindividu') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_lomba" class="col-form-label">Nama Lomba</label>
                            <input type="text" class="form-control" id="nama_lomba" name="nama_lomba" required>
                            <label for="kategori" class="col-form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori">
                            <label for="prestasi" class="col-form-label">Prestasi</label>
                            <input type="text" class="form-control" id="prestasi" name="prestasi" required>
                            <label for="tingkat" class="col-form-label">Tingkat</label>
                            <input type="text" class="form-control" id="tingkat" name="tingkat" required>
                            <label for="tahun" class="col-form-label">Tahun</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" required>
                            <label for="sertifikat" class="col-form-label">Sertifikat</label>
                            <input type="file" class="form-control" id="sertifikat" name="sertifikat" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
    </section>
    <section>
        <div class="modal fade" id="prestasiKelompok" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Kelompok</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ url('addjuarakelompok') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_tim" class="col-form-label">Nama Tim</label>
                            <input type="text" class="form-control" id="nama_tim" name="nama_tim" required>
                            <label for="nama_lomba" class="col-form-label">Nama Lomba</label>
                            <input type="text" class="form-control" id="nama_lomba" name="nama_lomba" required>
                            <label for="kategori" class="col-form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori">
                            <label for="prestasi" class="col-form-label">Prestasi</label>
                            <input type="text" class="form-control" id="prestasi" name="prestasi" required>
                            <label for="tingkat" class="col-form-label">Tingkat</label>
                            <input type="text" class="form-control" id="tingkat" name="tingkat" required>
                            <label for="tahun" class="col-form-label">Tahun</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" required>
                            <label for="sertifikat" class="col-form-label">Sertifikat</label>
                            <input type="file" class="form-control" id="sertifikat" name="sertifikat" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
    </section>
    <!-- End Profile -->
    {{-- <script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typehead').typehead({
        source: function (query, process){
            return $.get(path,{query: query }, function(data){
                return process(data);
            });
        }
    });
</script> --}}
<script type="text/javascript">
    // function update(val) {
    //     check = document.getElementById(val);
    //     if (check.checked) {
    //         check.checked = false;
    //     }
    //     else{
    //         check.checked = true;
    //     }
        
    // }
    
</script>
@endsection