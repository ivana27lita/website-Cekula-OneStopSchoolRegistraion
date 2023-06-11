@extends ('master')

<body>
    <div class="loader loader--hidden"></div>
    <div id="navbar">
        <nav class="nav-bar">
            <a href="#"><img src="/data_file/Group 220.png" class="nav-logo"></a>
            <ul class="main-menu">
                <li class="list "><a
                        class="{{ request()->is('/cekula/BerandaSekolah') ? active : '' }}"href="{{ url('/cekula/BerandaSekolah') }}"
                        class="linkheader">Beranda</a></li>
                <li class="list"><a href="/cekula/LihatRespons" class="linkheader">Lihat
                        Respons</a></li>
                <li class="list"><a href="/cekula/bantuansekolah" class="linkheader">Bantuan</a></li>
                <li class="list1"><a href="/cekula/profilpenggunasekolah"><i class='fa fa-user-circle-o'
                            style='font-size:36px;color:#7C88F2;'>
                        </i></a></li>
            </ul>
            <div class="toggle_btn">
                <i class="fa fa-bars" style="font-size:25px;color:black"></i>
            </div>
            <div class="dropdown_menu">
                <li><a href="/cekula/BerandaSekolah">Beranda</a></li>
                <li><a href="/cekula/LihatRespons">Lihat Respons</a></li>
                <li><a href="/cekula/bantuansekolah">Bantuan</a></li>
                <li><a href="/cekula/profilpenggunasekolah"><i class="fa fa-user-circle-o" style='font-size:24px;color:#000000;cursor: pointer;'></i></a></li>
            </div>
        </nav>
    </div>
    @foreach ($info as $info)
        <img src="/data_infosekolah/{{ $info->banner }}" width=100%;
            style="margin-bottom:-200px;display: block;
    background: rgba(0, 0, 0,0.6);"
            alt="Silakan menambahkan foto dengan fitur Edit pada tab Profil">

        <h1 style="color:white;padding-top:20px;margin-left:40px;font-family:Poppins,Sans-Serif">
           <br>
            {{ auth()->user()->name }}

        </h1>

        <div class="row" style="--bs-gutter-x: 0rem;">
            <div class="bg-profil">
                <div class="col-12">
                    @if (session('status2'))
                        <div class="alert alert-primary alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>{{ session('status2') }}</strong>
                        </div>
                    @endif
                    @if (session('status3'))
                        <div class="alert alert-primary alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>{{ session('status3') }}</strong>
                        </div>
                    @endif
                    @if (session('status4'))
                        <div class="alert alert-primary alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>{{ session('status4') }}</strong>
                        </div>
                    @endif
                    @if (session('status9'))
                        <div class="alert alert-primary alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>{{ session('status9') }}</strong>
                        </div>
                    @endif
                    @if (session('status10'))
                        <div class="alert alert-primary alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>{{ session('status10') }}</strong>
                        </div>
                    @endif
                    <div class="tab">
                        <a class="tablinks" onclick="openCity(event, 'Profil')" id="defaultOpen">Profil</a>
                        <a class="tablinks" onclick="openCity(event, 'Pendaftaran')">Pendaftaran</a>
                        @forelse($f1 as $f)
                        <a class="tablinks" onclick="openCity(event, 'Pengumuman')">Pengumuman</a>@empty
                        @endforelse
                    </div>

                    <div id="Profil" class="tabcontent">
                        <div class="row" style="--bs-gutter-x: 0rem;">
                            <div class="col-md-4">
                                <div style="background-color:#F1F1F1;border-radius:20px;padding:20px;">
                                    <h6><b>Informasi Sekolah</b></h6>

                                    {{ $info->alamatSekolah }}



                                    <div style="margin-bottom:20px;"></div>
                                    <h6><b>Hubungi Kami</b></h6>
                                    <h6>{{ $info->noTelp }}</h6>
                                </div>
                                <div style="margin-top:20px;background-color:#F1F1F1;border-radius:20px;padding:20px;">
                                    <h6><b>Jadwal kegiatan Belajar</b></h6>
                                    <h6>Senin s.d Jumat<span style="margin-right:15px"></span>{{ $info->senin }}
                                    </h6>
                                    <h6>Sabtu<span style="margin-right:85px"></span>{{ $info->sabtu }}
                                    </h6>

                                </div>


                            </div>

                            <div class="col-md-4">
                                <div style="background-color:#F1F1F1;border-radius:20px;padding:20px;">
                                    <h6><b>Fasilitas</b></h6>
                                    <h6>{{ $info->deskripsifasilitas }}</h6>
                                    @if ($info->playground == 'playground')
                                        <img src=/data_file/Vector(2).png width=20px height=auto
                                            style="margin-right:10px;">Playground<br style="margin-bottom:15px;">
                                    @else
                                    @endif
                                    @if ($info->kolamrenang == 'kolamrenang')
                                        <img src=/data_file/Vector(3).png width=20px height=auto
                                            style="margin-right:10px;">Kolam Renang<br style="margin-bottom:15px;">
                                    @else
                                    @endif
                                    @if ($info->funlearning == 'funlearning')
                                        <img src=/data_file/bi_emoji-smile.png width=20px height=auto
                                            style="margin-right:10px;">Fun Lerning<br style="margin-bottom:15px;">
                                    @else
                                    @endif
                                    @if ($info->kelas == 'kelas')
                                        <img src=/data_file/Group154.png width=20px height=auto
                                            style="margin-right:10px;">{{ $info->kelas }}
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
                                                <img src="/data_infosekolah/{{ $info->img1 }}"
                                                    alt="Foto silahkan diisi klik edit" class="d-block"
                                                    style="width:80%;margin-right:auto;margin-left:auto">

                                            </div>
                                            <div class="carousel-item">
                                                <img src="/data_infosekolah/{{ $info->img2 }}"
                                                    alt="Foto silahkan diisi klik edit" class="d-block"
                                                    style="width:80%;margin-right:auto;margin-left:auto">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/data_infosekolah/{{ $info->img3 }}"
                                                    alt="Foto silahkan diisi klik edit" class="d-block"
                                                    style="width:80%;margin-right:auto;margin-left:auto">
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

                            <div class="row" style="--bs-gutter-x: 0rem;margin-top:40px;margin-bottom:-20px;">
                                <a class="btn button8"
                                    href="/cekula/editinformasisekolah/{{ auth()->user()->id }}"><i
                                        class='fa fa-pencil'></i><span style="margin-left:10px;">Edit</span></a>
                            </div>
                        </div>
                        <div class="row" style="--bs-gutter-x: 0rem;">

                            @forelse ($info6 as $sesii)
                                <div class="col-md-9">
                                    <h4 style="text-align:center;margin-top:30px;margin-bottom:20px;">
                                        <b>Pendaftaran Siswa Baru
                                            -
                                            Sedang Berlangsung</b>
                                    </h4>
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
                                                {{ $sesii->kuotarombel }}<br> Pendaftar :  {{ $f3->count() }}</span>
                                        </div>
                                    </div>
                                </div>

                            @empty
                            @endforelse



                        </div>


                    </div>

                    <div id="Pendaftaran" class="tabcontent">
                        <div class="row" style="--bs-gutter-x: 0rem;">
                            <div class="col-md-7" style="background-color:#F1F1F1;padding:20px;border-radius:20px;">
                                <h6 style="text-align:center"><b>Persyaratan</b></h6>
                                <h6 style="text-align:justify">1. {{ $info->persyaratan1 }}<br>
                                    2. {{ $info->persyaratan2 }}<br>
                                    3. {{ $info->persyaratan3 }}<br>
                                    4. {{ $info->persyaratan4 }}<br><br>
                                    {{ $info->persyaratan5 }}<br>
                                </h6>

                                <div class="row" style="--bs-gutter-x: 0rem;margin-top:40px;margin-bottom:-20px;">
                                    <a class="btn button8"
                                        href="/cekula/editinformasisekolah2/{{ auth()->user()->id }}"><i
                                            class='fa fa-pencil'></i><span
                                            style="margin-left:10px;">Edit</span></a>
                                </div>
                                <br>
                            </div>


                            <div class="col-md-4 bg-formulir" style="background-color:rgba(146, 92, 217, 0.7);border-radius:20px;">

                                @forelse ($info6 as $sesii2)
                                    <h4
                                        style="text-align:center;margin-top:30px;margin-bottom:20px;color:white;border-radius:20px;">
                                        <b>Pendaftaran Siswa Baru -
                                            Sedang Berlangsung </b>
                                    </h4>
                                @empty
                                    <h4
                                        style="text-align:center;margin-top:30px;margin-bottom:20px;color:white;border-radius:20px;">
                                        <b>Pendaftaran Siswa Baru - Masih ditutup </b>
                                    </h4>
                                @endforelse

                                <div class="row" style="--bs-gutter-x: 0rem;">
                                    @forelse ($info6 as $sesii2)
                                        <div class="col-5 center">
                                            <img src="/data_file/students 1(2).png" width=105px height=auto>
                                        </div>
                                        <div class="col-7">

                                            <a>
                                                <span
                                                    style="display:block;background-color:rgba(179, 136, 235,0.7);padding:12px;margin:10px;border-radius:20px;">
                                                    <h5 style="color:black;text-align:center" id="jammundur"></h5>

                                                </span>
                                            </a>
                                            <script>
                                                // Set the date we're counting down to
                                                var countDownDate = new Date("{{ date('d F , Y 23:59:59', strtotime($sesii->TanggalSelesai)) }}").getTime();

                                                // Update the count down every 1 second
                                                var x = setInterval(function() {

                                                    // Get today's date and time
                                                    var now = new Date().getTime();

                                                    // Find the distance between now and the count down date
                                                    var distance = countDownDate - now;

                                                    // Time calculations for days, hours, minutes and seconds
                                                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                                    // Output the result in an element with id="demo"
                                                    document.getElementById('jammundur').innerHTML = days + " Hari : " + hours + " Jam : " +
                                                        minutes + " Menit : " + seconds + " Detik ";

                                                    // If the count down is over, write some text
                                                    if (distance < 0) {
                                                        clearInterval(x);
                                                        document.getElementById('jammundur').innerHTML = "EXPIRED";
                                                    }
                                                }, 1000);
                                            </script>
                                        </div>
                                    @empty
                                        <div class="col-5 center">
                                            <img src="/data_file/students 1(2).png" width=105px height=auto>
                                        </div>
                                        <div class="col-7">

                                            <a>
                                                <span
                                                    style="display:block;background-color:rgba(179, 136, 235,0.7);padding:12px;margin:10px;border-radius:20px;">
                                                    <h5 style="color:rgb(255, 255, 255);text-align:center">Pendaftaran
                                                        Belum Dibuka</h5>
                                                </span>
                                            </a>
                                        </div>
                                    @endforelse



                                </div>

                            </div>

                            <div class="row">
                                @forelse($info6 as $sesi)
                                    <div class="col-7">

                                    </div>
                                    <div class="col-5 center">

                                        <a class="btn button12" type="submit"
                                            href="/cekula/hapusmulaidaftar/{{ $info->id_sekolah }}">Tutup
                                            <br>Pendaftaran</a>

                                    </div>

                                @empty
                                    <div class="col-7">

                                    </div>
                                    <div class="col-5 center">

                                        <a class="btn button11" type="submit"
                                            href="/cekula/sesimulaidaftar/{{ $info->id_sekolah }}">Mulai<br>Pendaftaran</a>

                                    </div>
                                @endforelse
                            </div>

                        </div>
                    </div>

                    <div id="Pengumuman" class="tabcontent">
                        <table class="table table-white css-serial">

                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenjang</th>
                            </tr>
                            @foreach ($f2 as $p)
                                <tr>
                                    <td style="text-align:center;"></td>
                                    <td>{{ $p->namaanak }}</td>
                                    <td style="text-align:center;">{{ $p->jenjanganak }}</td>

                                </tr>
                            @endforeach
                        </table>

                    </div>


                </div>

            </div>
    @endforeach
    </div>

    @section('atas')
    @endsection
    @section('tengah')
    @endsection
    @section('bawah')
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

            function myFunction() {
                var x = document.getElementById("tabcontent");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
        </script>
    @endsection
