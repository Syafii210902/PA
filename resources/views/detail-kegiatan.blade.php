@extends('layout.app')

@section('content')
    <!-- ======= Detail Lomba Section ======= -->
    <section id="detail-lomba" class="detail-lomba" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-up">
                    <img src="{{asset('assets/img/'.$kegiatan[0]->poster)}}" alt="">
                    <h4>{{$kegiatan[0]->nama_kegiatan}}</h4>
                    <h5>Deskripsi</h5>
                    <p>{{$kegiatan[0]->deskripsi}}</p>
                    <h5>Deadline</h5>
                    <p>{{$kegiatan[0]->deadline}}</p>
                    <p>Info selengkapnya : </p>
                    <a href="https://{{$kegiatan[0]->info}}">{{$kegiatan[0]->info}}</a>
                </div>
                <div class="col-lg-4 form-box" data-aos="fade-up">
                    <h3>Join Kegiatan</h3>
                    <form action="" method="post">
                        <p>Pilihan 1</p>
                        <select name="pilihan1" id="pilihan1" required>
                            <option value="" disabled selected>Select Division</option>
                            <option value="">Nama Divisi</option>
                            <option value="">Nama Divisi2</option>
                        </select>
                        <p>Pilihan 2</p>
                        <select name="pilihan2" id="pilihan2">
                            <option value="" selected>Select Division</option>
                            <option value="">Nama Divisi</option>
                            <option value="">Nama Divisi2</option>
                        </select>
                        <p>No. Whatsapp</p>
                        <input type="text" name="no_whatsapp" placeholder="Whatsapp Number" required>
                        <input type="submit">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 jointeam" id="jointeam">
                    <h2>Divisi</h2>
                    <div class="row">
                        <div class="jointeam-slider swiper-container" data-aos-delay="100">
                            <div class="swiper-wrapper">
                                @foreach($divisis as $divisi)
                                    <div class="col-lg-4 col-md-6 box swiper-slide" data-aos="zoom-in">
                                        <div class="jointeam-item">
                                            <div class="info">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class='bx bxs-pen' ></i></td>
                                                            <td>Divisi</td>
                                                            <td><strong>{{ $divisi->nama_divisi }}</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class='bx bxs-user'></i></td>
                                                            <td>Pendaftar</td>
                                                            <td><strong>
                                                                {{ 
                                                                    DB::table('join_divisis')->where(function($query) use($divisi){ $query->where('pilihan1', '=', $divisi->nama_divisi)
                                                                        ->orWhere('pilihan2', '=', $divisi->nama_divisi);
                                                                    })->count(); 
                                                                }}</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class='bx bxs-doughnut-chart'></i></td>
                                                            <td>Deskripsi</td>
                                                            <td style="text-align:justify; text-justify:distribute;">{{ $divisi->deskripsi }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->
@endsection