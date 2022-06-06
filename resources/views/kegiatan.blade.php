@extends('layout.app')

@section('content')
    <!-- ======= Kegiatan Section ======= -->
    <section id="kegiatan" class="kegiatan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 justify-content-center" data-aos="fade-up">
                    <div>
                        <div class="row">
                            @foreach ($kegiatans as $kegiatan)
                                <div class="col-lg-3 col-md-6 app" data-aos="zoom-in">
                                    <a href="/kegiatan/{{$kegiatan->kategori->nama_kategori.'/'.$kegiatan->id}}">
                                        <div class="kegiatan-box">
                                            <img src="{{asset('storage/'.$kegiatan->poster)}}" alt="">
                                            <div class="desc">
                                                <h3>{{$kegiatan->nama_kegiatan}}</h3>
                                                <p>{{$kegiatan->deadline}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Kegiatan -->
@endsection