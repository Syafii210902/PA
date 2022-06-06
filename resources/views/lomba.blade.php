@extends('layout.app')

@section('content')
    <!-- ======= Lomba Section ======= -->
    <section id="lomba" class="lomba">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 justify-content-center" data-aos="fade-up">
                    <div>
                        <div class="row">
                            @foreach ($lombas as $lomba)
                                <div class="col-lg-3 col-md-6 app" data-aos="zoom-in">
                                    <a href="/lomba/{{$lomba->id}}">
                                        <div class="lomba-box">
                                            <img src="storage/{{ $lomba->poster }}" alt="{{ $lomba->nama_lomba }}">
                                            <div class="desc">
                                                <h3>{{ $lomba->nama_lomba }}</h3>
                                                <p>{{ $lomba->deadline }}</p>
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
    <!-- End Lomba -->
@endsection