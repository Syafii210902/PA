@extends('layout.app')

@section('content')
    <!-- ======= Juara Section ======= -->
    <section id="juara" class="juara" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                @foreach ($juara_tims as $juara_tim)
                    <div class="col-lg-3 col-md-6 box juara-item filter-individu" data-aos="zoom-in">
                        <div class="info">
                            <h2 class="tittle">{{ $juara_tim->keterangan }}</h2>
                            <h2 class="tittle">Tim {{ $juara_tim->tim->nama_tim }}</h2>
                            <h4 class="tittle">{{ $juara_tim->tim->lomba->nama_lomba }}</h4>
                            <div class="row" style="margin-bottom: 10px">
                                <div class="col-3" style="padding: 0 10px 0 20px">
                                    <img src="{{is_null($juara_tim->tim->user->image) ? asset('assets/img/pp.png') : asset('storage/'.$juara_tim->tim->user->image)}}" alt="juara">
                                </div>
                                <div class="col-9" style="margin: auto 0; font-size: 14px;">
                                    <a href="/profile/{{ $juara_tim->tim->user->username }}">{{ $juara_tim->tim->user->username }}</a>
                                </div>
                            </div>
                            @foreach($juara_tim->tim->users as $data)
                                @if($data->pivot->status === 1)
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-3" style="padding: 0 10px 0 20px">
                                            <img src="{{is_null($juara_tim->tim->user->image) ? asset('assets/img/pp.png') : asset('storage/'.$juara_tim->tim->user->image)}}" alt="juara">
                                        </div>
                                        <div class="col-9" style="margin: auto 0; font-size: 14px;">
                                            <a href="/profile/{{ $data->username }}">{{ $data->username }}</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Juara -->
@endsection