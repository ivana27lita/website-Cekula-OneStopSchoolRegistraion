@extends ('master')

<body class="berandaortu">
    <div id="navbar">
        <nav class="nav-bar">
            <a href="#"><img src="/data_file/Group 220.png" class="nav-logo"></a>
            <ul class="main-menu">
                <li class="list "><a class="{{ request()->is('/cekula/BerandaOrtu') ? active : '' }}"
                        href="{{ url('/cekula/BerandaOrtu') }}" class="linkheader">Beranda</a></li>
                <li class="list"><a href="/cekula/Bandingkansekolah" class="linkheader">Bandingkan</a></li>
                <li class="list"><a href="/cekula/bantuan" class="linkheader">Bantuan</a></li>
                <li class="list1"><a href="/cekula/profilpenggunaortu" class="linkheader"><i class='fa fa-user-circle-o' style='font-size:36px;color:#7C88F2;'></i></a></li>
            </ul>
            <div class="toggle_btn">
                <i class="fa fa-bars" style="font-size:25px;color:black"></i>
            </div>
            <div class="dropdown_menu">
                <li><a href="/cekula/BerandaOrtu">Beranda</a></li>
                <li><a href="/cekula/Bandingkansekolah">Bandingkan</a></li>
                <li><a href="/cekula/bantuan">Bantuan</a></li>
                <li><a href="/cekula/profilpenggunaortu"><i class="fa fa-user-circle-o"style='font-size:24px;color:#000000;cursor: pointer;'></i></a></li>
            </div>

        </nav>
    </div>
    @section('atas')
        <div class="content">
            <h1 class="teksberanda1"><b>Dapatkan Informasi Sekolah untuk <br>Putra Putri Anda dengan Mudah</b></h1>
        </div>
    @endsection
    @section('tengah')
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 search1">
                <form action="/cekula/cari" method="GET" class="search-bar">
                    <input type="text" id="cari" name="cari" placeholder="Cari Nama Sekolah"
                        value="{{ old('cari') }}">
                    <button type="submit" for="cari"><img src="/data_file/search.png" alt="search"></button>
                </form>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    @endsection
    @section('bawah')
        <!-- Carousel -->

        <!-- The slideshow/carousel -->
        <div class="flex-container batasberanda">
            @forelse ($npsn as $namasekolah)
                <button>
                    @if ($namasekolah->id >= 1)

                    <a href="/cekula/profilsekolah/{{ $namasekolah->id }}">
                    <div class="row">
                        <div class="col-4">
                            <img src="/data_file/unsplash_xH04gkmk1sg.png" width="120px;" height="120px"
                                style="vertical-align:middle !important">
                        </div>
                        <div class="col-7">
                            <p
                                style="font-size:18px;vertical-align:text-top;margin-left:15px;font-family:'Poppins','Sans-serif'">
                                <b>{{ $namasekolah->name }}</b><br style="margin-bottom:5px;">@foreach($npsn2 as $info5)@if($info5->id == $namasekolah->id)
                                <span style="font-size:14px;vertical-align:text-top;">{{ $info5->alamatSekolah }}</span>@endif @endforeach
                                <br>
                                <br>
                                <span
                        style="font-size:14px;vertical-align:text-top;">Akreditasi : A</span>
                        <br>@forelse($in as $oke)@if($oke->id_sekula == $namasekolah->id)
                        <span style="font-size:14px;vertical-align:text-top;">Kuota : {{ $oke->kuotarombel}}</span>@endif

                           @empty
                        <span style="font-size:14px;vertical-align:text-top;">Kuota : {{ $oke->kuotarombel}}</span>
@endforelse
                            </p>
                        </div>
                    </div>
                    </a>

                    @endif
                </button>

                @break($namasekolah->id == 27)
            @empty

                <div class="d-flex justify-content-center">
                    <div class="card">
                        <h3>Mohon maaf, hasil pencarian <br> Anda tidak ditemukan. Pastikan <br>penulisan Anda sudah tepat.
                        </h3>
                    </div>
                </div>

            @endforelse
        </div>


        <br>
        <br>
        <div class="foot1 d-flex justify-content-center">
            <div class="foot2"><a href="https://instagram.com/ahjumma_go?igshid=ZWIzMWE5ZmU3Zg==" target="_blank"><i
                class="fa fa-instagram" style="font-size:40px;color:rgba(179, 136, 235,0.7)"></i></a></div>
    <div class="foot2"><a href="mailto:ahjumma.go@gmail.com"><i class="fa fa-envelope-o"
                style="font-size:40px;color:rgba(179, 136, 235,0.7)"></i></div>
    <div class="foot2"><a href="https://wa.me/message/4KVS56V7MSOPL1" target="_blank"><i class="fa fa-whatsapp"
                style="font-size:40px;color:rgba(179, 136, 235,0.7)"></i></div>
        </div>
        <div class="foot1 d-flex justify-content-center">
            <p class="foot3">Jalan.Sistem Informasi</p>
        </div>
    @endsection
