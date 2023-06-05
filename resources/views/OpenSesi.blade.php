@extends ('master')

<body class="berandaortu">
<div class="loader loader--hidden"></div>
    <div id="navbar">
        <nav class="nav-bar">
            <a href="#"><img src="/data_file/Group 220.png" class="nav-logo"></a>
            <ul>
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
@foreach ($sesi as $sesii)


    @section('tengah')
    <form action="/cekula/berhasilbukasesi/{{ $sesii->id_sekolah }}" method="POST">
        {{ csrf_field() }}@endforeach
        <div class="content">
            <div class="bg-bandingkan3">
                <h1 class="teksberanda1" style="color:white"><b>Buat Sesi Pendaftaran</b></h1>
                <div class="container">
                    <form action="action_page.php">
                      <br>
                      <div class="row">
                        <div class="col-6 d-flex justify-content-center">
                          <label for="stop" style="color:white"><b>Tanggal Selesai</b></label>
                        </div>
                        <div class="col-6">
                          <input type="date" class="form-control inputmasuk2" id="stop" name="stop" value="{{ old('stop') }}">
                          @foreach ($errors->get('stop') as $error)
                          <i class='fa fa-exclamation-circle'
                              style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                              style="color:#ff0000">{{ $error }}</span>
                      @endforeach
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-6 d-flex justify-content-center">
                          <label for="kuota" style="color:white"><b>Kuota Rombel</b></label>
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control inputmasuk2" id="kuota" name="kuota" placeholder="Masukkan Kuota Rombel" value="{{ old('kuota') }}">
                            @foreach ($errors->get('kuota') as $error)
                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                        @endforeach
                        </div>
                      </div>
                      <br>
                      <br>
                      <button type="submit" class="btn buttonss" value="SimpanData2">Buka Pendaftaran</button>
                    </form>
                </div>
            </div>
        </div>
    </form>
    @endsection
    @section('bawah')
        <br>
        <br>
        <div class="foot1 d-flex justify-content-center">
            <div class="foot2"><a href="https://instagram.com/ahjumma_go?igshid=ZWIzMWE5ZmU3Zg=="><i class="fa fa-instagram"
                        style="font-size:40px;color:rgba(179, 136, 235,0.7)"></i></a></div>
            <div class="foot2"><a href="mailto:ahjumma.go@gmail.com"><i class="fa fa-envelope-o" style="font-size:40px;color:rgba(179, 136, 235,0.7)"></i></div>
            <div class="foot2"><a href="https://wa.me/message/4KVS56V7MSOPL1"><i class="fa fa-whatsapp" style="font-size:40px;color:rgba(179, 136, 235,0.7)"></i></div>
        </div>
        <div class="foot1 d-flex justify-content-center">
            <p class="foot3">Jalan.Sistem Informasi</p>
        </div>
    @endsection
</body>
