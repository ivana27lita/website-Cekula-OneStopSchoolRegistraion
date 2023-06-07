@extends ('master')

<body class="berandaortu">
    <div class="loader loader--hidden"></div>
    <div id="navbar">
        <nav class="nav-bar">
            <a href="#"><img src="/data_file/Group 220.png" class="nav-logo"></a>
            <ul class="main-menu">
                <li class="list "><a href="{{ url('/cekula/BerandaOrtu') }}" class="linkheader">Beranda</a></li>
                <li class="list"><a class="{{ request()->is('/cekula/Bandingkansekolah') ? active : '' }}"
                        href="/cekula/Bandingkansekolah" class="linkheader">Bandingkan</a></li>
                        <li class="list"><a href="/cekula/bantuan" class="linkheader">Bantuan</a></li>
                        <li class="list1"><a href="/cekula/profilpenggunaortu" ><i class="fa fa-user-circle-o" style='font-size:36px;color:#7C88F2;'></a></i></li>
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
        <div id="content">
            <div class="flex-container2">
                <div class="c2">
                    <h1><b> @foreach ($namasekolah1 as $in)
                        {{ $in->name }}
                    @endforeach</h1></b>

                    <button class="btn button4">Kuota Siswa</button>
                    <div class="panel">
                        <h6>@forelse ($kuota as $k1)
                            {{ $k1->kuotarombel }}
                            @empty
                           Sekolah belum membuka sesi pendaftaran
                        @endforelse</h6>
                    </div>

                    <button class="btn button4">Masa pendaftaran</button>
                    <div class="panel">
                        <h6>@forelse ($kuota as $k1)
                            {{ date('d F', strtotime($k1->created_at)) }}
                            - {{ date('d F', strtotime($k1->TanggalSelesai)) }}
                        @empty
                        Sekolah belum membuka sesi pendaftaran
                        @endforelse
                        </h6>
                    </div>

                    <button class="btn button4">Fasilitas</button>
                    <div class="panel">
                        <h6>@forelse ($info as $in)
                        <ul>
                            @if ($in->playground == 'playground')
                            <li>{{ $in->playground}}</li>
                        @else
                        @endif @if ($in->funlearning == 'funlearning')
                        <li>{{ $in->funlearning}}</li>
                    @else
                    @endif @if ($in->kelas == 'kelas')
                    <li>{{ $in->kelas}}</li>
                @else
                @endif @if ($in->kolamrenang == 'kolamrenang')
                <li>{{ $in->kolamrenang}}</li>
            @else
            @endif
                        </ul>
                    @empty
                    Sekolah belum memasukkan fasilitas
                    @endforelse</h6>
                    </div>
                    <button class="btn button4">Prestasi dan Akreditasi</button>
                    <div class="panel">
                        <h6>Akreditasi A</h6>
                    </div>
                    <button class="btn button4">Lokasi </button>
                    <div class="panel">
                        <h6>@foreach ($info as $in)
                            {{ $in->alamatSekolah }}
                        @endforeach</h6>
                    </div>
                </div>
                <div class="c3">
                    VS
                </div>
                <div class="c2">
                    <h1> <b>@foreach ($namasekolah2 as $in2)
                        {{ $in2->name }}
                    @endforeach</h1></b>
                        <button class="btn button5">Kuota Siswa</button>
                        <div class="panel2">
                            <h6>@forelse ($kuota2 as $k2)
                                {{ $k2->kuotarombel }}
                                @empty
                               Sekolah belum membuka sesi pendaftaran
                            @endforelse</h6>
                        </div>

                        <button class="btn button5">Masa pendaftaran</button>
                        <div class="panel2">
                            <h6>@forelse ($kuota2 as $k2)
                                {{ date('d F', strtotime($k2->created_at)) }}
                                - {{ date('d F', strtotime($k2->TanggalSelesai)) }}
                            @empty
                            Sekolah belum membuka sesi pendaftaran
                            @endforelse</h6>
                        </div>

                        <button class="btn button5">Fasilitas</button>
                        <div class="panel2">
                            <h6> @forelse ($info2 as $in2)
                                <ul>
                                    @if ($in2->playground == 'playground')
                                    <li>{{ $in2->playground}}</li>
                                @else
                                @endif @if ($in2->funlearning == 'funlearning')
                                <li>{{ $in2->funlearning}}</li>
                            @else
                            @endif @if ($in2->kelas == 'kelas')
                            <li>{{ $in2->kelas}}</li>
                        @else
                        @endif @if ($in2->kolamrenang == 'kolamrenang')
                        <li>{{ $in2->kolamrenang}}</li>
                    @else
                    @endif
                                </ul>
                            @empty
                            Sekolah belum memasukkan fasilitas
                            @endforelse</h6>
                        </div>
                        <button class="btn button5">Prestasi dan Akreditasi</button>
                        <div class="panel2">
                            <h6>Akreditasi A</h6>
                        </div>
                        <button class="btn button5">Lokasi </button>
                        <div class="panel2">
                            <h6>@foreach ($info2 as $in2)
                                {{ $in2->alamatSekolah }}
                            @endforeach</h6>
                        </div>
                </div>
            </div>



        </div>
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
            var acc = document.getElementsByClassName("button4");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active3");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
            var acc = document.getElementsByClassName("button5");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active4");
                    var panel2 = this.nextElementSibling;
                    if (panel2.style.maxHeight) {
                        panel2.style.maxHeight = null;
                    } else {
                        panel2.style.maxHeight = panel2.scrollHeight + "px";
                    }
                });
            }
        </script>
    @endsection
