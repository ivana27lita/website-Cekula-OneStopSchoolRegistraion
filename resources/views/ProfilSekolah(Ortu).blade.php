@extends ('master')

<body>
    <div class="loader loader--hidden"></div>
    <div id="navbar">
        <nav class="nav-bar">
            <a href="#"><img src="/data_file/Group 220.png" class="nav-logo"></a>
            <ul class="main-menu">
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
    </div><div class="overlay">
    @foreach ($info as $informasi)
        <img src="/data_infosekolah/{{ $informasi->banner }}" width=100%;
            style="margin-bottom:-200px;display: block;
    background: rgba(0, 0, 0,0.6);object-fit:cover;opacity:1.2"></div>
    @endforeach
    @foreach ($in2 as $infoo)
        <h1 class="teksbarubgt">
           <br> {{ $infoo->name }}
        </h1>
    @endforeach
    <div class="row" style="--bs-gutter-x: 0rem;">
        <div class="bg-profil">
            <div class="col-12">
                <div class="tab">
                    <a class="tablinks" onclick="openCity(event, 'Profil')" id="defaultOpen">Profil</a>
                    <a class="tablinks" onclick="openCity(event, 'Pendaftaran')">Pendaftaran</a>
                    @forelse ($p as $pe)
                    <a class="tablinks" onclick="openCity(event, 'Pengumuman')">Pengumuman</a>@empty
                    @endforelse
                </div>

                <div id="Profil" class="tabcontent">
                    <div class="row" style="--bs-gutter-x: 0rem;">
                        <div class="col-md-4">
                            <div style="background-color:#F1F1F1;border-radius:20px;padding:20px;">
                                <h6><b>Informasi Sekolah</b></h6>
                                @foreach ($info as $informasi)
                                    {{ $informasi->alamatSekolah }}
                                    <div style="margin-bottom:20px;"></div>
                                    <h6><b>Hubungi Kami</b></h6>
                                    <h6>(+62) {{ $informasi->noTelp }}</h6>

                            </div>
                            <div style="margin-top:20px;background-color:#F1F1F1;border-radius:20px;padding:20px;">
                                <h6><b>Jadwal kegiatan Belajar</b></h6>
                                <h6>Senin s.d Jumat<span style="margin-right:32px"></span>{{ $informasi->senin }}
                                </h6>
                                <h6>Sabtu<span style="margin-right:103px"></span>{{ $informasi->sabtu }}
                                </h6>


                            </div>


                        </div>

                        <div class="col-md-4">
                            <div style="background-color:#F1F1F1;border-radius:20px;padding:20px;">
                                <h6><b>Fasilitas</b></h6>
                                <h6>{{ $informasi->deskripsifasilitas }}</h6>
                                @if ($informasi->playground == 'playground')
                                    <img src=/data_file/Vector(2).png width=20px height=auto
                                        style="margin-right:10px;">Playground<br style="margin-bottom:15px;">
                                @else
                                @endif
                                @if ($informasi->kolamrenang == 'kolamrenang')
                                    <img src=/data_file/Vector(3).png width=20px height=auto
                                        style="margin-right:10px;">Kolam Renang<br style="margin-bottom:15px;">
                                @else
                                @endif
                                @if ($informasi->funlearning == 'funlearning')
                                    <img src=/data_file/bi_emoji-smile.png width=20px height=auto
                                        style="margin-right:10px;">Fun Lerning<br style="margin-bottom:15px;">
                                @else
                                @endif
                                @if ($informasi->kelas == 'kelas')
                                    <img src=/data_file/Group154.png width=20px height=auto
                                        style="margin-right:10px;">Kelas
                                @else
                                @endif


                            </div>


                        </div>

                        <div class="col-md-3">
                            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                                <!-- Indicators/dots -->
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0"
                                        class="active"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                </div>

                                <!-- The slideshow/carousel -->
                                <div class="container">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="/data_infosekolah/{{ $informasi->img1 }}" alt="Galeri 1"
                                                class="d-block" style="width:80%;margin-right:auto;margin-left:auto">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="/data_infosekolah/{{ $informasi->img2 }}" alt="Galeri 2"
                                                class="d-block" style="width:80%;margin-right:auto;margin-left:auto">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="/data_infosekolah/{{ $informasi->img3 }}" alt="Galeri 3"
                                                class="d-block" style="width:80%;margin-right:auto;margin-left:auto">
                                        </div>
                                    </div>
                                </div>
                                <!-- Left and right controls/icons -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#demo"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#demo"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="--bs-gutter-x: 0rem;">
                        @forelse ($in as $sesii)
                            <div class="col-md-9">
                                <h4 style="text-align:center;margin-top:30px;margin-bottom:20px;"><b>Pendaftaran Siswa
                                        Baru -
                                        Sedang Berlangsung</b></h4>
                                <div class="row">

                                    <div class="col-4">
                                        <div class="module-border-wrap">
                                            <div class="module">Kuota <br>{{ $sesii->kuotarombel }} </div>
                                        </div>
                                    </div>

                                    <div class="col-7">
                                        <span
                                            style="display:block;background-color:rgba(146, 92, 217, 0.7);padding:10px;margin-top:15px;margin-botttom:10px;border-radius:20px;color:white;text-align:center;font-weight:bold;font-size:18px;">{{ date('d F', strtotime($sesii->created_at)) }}
                                            - {{ date('d F', strtotime($sesii->TanggalSelesai)) }}</span>
                                        <span style="display:block;padding:10px;">Kuota :
                                            {{ $sesii->kuotarombel }}<br> Pendaftar : {{ $f3->count() }} </span>
                                    </div>


                                </div>


                            @empty
                        @endforelse

                    </div>

                </div>

            </div>

            <div id="Pendaftaran" class="tabcontent">
                <div class="row" style="--bs-gutter-x: 0rem;">
                    <div class="col-md-7" style="background-color:#F1F1F1;padding:20px;border-radius:20px;">
                        <h6 style="text-align:center"><b>Persyaratan</b></h6>
                        <h6 style="text-align:justify">1. {{ $informasi->persyaratan1 }}<br>
                            2. {{ $informasi->persyaratan2 }}<br>
                            3. {{ $informasi->persyaratan3 }}<br>
                            4. {{ $informasi->persyaratan4 }}<br><br>

                            {{ $informasi->persyaratan5 }}</h6>
                    </div>
                    @endforeach
                    <div class="col-md-4 bg-formulir" style="background-color:#72DDF7;border-radius:20px;">
                        @forelse ($in as $sesii)
                            <h4
                                style="text-align:center;margin-top:30px;margin-bottom:20px;color:white;border-radius:20px;">
                                <b>Pendaftaran Siswa Baru -
                                    Sedang Berlangsung</b></h4>
                            <div class="row">
                                <div class="col-5 center">
                                    <img src="/data_file/students 1(2).png" width=105px height=auto>
                                </div>

                                <div class="col-7">
                                    @foreach ($info as $in)
                                        <a href="/cekula/formulir/{{ $in->id }}">
                                            <span
                                                style="display:block;background-color:rgba(179, 136, 235,0.7);padding:12px;margin:10px;border-radius:20px;">
                                                <h5 style="color:black;text-align:center">Isi <br>Formulir</h5></a>
                                    @endforeach
                                </div>
                            @empty
                                <h4
                                    style="text-align:center;margin-top:30px;margin-bottom:20px;color:white;border-radius:20px;">
                                    <b>Pendaftaran Masih Ditutup</b></h4>
                                <div class="row">
                                    <div class="col-5 center">
                                        <img src="/data_file/students 1(2).png" width=105px height=auto>
                                    </div>

                                    <div class="col-7">
                                        <span
                                            style="display:block;background-color:rgba(179, 136, 235,0.7);padding:12px;margin:10px;border-radius:20px;">
                                            <h5 style="color:rgb(255, 255, 255);text-align:center">Pendaftaran Masih
                                                Ditutup</h5>

                                    </div>

                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <div id="Pengumuman" class="tabcontent">
            <div class="row"></div>
            <table class="table table-white css-serial">

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenjang</th>
                </tr>
                @foreach ($p2 as $pe2)
                    <tr>
                        <td style="text-align:center;"></td>
                        <td>{{ $pe2->namaanak }}</td>
                        <td style="text-align:center;">{{ $pe2->jenjanganak }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    </div>

    </div>

    @section('atas')
    @endsection
    @section('tengah')
    @endsection
    @section('bawah')
        <br>
        <br>
        <div class="foot1 d-flex justify-content-center">
            <div class="foot2"><a href="https://instagram.com/ahjumma_go?igshid=ZWIzMWE5ZmU3Zg==" target="_blank"><i class="fa fa-instagram"
                style="font-size:40px;color:rgba(179, 136, 235,0.7)"></i></a></div>
    <div class="foot2"><a href="mailto:ahjumma.go@gmail.com"><i class="fa fa-envelope-o" style="font-size:40px;color:rgba(179, 136, 235,0.7)"></i></a></div>
    <div class="foot2"><a href="https://wa.me/message/4KVS56V7MSOPL1" target="_blank"><i class="fa fa-whatsapp" style="font-size:40px;color:rgba(179, 136, 235,0.7)"></i></a></div>
        </div>
        <div class="foot1 d-flex justify-content-center">
            <p class="foot3">Jalan.Sistem Informasi</p>
        </div>
        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>
    @endsection
