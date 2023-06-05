@extends ('master')

<body class="masuk">
    @section('atas')
        <a href="/cekula/mulai"><img src="/data_file/Halaman_Awal__ALUR_ORTU__3_-removebg-preview.png" class="logomasuk"></a>
    @endsection
    @section('tengah')
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                @if (session('status'))
                <div class="alert alert-primary alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>{{ session('status') }}</strong>
                </div>
                @endif
                <form action="/cekula/loginorangtua" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label" style="color:aliceblue;"><b>Email</b></label>
                        <input type="email" class="form-control inputmasuk" id="email" placeholder="Enter email"
                            name="email" style="margin-bottom:30px">

                        @foreach ($errors->get('email') as $error)
                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" style="color:aliceblue"><b>Kata Sandi</b></label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control inputmasuk" id="password"
                                placeholder="Enter password" name="password" style="margin-bottom:-10px;">
                            <span class="input-group-text inputmasuk" style="margin-bottom:-10px;">
                                <i class="fa fa-eye-slash" id="togglePassword" onclick="myFunction()"
                                    style="cursor: pointer"></i>
                            </span>
                        </div>
                        @foreach ($errors->get('password') as $error)
                            <i class="fa fa-exclamation-circle"
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000;'></i><span
                                style="color:#ff0000;">{{ $error }}</span>
                        @endforeach
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn button2">Masuk</button>
                    <br>

                        <p style="color:white;text-align:center"><a href="/cekula/Daftarorangtua" class="linkdaftar">Belum Punya Akun ?</a></p>

                </form>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    @endsection
