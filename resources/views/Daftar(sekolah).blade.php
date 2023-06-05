@extends ('master')

<body class="daftarsekolah">
    @section('atas')
        <img src="/data_file/Group 25.png" class="spasibawah">
    @endsection
    @section('tengah')
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <form action="/cekula/Berhasilsekolah" method="POST" >
                    {{ csrf_field() }}
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama Sekolah</label>
                        <input type="text" class="form-control inputmasuk" id="name" placeholder="Enter nama sekolah"
                            name="name" style="text-transform:uppercase" value="{{ old('name') }}">
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
                        <label for="password" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Kata Sandi </label>
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

                    <div class="mb-3 mt-3">
                        <label for="alamat" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Alamat Sekolah</label>
                        <textarea class="form-control inputmasuk" rows="1" id="alamat" name="alamat" placeholder="Enter alamat sekolah">{{ old('alamat') }}</textarea>
                        @foreach ($errors->get('alamat') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                    @endforeach
                      </div>
                    <div class="mb-3 mt-3">
                        <label class="form-label" for="typePhone" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nomor Telepon Kantor</label>
                        <input type="tel" id="typePhone" class="form-control inputmasuk" placeholder="Enter Telepon Kantor" name="typePhone" value="{{ old('typePhone') }}">
                        @foreach ($errors->get('typePhone') as $error)
                        <ul>
                        <li>
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                        </li>
                        </ul>
                    @endforeach
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="form-label" for="npsn" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">NPSN</label>
                        <input type="text" id="npsn" class="form-control inputmasuk" placeholder="Enter NPSN" name="npsn" value="{{ old('npsn') }}">
                        @foreach ($errors->get('npsn') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000" >{{ $error }}</span>
                        @endforeach
                    </div>
                     <br>
                    <br>
                    <button type="submit" class="btn button3" value="Simpan Data">Daftar</button>

                </form>

            </div>
            <div class="col-md-3">
            </div>
        </div>
    @endsection
