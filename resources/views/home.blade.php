@extends('layout.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="home">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 justify-content-center" data-aos="fade-up">
                    <div>
                        <img src="assets/img/center_bg.png" class="img-fluid" alt="">
                        <h2>AKTIF BERPRESTASI</h2>
                        <h3>lebih mudah dengan <strong>ACTIV</strong></h3>
                        <a href="#about" class="btn-get-started scrollto">EXPLORE</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 justify-content-center content" data-aos="fade-up">
                        <div>
                            <h2>TENTANG</h2>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Lomba Section ======= -->
        <section id="lomba" class="lomba">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="fade-up">
                        <div>
                            <h2>LOMBA</h2>
                            <div class="row">
                                @for($i=0;$i<4;$i++)
                                    <div class="col-lg-3 col-md-6 app" data-aos="zoom-in">
                                        <a href="/lomba/{{$lombas[$i]->id}}">
                                            <div class="lomba-box">
                                                <img src="{{asset('storage/'.$lombas[$i]->poster)}}" alt="">
                                                <div class="desc">
                                                    <h3>{{$lombas[$i]->nama_lomba}}</h3>
                                                    <p>{{$lombas[$i]->deadline}}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Lomba Section -->

        <!-- ======= Kegiatan Section ======= -->
        <section id="kegiatan" class="kegiatan">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="fade-up">
                        <div>
                            <h2>KEGIATAN</h2>
                            <div class="row">
                                @for($i=0;$i<4;$i++)
                                    <div class="col-lg-3 col-md-6 app" data-aos="zoom-in">
                                        <a href="/kegiatan/{{$kgts[$i]->kategori->nama_kategori.'/'.$kgts[$i]->id}}">
                                            <div class="kegiatan-box">
                                                <img src="{{asset('storage/'.$kgts[$i]->poster)}}" alt="">
                                                <div class="desc">
                                                    <h3>{{$kgts[$i]->nama_kegiatan}}</h3>
                                                    <p>{{$kgts[$i]->deadline}}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Kegiatan Section -->

        <!-- ======= Join Tim Section ======= -->
        <section id="jointeam" class="jointeam">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="fade-up">
                        <div>
                            <h2>JOIN TIM</h2>
                            <div class="row">
                                <div class="jointeam-slider swiper-container" data-aos-delay="100">
                                    <div class="swiper-wrapper">
                                        @for($i=0;$i<4;$i++)
                                            <div class="col-lg-4 col-md-6 box swiper-slide" data-aos="zoom-in">
                                                <div class="jointeam-item">
                                                    <div class="info">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td><i class='bx bxs-pen' ></i></td>
                                                                    <td>Nama Tim</td>
                                                                    <td><strong>{{ $tims[$i]->nama_tim }}</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class='bx bxs-pen' ></i></td>
                                                                    <td>Lomba</td>
                                                                    <td><strong>{{ $tims[$i]->lomba->nama_lomba }}</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class='bx bxs-pen' ></i></td>
                                                                    <td>Recruiter</td>
                                                                    <td><a href="/profile/{{$tims[$i]->user->username}}"><strong>{{ $tims[$i]->user->username }}</strong></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class='bx bxs-user'></i></td>
                                                                    <td>Kategori</td>
                                                                    <td><strong>{{ $tims[$i]->bidang }}</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class='bx bxs-user'></i></td>
                                                                    <td>Member</td>
                                                                    <td><strong>{{ $tims[$i]->jumlah_anggota }}</strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class='bx bxs-doughnut-chart'></i></td>
                                                                    <td>Requirements</td>
                                                                    <td><strong>{{ $tims[$i]->requirement }}</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <a href="/lomba/{{$tims[$i]->lomba->id}}" class="join" >Join</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Join Tim Section -->

        <!-- ======= Juara Section ======= -->
        <section id="juara" class="juara">
            <div class="container">
                <h2 data-aos="fade-up">JUARA</h2>
                <div class="row">
                    @for($i=0; $i<2; $i++)
                        <div class="col-lg-3 col-md-6 box juara-item filter-individu" data-aos="zoom-in">
                            <div class="info">
                                <h2 class="tittle">{{ $juara_tims[$i]->keterangan }}</h2>
                                <h2 class="tittle">Tim {{ $juara_tims[$i]->tim->nama_tim }}</h2>
                                <h4 class="tittle">{{ $juara_tims[$i]->tim->lomba->nama_lomba }}</h4>
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-3" style="padding: 0 10px 0 20px">
                                        <img src="{{is_null($juara_tims[$i]->tim->user->image) ? asset('assets/img/pp.png') : asset('storage/'.$juara_tims[$i]->tim->user->image)}}" alt="juara">
                                    </div>
                                    <div class="col-9" style="margin: auto 0; font-size: 14px;">
                                        <a href="/profile/{{ $juara_tims[$i]->tim->user->username }}">{{ $juara_tims[$i]->tim->user->username }}</a>
                                    </div>
                                </div>
                                @for ($j=0; $j<$juara_tims[$i]->tim->jumlah_anggota; $j++)
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-3" style="padding: 0 10px 0 20px">
                                        <img src="{{is_null($juara_tims[$i]->tim->users[$j]->image) ? asset('assets/img/pp.png') : asset('storage/'.$juara_tims[$i]->tim->users[$j]->image)}}" alt="juara">
                                    </div>
                                    <div class="col-9" style="margin: auto 0; font-size: 14px;">
                                        <!-- belum ditambahkan kondisi untuk menampilkan yg berstatus 1 saja -->
                                        <a href="/profile/{{ $juara_tims[$i]->tim->users[$j]->username }}">{{ $juara_tims[$i]->tim->users[$j]->username }}</a>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 box juara-item filter-individu" data-aos="zoom-in">
                            <div class="info" style="height: 170px">
                                <h2 class="tittle">{{ $juara_individus[$i]->keterangan }}</h2>
                                <h4 class="tittle">{{ $juara_individus[$i]->lomba->nama_lomba }}</h4>
                                <div class="row">
                                    <div class="col-3" style="padding: 0 10px 0 20px">
                                        <img src="{{is_null($juara_individus[$i]->user->image) ? asset('assets/img/pp.png') : asset('storage/'.$juara_individus[$i]->user->image)}}" alt="juara">
                                    </div>
                                    <div class="col-9" style="margin: auto 0; font-size: 14px;">
                                        <a href="/profile/{{ $juara_individus[$i]->user->username }}">{{ $juara_individus[$i]->user->username }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

    </main>
    <!-- End main -->
@endsection