@extends('layout.app')

@section('content')
    <!-- ======= Detail Lomba Section ======= -->
    <section id="detail-lomba" class="detail-lomba" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-up">
                    <img src="{{asset('storage/'.$lomba->poster)}}" alt="">
                    <h4>{{ $lomba->nama_lomba }}</h4>
                    <h5>Deskripsi</h5>
                    <p>{{ $lomba->deskripsi }}</p>
                    <h5>Deadline</h5>
                    <p>{{ $lomba->deadline }}</p>
                    <p>Info selengkapnya : </p>
                    <a href="https://{{$lomba->info}}">{{$lomba->info}}</a>
                </div>
                <div class="col-lg-4 form-box" data-aos="fade-up">
                    <h3>Create Team</h3>
                    <form action="{{ url('createteam') }}" method="post">
                        @csrf
                        <input type="hidden" name="lomba_id" value="{{ $lomba->id }}">
                        <p>Nama Tim</p>
                        <input type="text" name="nama_tim" placeholder="Nama Tim" required>
                        <p>Kategori lomba</p>
                        <input type="text" name="kategori_lomba" placeholder="Kategori Lomba">
                        <p>Jumlah Anggota</p>
                        <input type="text" name="jumlah_anggota" placeholder="Jumlah anggota" required>
                        <p>Requirements</p>
                        <textarea name="requirements" rows="5" placeholder="Requirements skill" required></textarea>
                        <input type="submit">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 jointeam" id="jointeam">
                    <h2>Join Team</h2>
                    <div class="row">
                        <div class="jointeam-slider swiper-container" data-aos-delay="100">
                            <div class="swiper-wrapper">
                                @foreach ($tims as $tim)
                                    <div class="col-lg-4 col-md-6 box swiper-slide" data-aos="zoom-in">
                                        <div class="jointeam-item">
                                            <div class="info">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class='bx bxs-pen' ></i></td>
                                                            <td>Nama Tim</td>
                                                            <td><strong>{{ $tim->nama_tim }}</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class='bx bxs-pen' ></i></td>
                                                            <td>Recruiter</td>
                                                            <td><a href="/profile/{{ $tim->user->username }}"><strong>{{ $tim->user->username }}</strong></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class='bx bxs-user'></i></td>
                                                            <td>Kategori</td>
                                                            <td><strong>{{ $tim->bidang }}</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class='bx bxs-user'></i></td>
                                                            <td>Member</td>
                                                            <td><strong>{{ $tim->jumlah_anggota }}</strong></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class='bx bxs-doughnut-chart'></i></td>
                                                            <td>Requirements</td>
                                                            <td><strong>{{ $tim->requirement }}</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="" class="join" data-bs-toggle="modal" data-bs-target="#joinTeam{{ $tim->id }}">Join</a>
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

    @foreach ($tims as $tim)
            <div class="modal fade" id="joinTeam{{ $tim->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Join Team</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('jointeam') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="hidden" name="tim_id" value="{{ $tim->id }}">
                                <label for="no_wa" class="col-form-label">No. Whatsapp:</label>
                                <input type="text" class="form-control" name="no_wa" id="no_wa">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
    @endforeach
    <!-- End Detail Lomba -->
@endsection