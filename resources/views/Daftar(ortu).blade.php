@extends ('master')

<body class="daftarsekolah">
    <div class="loader loader--hidden"></div>
    @section('atas')
        <img src="/data_file/rocking-horse (2) 1(1).png" class="logodaftar spasibawah">
        <h1 class="textdaftar"><b>Daftar</b></h1>
    @endsection
    @section('tengah')
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">

                <form action="/cekula/Berhasilorangtua" method="POST">
                     {{ csrf_field() }}
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama Lengkap</label>
                        <input type="text" class="form-control inputmasuk" id="name"
                            placeholder="Enter nama sekolah" name="name" value="{{ old('name') }}">
                        @foreach ($errors->get('name') as $error)
                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                        @endforeach
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif;">Email</label>
                        <input type="email" class="form-control inputmasuk" id="email" placeholder="Enter email"
                            name="email" value="{{ old('email') }}">
                        @foreach ($errors->get('email') as $error)
                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                        @endforeach
                    </div>
                    <div class="mb-4 mt-3">
                        <label for="password" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Buat Kata Sandi </label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control inputmasuk" id="password"
                                placeholder="Enter password" name="password" style="margin-bottom:-10px;" value="{{ old('password') }}">
                            <span class="input-group-text inputmasuk" style="margin-bottom:-10px;">
                                <i class="fa fa-eye-slash" id="togglePassword" onclick="myFunction()"
                                    style="cursor: pointer"></i>
                            </span>

                        </div>
                        @foreach ($errors->get('password') as $error)
                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                        @endforeach

                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn button3" value="Simpan Data">Daftar</button>


                </form>
                <h1 class="textsudahpunyaakun"><b>Sudah Punya akun ?</b></h1>
                <div style="text-align:center"><a href="/cekula/masukorangtua" class="link1"> <span style="text-align:center">Masuk</span> </a></div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    @endsection

