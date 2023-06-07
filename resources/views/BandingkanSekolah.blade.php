
@extends ('master')

<body class="berandaortu"> oke
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
    <form action="/cekula/Informasisekolah" method="POST">
        {{ csrf_field() }}
        <div class="content">
            <div class="bg-bandingkan1">
                <h1 class="teksberanda1"><b>Bandingkan 2 Sekolah</b></h1>
                <div class="bg-bandingkan2">
                    <div class="row">
                        <div class="col-12">
                            <div class="select-box">
                                <label for="sekolah1" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Sekolah 1 </label>
                                <div class="select-option">
                                    <input type="text" placeholder="Pilih Sekolah" id="soValue"name="sekolah1" value="{{ old('sekolah1') }}" >
                                </div>
                                @foreach ($errors->get('sekolah1') as $error)
                                <i class='fa fa-exclamation-circle'
                                    style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                    style="color:#ff0000">{{ $error }}</span>
                            @endforeach
                                <div class="content1">
                                    <div class="search">
                                        <input type="text" id="optionSearch" placeholder="search" name="">
                                    </div>

                                    <ul class="options">
                                        @foreach ($npsn2 as $opsi)
                                            <li>{{ $opsi->name }}</li>
                                        @endforeach
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="select-box2">
                                <div class="select-option2">
                                    <label for="sekolah2" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Sekolah 2 </label>
                                    <input type="text" placeholder="Pilih Sekolah" id="soValue2" name="sekolah2" value="{{ old('sekolah2') }}">
                                </div>
                                @foreach ($errors->get('sekolah2') as $error)
                                <i class='fa fa-exclamation-circle'
                                    style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                    style="color:#ff0000">{{ $error }}</span>
                            @endforeach
                                <div class="content2">
                                    <div class="search2">
                                        <input type="text" id="optionSearch2" placeholder="search" name="">
                                    </div>
                                    <ul class="options2">
                                        @foreach ($npsn2 as $opsi)
                                            <li>{{ $opsi->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn button3" value="SimpanData2">Banding</button>
                </div>
            </div>
        </div>
    </form>
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
            const selectBox = document.querySelector('.select-box');
            const selectOption = document.querySelector('.select-option');
            const soValue = document.querySelector('#soValue');
            const optionSearch = document.querySelector('#optionSearch');
            const options = document.querySelector('.options');
            const optionList = document.querySelectorAll('.options li');

            selectOption.addEventListener('click', function() {
                selectBox.classList.toggle('active');
            });

            optionList.forEach(function(optionsListSingle) {
                optionsListSingle.addEventListener('click', function() {
                    text = this.textContent;
                    soValue.value = text;
                    selectBox.classList.remove('active');
                })
            });

            optionSearch.addEventListener('keyup', function() {
                var filter, li, i, textValue;
                filter = optionSearch.value.toUpperCase();
                li = options.getElementsByTagName('li');
                for (i = 0; i < li.length; i++) {
                    liCount = li[i];
                    textValue = liCount.textContent || liCount.innerText;
                    if (textValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = '';
                    } else {
                        li[i].style.display = 'none';
                    }
                }
            })

            const selectBox2 = document.querySelector('.select-box2');
            const selectOption2 = document.querySelector('.select-option2');
            const soValue2 = document.querySelector('#soValue2');
            const optionSearch2 = document.querySelector('#optionSearch2');
            const options2 = document.querySelector('.options2');
            const optionList2 = document.querySelectorAll('.options2 li');

            selectOption2.addEventListener('click', function() {
                selectBox2.classList.toggle('active2');
            });

            optionList2.forEach(function(optionsListSingle2) {
                optionsListSingle2.addEventListener('click', function() {
                    text2 = this.textContent;
                    soValue2.value = text2;
                    selectBox2.classList.remove('active2');
                })
            });

            optionSearch2.addEventListener('keyup', function() {
                var filter2, li2, i2, textValue2;
                filter2 = optionSearch2.value.toUpperCase();
                li2 = options2.getElementsByTagName('li');
                for (i2 = 0; i2 < li2.length; i2++) {
                    liCount2 = li2[i2];
                    textValue2 = liCount2.textContent || liCount2.innerText;
                    if (textValue2.toUpperCase().indexOf(filter2) > -1) {
                        li2[i2].style.display = '';
                    } else {
                        li2[i2].style.display = 'none';
                    }
                }
            });


        </script>

    @endsection

