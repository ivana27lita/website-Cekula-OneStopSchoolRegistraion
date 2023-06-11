@extends ('master')

<body class="berandaortu">
    <div class="loader loader--hidden"></div>
    <div id="navbar">
        <nav class="nav-bar">
            <a href="#"><img src="/data_file/Group 220.png" class="nav-logo"></a>
            <ul>

                <li class="list"><a href="/cekula/BerandaSekolah" class="linkheader">Beranda</a></li>
                <li class="list"><a href="/cekula/LihatRespons" class="linkheader">Lihat Respons</a></li>
                <li class="list"><a class="{{ request()->is('/cekula/bantuan') ? active : '' }}"
                        href="{{ url('/cekula/bantuansekolah') }}" class="linkheader">Bantuan</a></li>
                <li class="list1"><a href="/cekula/profilpenggunasekolah" ><i class='fa fa-user-circle-o' style='font-size:36px;color:#7C88F2;'></a></i></li>
            </ul>


            <div class="toggle_btn">
                <i class="fa fa-bars" style="font-size:25px;color:black"></i>
            </div>


            <div class="dropdown_menu">
                <li><a href="/cekula/BerandaSekolah">Beranda</a></li>
                <li><a href="/cekula/LihatRespons">Bandingkan</a></li>
                <li><a href="/cekula/bantuansekolah">Bantuan</a></li>
                <li><a href="/cekula/profilpenggunasekolah"><i class="fa fa-user-circle-o"style='font-size:24px;color:#000000;cursor: pointer;'></i></a></li>
            </div>
        </nav>

    </div>
    @section('atas')
        <div class="content">
            <h1 class="teksberanda1"><b>FAQs - Frequently Ask Questions</h1>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Bagaimana cara mendaftarkan sekolah baru di website Cekula?
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Setiap sekolah yang hendak mendaftarkan sekolahnya wajib membuat akun di website Cekula terlebih dahulu dengan ketentuan bahwa sekolah telah terverifikasi dan memiliki NPSN resmi pada laman Kemendikbud.

                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample5">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Bagaimana cara mengubah informasi sekolah?
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample5">
                                <div class="accordion-body">
                                    Pada website tersebut telah disediakan template untuk pengisiian informasi sekolah sehingga pihak sekolah dapat mengubah informasi sekolah dan menambahkan informasi fasilitas serta menampilkan galeri sekolah melalui tombol “Edit” pada halaman Beranda khususnya pada tab Profil.
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample6">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Bagaimana cara memulai pendaftaran siswa baru?
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample6">
                                <div class="accordion-body">
                                    Pihak sekolah dapat mengumpulkan pendaftaran siswa baru dengan membuka sesi pendaftaran yang terdapat pada laman Beranda sekolah. Dengan memulai pendaftaran, sekolah dapat mengisi batas pendaftaran siswa baru beserta kuota rombongan belajar yang akan diterima.
                                    <br>
                                    <br>
                                    Sekolah juga dapat menutup masa pendaftaran lebih awal apabila kuota rombongan belajar siswa telah terpenuhi.

                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 batasatas">
                        <div class="accordion" id="accordionExample2">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Bagaimana cara mengubah kata sandi akun?
                                </button>
                              </h2>
                              <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Pengguna dapat mengubah data kredensial akun mereka pada laman profil pengguna dan klik “Edit”, maka pengguna akan diarahkan pada laman mode edit dan dapat melakukan perubahan data kredensial akun.
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample3">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Bagaimana cara mengubah persyaratan pendaftaran sekolah?
                                </button>
                              </h2>
                              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    Pihak sekolah dapat mengubah persyaratan pendaftaran sekolah sesuai dengan ketentuan masing-masing sekolah melalui fitur “Edit” pada halaman Beranda khususnya pada tab Persyaratan.
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample4">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Bagaimana cara melihat hasil pendaftaran siswa baru?
                                </button>
                              </h2>
                              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    Pihak sekolah dapat melihat hasil respons formulir yang telah dikumpulkan selama sesi pendaftaran pada laman “Lihat Respons”. Pada laman tersebut, pihak sekolah dapat melihat jawaban formulir melalui fitur “Lihat Formulir” dan melakukan validasi untuk keputusan penerimaan siswa. Semua data siswa yang diterima kemudian dapat diunduh dalam bentuk Excel.
                                    <br>
                                    <br>
                                    Sekolah dapat mengumumkan hasil pendaftaran siswa baru pada laman infornasi sekolah dnegan fitur “Umumkan Hasil Pendaftaran”
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-9">

                    </div>
                    <div class="col-md-3">

                        <a class="btn button16 float-end" href="https://wa.me/message/4KVS56V7MSOPL1"><div class="row"><div class="col-2" style="align-items: center"><i class="fa fa-whatsapp" style="font-size:45px;color:rgb(255, 255, 255);margin-right:15px;"></i></div><div class="col-10">Ask<br>Question</div></div></a>
                    </div>

                </div>
                <br>

            </div>
        </div>
        <br>
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



    @endsection

