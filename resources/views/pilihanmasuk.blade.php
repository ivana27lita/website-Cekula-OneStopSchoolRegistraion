@extends ('master')

<body class="masuksebagai">
    @section('atas')
        <img src="/data_file/Halaman_Awal__ALUR_ORTU__3_-removebg-preview.png" class="logomasuk">
        <p class="teksmasuk">Masuk sebagai</p>
    @endsection
    @section('tengah')
           <a href ="/cekula/masuksekolah" class="btn buttonmasuksebagai" style="margin-top:30px;"><img src="/data_file/school 1.png" class="logosekul" >Sekolah</a>
            <br>
            <a href="/cekula/masukorangtua" class="btn buttonmasuksebagai" style="margin-top:30px;"><img src="/data_file/students 1(1).png" class="logoorangtua" >Orang Tua</a>
            <div style="margin-bottom:50px;"></div>
    @endsection
