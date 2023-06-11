@extends ('master')

<body class="berandaortu">
    <div class="loader loader--hidden"></div>
    <div id="navbar">
        <nav class="nav-bar">
            <a href="#"><img src="/data_file/Group 220.png" class="nav-logo"></a>
            <ul>

                <li class="list"><a href="/cekula/BerandaOrtu" class="linkheader">Beranda</a></li>
                <li class="list"><a href="/cekula/Bandingkansekolah" class="linkheader">Bandingkan</a></li>
                <li class="list"><a class="{{ request()->is('/cekula/bantuan') ? active : '' }}"
                        href="{{ url('/cekula/bantuan') }}" class="linkheader">Bantuan</a></li>
                <li class="list1"><a href="/cekula/profilpenggunaortu" ><i class='fa fa-user-circle-o' style='font-size:36px;color:#7C88F2;'></a></i></li>
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
            <h1 class="teksberanda1"><b>FAQs - Frequently Ask Questions</h1>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apa itu fitur Bandingkan?
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Fitur Bandingkan dapat diakses oleh setiap pengguna yang telah memiliki dan masuk ke dalam akun mereka sebagai “Orang Tua”. Fitur ini memungkinkan orang tua untuk  membandingkan dua sekolah sekaligus dengan memasukkan nama sekolah yang hendak dibandingkan sehingga mempermudah orang tua untuk membandingkan kedua sekolah secara langsung.
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample5">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Bagaimana cara melihat apabila pendaftaran anak saya sudah diterima?
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample5">
                                <div class="accordion-body">
                                    Setelah melakukan pendaftaran ke sekolah melalui pengisiian formulir pada website Cekula, orang tua dapat melihat pengumuman hasil penerimaan anak pada laman sekolah yang dituju khususnya pada bagian “Pengumuman” apabila pihak sekolah telah mengumumkan hasil pendaftaran.
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample6">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Apa yang terjadi apabila masa pendaftaran siswa baru pada sekolah sudah lewat?
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample6">
                                <div class="accordion-body">
                                    Sayang sekali, apabila masa pendaftaran siswa baru pada sekolah sudah lewat, Anda sudah tidak dapat melakukan pengumpulan formulir pendaftaran ke pihak sekolah. Harap perhatikan masa sesi pendaftaran dan juga kuota rombongan belajar yang telah ditetapkan pihak sekolah.
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
                                    Bagaimana cara melakukan pendaftaran ke sekolah?
                                </button>
                              </h2>
                              <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Ayah dan Bunda dapat mendaftarkan buah hati Anda pada sekolah yang telah terdaftar pada website Cekula dengan mengisi formulir pendaftaran yang telah disediakan pada laman informasi sekolah sebelum sekolah melakukan penutupan pendaftarannya. Harap persiapkan dokumen yang dibutuhkan dan perhatikan persyaratan pendaftaran yang berlaku pada sekolah juga ya!
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample3">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Bagaimana cara melihat persyaratan pendaftaran sekolah?
                                </button>
                              </h2>
                              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    Ayah dan Bunda dapat melihat persyaratan pendaftaran sekolah untuk sekolah yang dituju pada laman informasi sekolah tersebut khusunya pada bagian persyaratan. Anda dapat membaca persyaratan serta dokumen yang harus dipersiapkan sebelum mendaftar ke sekolah melalui pengisian formulir yang telah disediakan.
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample4">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Bagaimana cara mengubah kata sandi akun?
                                </button>
                              </h2>
                              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    Pengguna dapat mengubah data kredensial akun mereka pada laman profil pengguna dan klik “Edit”, maka pengguna akan diarahkan pada laman mode edit dan dapat melakukan perubahan data kredensial akun.

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

