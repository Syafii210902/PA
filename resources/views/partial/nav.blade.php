<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <h1><a href="/">ACTIV</a></h1>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto {{ ($tittle === "Home") ? 'active' : ''}}" href="/">Home</a></li>
                <li><a class="nav-link scrollto {{ ($tittle === "Lomba") ? 'active' : ''}}" href="/lomba">Lomba</a></li>
                <li class="dropdown"><a href="#"><span>Kegiatan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <?php $katKegiatan = App\Models\KategoriKegiatan::all() ?>
                        @foreach($katKegiatan as $kategoriKegiatan)
                            <li><a href="/kegiatan/{{$kategoriKegiatan->nama_kategori}}">{{strtoupper($kategoriKegiatan->nama_kategori)}}</a></li>
                        @endforeach
                    </ul>
                </li>   
                <li class="dropdown"><a href="#"><span>Juara</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/juara/individu">Individu</a></li>
                        <li><a href="/juara/tim">Tim</a></li>
                    </ul>
                </li>    
                @if(Auth::check() )
                <li class="dropdown"><a href="#"><img src="{{ is_null(Auth::user()->image) ? asset('assets/img/pp.png') : asset('storage/' . Auth::user()->image) }}" style="height: 40px; width: 40px; border-radius: 50%" alt=""><span style="margin-left: 10px">{{ Auth::user()->username }}</span></a>
                    <ul>
                        <li><a href="/profile/{{ Auth::user()->username }}">Profile</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
                @else
                    <li class="dropdown login"><a href="/login" id="sign-in" class="btn-get-started nav-link scrollto">MASUK</a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
<!-- End Header -->