@extends('layout.app')

@section('content')
    <!-- ======= Detail Lomba Section ======= -->
    <section id="detail-lomba" class="detail-lomba" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up">
                    <img src="{{asset('assets/img/'.$kegiatan[0]->poster)}}" alt="">
                    <h4>{{$kegiatan[0]->nama_kegiatan}}</h4>
                    <h5>Deskripsi</h5>
                    <p>{{$kegiatan[0]->deskripsi}}</p>
                    <h5>Deadline</h5>
                    <p>{{$kegiatan[0]->deadline}}</p>
                    <p>Info selengkapnya : </p>
                    <a href="https://{{$kegiatan[0]->info}}">{{$kegiatan[0]->info}}</a>
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->
@endsection