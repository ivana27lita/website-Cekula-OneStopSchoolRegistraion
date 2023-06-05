@extends ('master')



<body class="profilortu">
    <div class="loader loader--hidden"></div>
    @section('atas')
        <img src="/data_file/Group 25.png" class="logodaftar spasibawah">
        <br>
        <br>
    @endsection
    @section('tengah')
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="alert alert-primary alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Mode Edit</strong>
                </div>
                <form action="/cekula/simpanprofilortu/{{ auth()->user()->id }}" method="POST">
                     {{ csrf_field() }}
                    <div class="mb-3 mt-3">@auth('orangtua')
                        <label for="name" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama</label>
                        <input type="text" class="form-control inputmasuk2" id="name"
                            name="name" value="{{auth()->user()->name}}">
                    </div>@endauth
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif;">Email/No Telepon</label>
                        <input type="email" class="form-control inputmasuk" id="email" disabled
                            name="email" value="{{auth()->user()->email}}">
                    </div>
                    <div class="mb-4 mt-3">
                        <label for="password" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Kata Sandi baru</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control inputmasuk2" id="password"
                                name="password" style="margin-bottom:-10px;" value="">
                                <span class="input-group-text inputmasuk2" style="margin-bottom:-10px;">
                                    <i class="fa fa-eye-slash" id="togglePassword" onclick="myFunction()"
                                        style="cursor: pointer"></i>
                                </span>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-6">
                    <button type="submit" class="btn button6" value="Simpan Data" >Simpan</button></a></div>
                    </form> <div class="col-6"><form action="/cekula/logoutortu" method="POST">
                        {{ csrf_field() }}
                    <button type="submit" class="btn button6" value="Keluar Akun">Keluar Akun</button>
                    </form></div></div>
            </div>
        </div>
    @endsection

