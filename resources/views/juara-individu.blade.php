@extends('layout.app')

@section('content')
    <!-- ======= Juara Section ======= -->
    <section id="juara" class="juara" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                @foreach ($juara_individus as $juara_individu)
                    <div class="col-lg-3 col-md-6 box juara-item filter-individu" data-aos="zoom-in">
                        <div class="info" style="height: 170px">
                            <h2 class="tittle">{{ $juara_individu->keterangan }}</h2>
                            <h4 class="tittle">{{ $juara_individu->lomba->nama_lomba }}</h4>
                            <div class="row">
                                <div class="col-3" style="padding: 0 10px 0 20px">
                                    <img src="{{asset('assets/img/pp.jpg')}}" alt="juara">
                                </div>
                                <div class="col-9" style="margin: auto 0; font-size: 14px;">
                                    <a href="/profile/{{ $juara_individu->user->username }}">{{ $juara_individu->user->username }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Juara -->
@endsection