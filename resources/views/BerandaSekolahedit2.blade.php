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
                <li class="list"><a href="/cekula/LihatRespons" class="linkheader">Lihat Respons</a></li>
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
@foreach ($info4 as $infoo)
    <img src="/data_infosekolah/{{ $infoo->banner }}" width=100% height=40%
        style="margin-bottom:-200px;display: block;
    background: rgba(0, 0, 0,0.6);">



    <h1 style="color:white;padding-top:20px;margin-left:40px;font-family:Poppins,Sans-Serif">
        @foreach ($info5 as $info)
            {{ $info->name }}
        @endforeach
        <br>0.4 km
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

                <div class="alert alert-danger alert-dismissible fade show" style="margin-left:20px;margin-right:20px">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Peringatan !! Anda sedang dalam mode edit Tab persyaratan, silahkan buka tab persyaratan/pendaftaran</strong>
                </div>
                <div class="tab">
                    <a class="tablinks" onclick="openCity(event, 'Profil')" id="defaultOpen">Profil</a>
                    <a class="tablinks" onclick="openCity(event, 'Pendaftaran')">Pendaftaran</a>
                    <a class="tablinks" onclick="openCity(event, 'Pengumuman')" style="display:none">Pengumuman</a>
                </div>



                    <div id="Profil" class="tabcontent">


                            <div class="row" style="--bs-gutter-x: 0rem;">


                                <div class="col-md-4">
                                    <div style="background-color:#F1F1F1;border-radius:20px;padding:20px;">{{ csrf_field() }}
                                        <h6><b>Informasi Sekolah</b></h6>
                                        {{ $infoo->alamatSekolah }}
                                        <div style="margin-bottom:20px;"></div>
                                        <h6><b>Hubungi Kami</b></h6>
                                    {{ $infoo->noTelp }}

                                    </div>
                                    <div
                                        style="margin-top:20px;background-color:#F1F1F1;border-radius:20px;padding:20px;">
                                        <h6><b>Jadwal kegiatan Belajar</b></h6>
                                        <h6>Senin s.d Jumat<span
                                                style="margin-right:50px;margin-bottom:10px;"></span>
                                                {{ $infoo->senin }}
                                        </h6>
                                        <h6>Sabtu<span style="margin-right:100px"></span>
                                            {{ $infoo->sabtu }}
                                        </h6>


                                    </div>


                                </div>

                                <div class="col-md-4">
                                    <div style="background-color:#F1F1F1;border-radius:20px;padding:20px;">




                    <div style="background-color:#F1F1F1;border-radius:20px;padding:20px;">
                        <h6><b>Fasilitas</b></h6>
                        <h6>{{$infoo->deskripsifasilitas}}</h6>
                        @if($infoo->playground=="playground")
                        <img src=/data_file/Vector(2).png width=20px height=auto
                            style="margin-right:10px;">Playground<br style="margin-bottom:15px;">
                        @else
                        @endif
                        @if($infoo->kolamrenang=="kolamrenang")
                        <img src=/data_file/Vector(3).png width=20px height=auto
                            style="margin-right:10px;">Kolam Renang<br style="margin-bottom:15px;">
                            @else
                            @endif
                            @if($infoo->funlearning=="funlearning")
                        <img src=/data_file/bi_emoji-smile.png width=20px height=auto
                            style="margin-right:10px;">Fun Lerning<br style="margin-bottom:15px;">
                            @else
                            @endif
                        @if($infoo->kelas=="kelas")
                        <img src=/data_file/Group154.png width=20px height=auto style="margin-right:10px;">{{ $info->kelas }}
                        @else
                        @endif

                    </div>

            </div>


        </div>

        <div class="col-md-3">

            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="container">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/data_infosekolah/{{ $infoo->img1}}" alt="Los Angeles" class="d-block"
                                style="width:80%;margin-right:auto;margin-left:auto">
                        </div>
                        <div class="carousel-item">
                            <img src="/data_infosekolah/{{ $infoo->img2}}" alt="Chicago" class="d-block"
                                style="width:80%;margin-right:auto;margin-left:auto">
                        </div>
                        <div class="carousel-item">
                            <img src="/data_infosekolah/{{ $infoo->img3}}" alt="New York" class="d-block"
                                style="width:80%;margin-right:auto;margin-left:auto">
                        </div>
                    </div>@endforeach
                </div>
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>



        </div>

    </div>
    <div class="row" style="--bs-gutter-x: 0rem;">
        <div class="col-md-9"style="display:none">
            <h4 style="text-align:center;margin-top:30px;margin-bottom:20px;"><b>Pendaftaran Siswa Baru
                    -
                    Sedang Berlangsung</b></h4>
            <div class="row">

                <div class="col-4">
                    <div class="module-border-wrap">
                        <div class="module">kuota <br>145 </div>
                    </div>
                </div>

                <div class="col-7">
                    <span
                        style="display:block;background-color:#AAEEFF;padding:10px;margin-top:15px;margin-botttom:10px;border-radius:20px;color:white;text-align:center;font-weight:bold;font-size:18px;">15
                        Januari - 10 Februari</span>
                    <span style="display:block;padding:10px;">Kuota : <br> Pendaftar : </span>
                </div>

            </div>




        </div>

    </div>


    </div>

    <div id="Pendaftaran" class="tabcontent">
         <form action="/cekula/simpaninformasisekolah2/{{ $infoo->id }}" method="POST" >
        <div class="row" style="--bs-gutter-x: 0rem;">{{ csrf_field() }}
            <div class="col-md-7" style="background-color:#F1F1F1;padding:20px;border-radius:20px;">
                <h6 style="text-align:center"><b>Persayaratan</b></h6>
                <h6 style="text-align:justify">
                    <textarea class="form-control inputmasuk" rows="3" id="persyaratan1" name="persyaratan1"
                    placeholder="Enter persyaratan 1" required>{{ $infoo->persyaratan1 }}</textarea><br>
                    <textarea class="form-control inputmasuk" rows="3" id="persyaratan2" name="persyaratan2"
                    placeholder="Enter persyaratan 2" required>{{ $infoo->persyaratan2 }}</textarea><br>
                    <textarea class="form-control inputmasuk" rows="3" id="persyaratan3" name="persyaratan3"
                    placeholder="Enter persyaratan 3" required>{{ $infoo->persyaratan3 }}</textarea><br>
                    <textarea class="form-control inputmasuk" rows="3" id="persyaratan4" name="persyaratan4"
                    placeholder="Enter persyaratan 4" required>{{ $infoo->persyaratan4 }}</textarea><br>
                    <textarea class="form-control inputmasuk" rows="3" id="persyaratan5" name="persyaratan5"
                    placeholder="Enter persyaratan 5" required>{{ $infoo->persyaratan5 }}</textarea>
                </h6>
            </div>

            <div class="row" style="--bs-gutter-x: 0rem;margin-top:40px;margin-bottom:-20px;">
                <button class="btn button3" type="submit">Simpan</a>
            </div>
</form>
        </div>
    </div>


    <div id="Pengumuman" class="tabcontent" style="display:none">
        <br>
        <br>
        <br>

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
