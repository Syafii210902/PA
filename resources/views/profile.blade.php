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
                                <form action="" method="post">
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
                                            <input type="text" name="kelas" value="{{ $user[0]->mahasiswa->kelas }}" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Jurusan</p>
                                            <input type="text" name="jurusan" value="{{ $user[0]->mahasiswa->jurusan }}" readonly>
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
                                        <form>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="username" class="col-form-label">Username</label>
                                                    <input type="text" class="form-control" value="{{ $user[0]->username }}" id="username">
                                                    <label for="email" class="col-form-label">Email</label>
                                                    <input type="email" class="form-control" value="{{ $user[0]->email }}" id="email">
                                                    <label for="fullname" class="col-form-label">Full Name</label>
                                                    <input type="text" class="form-control" value="{{ $user[0]->mahasiswa->full_name }}" id="fullname">
                                                    <label for="nrp" class="col-form-label">NRP</label>
                                                    <input type="text" class="form-control" value="{{ $user[0]->mahasiswa->nrp }}" id="nrp">
                                                    <label for="kelas" class="col-form-label">Kelas</label>
                                                    <input type="text" class="form-control" value="{{ $user[0]->mahasiswa->kelas }}" id="kelas">
                                                    <label for="jurusan" class="col-form-label">Jurusan</label>
                                                    <input type="text" class="form-control" value="{{ $user[0]->mahasiswa->jurusan }}" id="jurusan">
                                                    <label for="desc" class="col-form-label">About</label>
                                                    <input type="text" class="form-control" value="{{ $user[0]->mahasiswa->bio }}" id="desc">
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
                                    <div class="col-10">
                                        <p>This is your profile page. You can set your profile to make other people know about
                                            you and your experience.</p>
                                    </div>
                                    <div class="col-2">
                                        
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
                                <form>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama-lomba" class="col-form-label">Nama Lomba</label>
                                            <input type="text" class="form-control" id="nama-lomba" required>
                                            <label for="kategori" class="col-form-label">Kategori</label>
                                            <input type="text" class="form-control" id="kategori">
                                            <label for="prestasi" class="col-form-label">Prestasi</label>
                                            <input type="text" class="form-control" id="prestasi" required>
                                            <label for="tingkat" class="col-form-label">Tingkat</label>
                                            <input type="text" class="form-control" id="tingkat" required>
                                            <label for="tahun" class="col-form-label">Tahun</label>
                                            <input type="text" class="form-control" id="tahun" required>
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
                                    <div class="col-10">
                                        <p>This is your profile page. You can set your profile to make other people know about
                                            you and your experience.</p>
                                        @foreach($pengalamans as $pengalaman)
                                            <p><strong>{{ $pengalaman->jabatan }} - {{ $pengalaman->nama_kegiatan }} {{ $pengalaman->tahun }}</strong></p>
                                        @endforeach
                                    </div>
                                    <div class="col-2">
                                        <a href=""><img src="assets/img/icon-edit.png" alt=""></a>
                                        <a href=""><img src="assets/img/icon-edit.png" alt=""></a>
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
                                <form>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama-kegiatan" class="col-form-label">Nama Kegiatan</label>
                                            <input type="text" class="form-control" id="nama-kegiatan">
                                            <label for="jabatan" class="col-form-label">Jabatan</label>
                                            <input type="text" class="form-control" id="jabatan">
                                            <label for="tahun" class="col-form-label">Tahun</label>
                                            <input type="text" class="form-control" id="tahun">
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
                                        <form method="get">
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
                                    @foreach($tims->find($selected_id)->users as $anggota)
                                        <div class="body-card item-group" style="background-color: #fff;">
                                            <div class="row">
                                                <div class="col-1" style="margin: auto 0;">
                                                    <img src="{{asset('assets/img/pp.jpg')}}" alt="">
                                                </div>
                                                <div class="col-4" style="margin: auto 0">
                                                    <a href="">{{ $anggota->username }}</a>
                                                </div>
                                                <div class="col-4 text-center" style="margin: auto 0;">
                                                    <p>{{ $anggota->pivot->no_wa }}</p>
                                                </div>
                                                <div class="col-3 text-center" style="margin: auto 0;">
                                                    <div class="switchToggle">
                                                        <input type="checkbox" id="switch1" {{ ($anggota->pivot->status === 1) ? 'checked' : ''}}>
                                                        <label for="switch1">Toggle</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bio">
                        <div class="bio-box">
                            <img src="{{url(Auth::user()->image ?? 'assets/img/pp.png')}}" alt="">
                            <p style="font-weight: 600; font-size: 24px;">{{ $user[0]->mahasiswa->full_name }}</p>
                            <p>{{ $user[0]->mahasiswa->nrp }}</p>
                            <p>{{ $user[0]->mahasiswa->kelas }}</p>
                            <p style="text-transform: uppercase; font-weight: bold; font-size: 20px;">{{ $user[0]->mahasiswa->jurusan }}</p>
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
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama-lomba" class="col-form-label">Nama Lomba</label>
                            <input type="text" class="form-control" id="nama-lomba" required>
                            <label for="kategori" class="col-form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori">
                            <label for="prestasi" class="col-form-label">Prestasi</label>
                            <input type="text" class="form-control" id="prestasi" required>
                            <label for="tingkat" class="col-form-label">Tingkat</label>
                            <input type="text" class="form-control" id="tingkat" required>
                            <label for="tahun" class="col-form-label">Tahun</label>
                            <input type="text" class="form-control" id="tahun" required>
                            <label for="sertifikat" class="col-form-label">Sertifikat</label>
                            <input type="file" class="form-control" id="sertifikat">
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
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama-tim" class="col-form-label">Nama Tim</label>
                            <input type="text" class="form-control" id="nama-tim" required>
                            <label for="nama-lomba" class="col-form-label">Nama Lomba</label>
                            <input type="text" class="form-control" id="nama-lomba" required>
                            <label for="kategori" class="col-form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori">
                            <label for="prestasi" class="col-form-label">Prestasi</label>
                            <input type="text" class="form-control" id="prestasi" required>
                            <label for="tingkat" class="col-form-label">Tingkat</label>
                            <input type="text" class="form-control" id="tingkat" required>
                            <label for="tahun" class="col-form-label">Tahun</label>
                            <input type="text" class="form-control" id="tahun" required>
                            <label for="sertifikat" class="col-form-label">Sertifikat</label>
                            <input type="file" class="form-control" id="sertifikat">
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
@endsection