@extends ('master')

<body class="berandaortu">
    <div class="loader loader--hidden"></div>
    <div id="navbar">
        <nav class="nav-bar">
            <a href="#"><img src="/data_file/Group 220.png" class="nav-logo"></a>
            <ul>
                <li class="list"><a class="{{ request()->is('/cekula/BerandaOrtu') ? active : '' }}"
                        href="{{ url('/cekula/BerandaOrtu') }}" class="linkheader">Beranda</a></li>
                <li class="list"><a href="/cekula/Bandingkansekolah" class="linkheader">Bandingkan</a></li>
                <li class="list"><a href="/cekula/bantuan" class="linkheader">Bantuan</a></li>
                <li class="list1"><a href="/cekula/profilpenggunaortu" ><i class='fa fa-user-circle-o' style='font-size:36px;color:#7C88F2;'>
                            </i></a></li>
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
                    <input type="text" name="cari" placeholder="Cari Nama Sekolah" value="{{ old('cari') }}">
                    <button type="submit"><img src="/data_file/search.png" alt="search"></button>
                </form>
            </div>
            <div class="col-md-2">
            </div>

        </div>
        @if (session('status2'))
                <div class="alert alert-primary alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>{{ session('status2') }}</strong>
                </div>
                @endif
        @if (session('status'))
        <div class="alert alert-primary alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>{{ session('status') }}</strong>
        </div>
    @endif
    @endsection
    @section('bawah')
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->


            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="flex-container batasberanda">
                        @foreach ($npsn as $namasekolah)

                                               <button>
                                @if ($namasekolah->id >= 1 && $namasekolah->id <= 9)
                                    <a href="/cekula/profilsekolah/{{ $namasekolah->id }}">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="/data_file/unsplash_xH04gkmk1sg.png" width="120px;" height="120px"
                                                    style="vertical-align:middle !important">
                                            </div>

                                            <div class="col-7">
                                                <p
                                                    style="font-size:15px;vertical-align:text-top;margin-left:15px;font-family:'Poppins','Sans-serif'">
                                                    <b>{{ $namasekolah->name }}</b><br style="margin-bottom:5px;">@foreach($info as $info2)@if($info2->id == $namasekolah->id)
                                                    <span
                                                        style="font-size:14px;vertical-align:text-top;">{{ $info2->alamatSekolah}}</span>@endif @endforeach
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

                            @break($namasekolah->id == 9 )

                        @endforeach
               </div>

                </div>
                <div class="carousel-item">
                    <div class="flex-container batasberanda">

                        @foreach ($npsn as $namasekolah)
                        @continue($namasekolah->id >= 1 && $namasekolah->id <= 9 )
                        <button>

                            @if($namasekolah->id >= 10 && $namasekolah->id <= 18 )
                            <a href="/cekula/profilsekolah/{{ $namasekolah->id }}">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="/data_file/unsplash_xH04gkmk1sg.png" width="120px;" height="120px"
                                            style="vertical-align:middle !important">
                                    </div>

                                    <div class="col-7" >
                                        <p
                                            style="font-size:15px;vertical-align:text-top;margin-left:15px;font-family:'Poppins','Sans-serif'">
                                            <b>{{ $namasekolah->name }}</b><br style="margin-bottom:5px;">@foreach($info as $info2)@if($info2->id == $namasekolah->id)
                                            <span
                                                style="font-size:14px;vertical-align:text-top;">{{ $info2->alamatSekolah }}</span>@endif @endforeach
                                            <br>
                                            <br>  <span
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

                        </button> @break($namasekolah->id == 18 )

                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="flex-container batasberanda">
                        @foreach ($npsn as $namasekolah)
                        @continue($namasekolah->id >= 1 && $namasekolah->id <= 18)
                        <button>

                            @if($namasekolah->id >= 19 && $namasekolah->id <= 29)
                            <a href="/cekula/profilsekolah/{{ $namasekolah->id }}">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="/data_file/unsplash_xH04gkmk1sg.png" width="120px;" height="120px"
                                            style="vertical-align:middle !important">
                                    </div>

                                    <div class="col-7">
                                        <p
                                            style="font-size:15px;vertical-align:text-top;margin-left:15px;font-family:'Poppins','Sans-serif'">
                                            <b>{{ $namasekolah->name }}</b><br style="margin-bottom:5px;">@foreach($info as $info2)@if($info2->id == $namasekolah->id)
                                            <span
                                                style="font-size:14px;vertical-align:text-top;">{{ $info2->alamatSekolah }}</span>@endif @endforeach
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

                        </button> @break($namasekolah->id == 28)
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

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
        <script></script>
    @endsection
