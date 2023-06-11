@extends ('master')

<body class="berandaortu">
    @section('atas')
@foreach ( $info as $in)
          {{-- menampilkan error validasi --}}

        <form action="/cekula/jawabanformulir/{{ $in }}" method="POST" enctype="multipart/form-data">

            @endforeach
            {{ csrf_field() }}
            <div class="content">
                <div class="bg-bandingkan2">  @if (count($errors) > 0)
          <div class="alert alert-primary alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Silahkan cek kembali data yang belum terisi (Lebih Teliti)</strong>
        </div>
          @endif
                    <h1 class="teksberanda1" style="color:6070FF"><b>Formulir</b></h1><div class="ScrollStyle">
                    <h5><b>* Peserta Didik</b></h5>

                    <div class="mb-3 mt-3 p-3">
                        <label for="namaLengkap" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama Lengkap</label>
                        <input type="text" class="form-control inputmasuk2" id="namaLengkap" placeholder="Masukkan nama"
                            name="namaLengkap" value="{{ old('namaLengkap') }}" >
                            @foreach ($errors->get('namaLengkap') as $error)

                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                        @endforeach
                        <div class="mb-3 mt-3">
                            <label for="namaPanggilan" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama panggilan</label>
                            <input type="text" class="form-control inputmasuk2" id="namaPanggilan"
                                placeholder="Masukkan Nama panggilan" name="namaPanggilan" value="{{ old('namaPanggilan') }}"
                                >
                                @foreach ($errors->get('namaPanggilan') as $error)

                                <i class='fa fa-exclamation-circle'
                                    style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                    style="color:#ff0000">{{ $error }}</span>
                            @endforeach
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nikAnak" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">NIK</label>
                            <input type="text" class="form-control inputmasuk2" id="nikAnak"
                                placeholder="Masukkan NIK Anak" name="nikAnak" value="{{ old('nikAnak') }}" >
                        </div>
                        @foreach ($errors->get('nikAnak') as $error)
                        <ul>
                        <li>
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                        </li>
                        </ul>
                        @endforeach
                        <div class="mb-3 mt-3">
                            <label for="kewarganegaraan" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Kewarganegaraan</label>
                            <input type="text" class="form-control inputmasuk2" id="kewarganegaraan"
                                placeholder="Masukkan kewarganegaraan" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}"
                                > @foreach ($errors->get('kewarganegaraan') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                        @endforeach
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="tempat" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tempat</label>
                                <input type="textarea" class="form-control inputmasuk2" placeholder="Masukkan Tempat Lahir"  value="{{ old('tempat') }}"
                                    name="tempat" id="tempat" >
                                    @foreach ($errors->get('tempat') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                        @endforeach
                            </div>
                            <div class="col">
                                <label for="tanggalLahir" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tanggal Lahir</label>
                                <input type="date" class="form-control inputmasuk2" placeholder="Masukkan Tanggal lahir"  value="{{ old('tanggalLahir') }}"
                                    name="tanggalLahir" id="tanggalLahir" >
                                    @foreach ($errors->get('tanggalLahir') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                        @endforeach
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Alamat</label>
                            <input type="textarea" class="form-control inputmasuk2" id="alamat"
                                placeholder="Masukkan alamat" name="alamat" value="{{ old('alamat') }}" >
                                @foreach ($errors->get('alamat') as $error)
                                <i class='fa fa-exclamation-circle'
                                    style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                    style="color:#ff0000">{{ $error }}</span>
                                @endforeach
                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col">
                                <label for="agama" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Agama</label>
                                <input type="textarea" class="form-control inputmasuk2" placeholder="Masukkan Agama" value="{{ old('agama') }}"
                                    name="agama" id="agama" >
                                    @foreach ($errors->get('agama') as $error)
                                    <i class='fa fa-exclamation-circle'
                                        style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                        style="color:#ff0000">{{ $error }}</span>
                                    @endforeach
                            </div>
                            <div class="col">
                                <label for="anakKe" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Anak ke</label>
                                <input type="Number" class="form-control inputmasuk2" placeholder="Masukkan anak ke" value="{{ old('anakKe') }}"
                                    name="anakKe" id="anakKe" >
                                    @foreach ($errors->get('anakKe') as $error)
                                    <i class='fa fa-exclamation-circle'
                                        style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                        style="color:#ff0000">{{ $error }}</span>
                                    @endforeach
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col">
                                <p> Jenjang </p>
                                <label class="radio-inline form-check-label" for="Jenjang1">
                                    <input type="radio" class="form-check-input" name="Jenjang" value="TKA" {{ old("Jenjang") == 'TKA' ? 'checked' : '' }}
                                        id="Jenjang1"checked>TK A
                                </label>
                                <label class="radio-inline form-check-label" for="Jenjang2">
                                    <input type="radio" class="form-check-input" name="Jenjang" id="Jenjang2"  value="TKB" {{ old("Jenjang") == 'TKB' ? 'checked' : '' }}>TK
                                    B
                                </label>
                            </div>
                            <div class="col">
                                <label for="jumlahSaudara" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Jumlah Saudara</label>
                                <input type="Number" class="form-control inputmasuk2"
                                    placeholder="Masukkan Jumlah Saudara" value="{{ old('jumlahSaudara') }}" name="jumlahSaudara" id="jumlahSaudara">
                                    @foreach ($errors->get('jumlahSaudara') as $error)
                                    <i class='fa fa-exclamation-circle'
                                        style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                        style="color:#ff0000">{{ $error }}</span>
                                    @endforeach
                                </div>

                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col">
                                <p> Jenis Kelamin </p>
                                <form>
                                    <label class="radio-inline form-check-label" for="jenisKelamin1">
                                        <input type="radio" class="form-check-input" name="jenisKelamin" id="jeniKelamin1" checked value="LakiLaki" {{ old("jenisKelamin") == 'LakiLaki' ? 'checked' : '' }}>Laki - Laki
                                    </label>
                                    <label class="radio-inline form-check-label" for="jenisKelamin2">
                                        <input type="radio" name="jenisKelamin" class="form-check-input" id="jeniKelamin2" value="Perempuan" {{ old("jenisKelamin") == 'Perempuan' ? 'checked' : '' }}>Perempuan
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>


                    <h5><b>* Orang Tua (Ayah)</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="namaayah" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama Ayah/Wali</label>
                        <input type="text" class="form-control inputmasuk2" id="namaAyah"
                            placeholder="Masukkan nama Orang Tua" name="namaayah" value="{{ old('namaayah') }}" >
                            @foreach ($errors->get('namaayah') as $error)
                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                            @endforeach
                            <div class="mb-3 mt-3">
                            <label for="NIKayah" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">NIK</label>
                            <input type="text" class="form-control inputmasuk2" id="NIKayah"
                                placeholder="Masukkan NIK Orang Tua" name="NIKayah" value="{{ old('NIKayah') }}" >
                                @foreach ($errors->get('NIKayah') as $error)
                                <ul>
                                <li>
                                <i class='fa fa-exclamation-circle'
                                    style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                    style="color:#ff0000">{{ $error }}</span>
                                @endforeach
                                </ul>
                            </li>
                            </div>
                        <div class="mb-3 mt-3">
                                <label for="pekerjaanAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pekerjaan</label>
                                <input type="text" class="form-control inputmasuk2" id="pekerjaanAyah"
                                    placeholder="Masukkan pekerjaan orang tua" name="pekerjaanAyah"
                                    value="{{ old('pekerjaanAyah') }}" >
                                    @foreach ($errors->get('pekerjaanAyah') as $error)
                                    <i class='fa fa-exclamation-circle'
                                        style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                        style="color:#ff0000">{{ $error }}</span>
                                    @endforeach
                        </div>
                        <div class="mb-3 mt-3">
                                <label for="pendidikanAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pendidikan Terakhir</label>
                                <input type="text" class="form-control inputmasuk2" id="pendidikanAyah"
                                    placeholder="Masukkan Pendidikan Terakhir Orang Tua" name="pendidikanAyah"
                                    value="{{ old('pendidikanAyah') }}" >
                                    @foreach ($errors->get('pendidikanAyah') as $error)
                                    <i class='fa fa-exclamation-circle'
                                        style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                        style="color:#ff0000">{{ $error }}</span>
                                    @endforeach
                        </div>
                        <div class="mb-3 mt-3">
                                <label for="tanggalAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tanggal Lahir</label>
                                <input type="date" class="form-control inputmasuk2" id="tanggalAyah"
                                    placeholder="Masukkan Tanggal Lahir Orang Tua" name="tanggalAyah"
                                    value="{{ old('tanggalAyah') }}" >
                                    @foreach ($errors->get('tanggalAyah') as $error)
                                    <i class='fa fa-exclamation-circle'
                                        style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                        style="color:#ff0000">{{ $error }}</span>
                                    @endforeach
                        </div>
                        <div class="mb-3 mt-3">
                                <label for="nomorAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nomor telepon</label>
                                <input type="text" class="form-control inputmasuk2" id="nomorAyah"
                                    placeholder="Masukkan nomor telepon Orang Tua" name="nomorAyah"
                                    value="{{ old('nomorAyah') }}" >
                                    @foreach ($errors->get('nomorAyah') as $error)
                                    <i class='fa fa-exclamation-circle'
                                        style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                        style="color:#ff0000">{{ $error }}</span>
                                    @endforeach
                        </div>
                        <div class="form-group">
                            <label for="alamatAyah" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Alamat</label>
                            <textarea name="alamatAyah" id="alamatAyah" class="form-control" cols="30"  rows="10" placeholder="Masukkan Alamat Orang Tua">{{ old('alamatAyah') }}</textarea>
                            @foreach ($errors->get('alamatAyah') as $error)
                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                            @endforeach
                        </div>
                    </div>

                    <h5><b>* Orang Tua(Ibu)</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="namaIbu" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama Ibu/Wali</label>
                        <input type="text" class="form-control inputmasuk2" id="namaIbu"
                            placeholder="Masukkan nama Orang Tua" name="namaIbu"  value="{{ old('namaIbu') }}">
                            @foreach ($errors->get('namaIbu') as $error)
                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                            @endforeach
                        <div class="mb-3 mt-3">
                            <label for="nikIbu" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">NIK</label>
                            <input type="text" class="form-control inputmasuk2" id="nikIbu"
                                placeholder="Masukkan NIK Orang Tua" name="nikIbu" value="{{ old('nikIbu') }}" >
                                @foreach ($errors->get('nikIbu') as $error)
                                <ul>
                                    <li>
                                <i class='fa fa-exclamation-circle'
                                    style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                    style="color:#ff0000">{{ $error }}</span>
                                    </li></ul>
                                @endforeach
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="pekerjaanIbu" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pekerjaan</label>
                            <input type="text" class="form-control inputmasuk2" id="pekerjaanIbu"
                                placeholder="Masukkan pekerjaan Orang Tua" name="pekerjaanIbu" value="{{ old('pekerjaanIbu') }}" >
                                @foreach ($errors->get('pekerjaanIbu') as $error)
                                <i class='fa fa-exclamation-circle'
                                    style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                    style="color:#ff0000">{{ $error }}</span>
                                @endforeach
                            </div>
                        <div class="mb-3 mt-3">
                            <label for="pendidikanIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pendidikan Terakhir</label>
                            <input type="text" class="form-control inputmasuk2" id="pendidikanIbu" placeholder="Masukkan Pendidikan Terakhir Orang Tua" name="pendidikanIbu"
                                value="{{ old('pendidikanIbu') }}" >
                                @foreach ($errors->get('pendidikanIbu') as $error)
                                <i class='fa fa-exclamation-circle'
                                    style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                    style="color:#ff0000">{{ $error }}</span>
                                @endforeach
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="tanggalIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tanggal Lahir</label>
                            <input type="date" class="form-control inputmasuk2" id="tanggalIbu" placeholder="Masukkan Tanggal Lahir Orang Tua" name="tanggalIbu"
                                 value="{{ old('tanggalIbu') }}" >
                                 @foreach ($errors->get('tanggalIbu') as $error)
                                 <i class='fa fa-exclamation-circle'
                                     style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                     style="color:#ff0000">{{ $error }}</span>
                                 @endforeach
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nomorIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nomor Telepon</label>
                            <input type="text" class="form-control inputmasuk2" id="nomorIbu" placeholder="Masukkan nomor telepon Orang Tua" name="nomorIbu"
                                value="{{ old('nomorIbu') }}" >
                                @foreach ($errors->get('nomorIbu') as $error)
                                <i class='fa fa-exclamation-circle'
                                    style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                    style="color:#ff0000">{{ $error }}</span>
                                @endforeach
                        </div>
                        <div class="form-group">
                            <label for="alamatIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Alamat</label>
                            <textarea name="alamatIbu" id="alamatIbu" class="form-control" cols="30" rows="10" placeholder="Masukkan Alamat Orang Tua"  >{{ old('alamatIbu') }}</textarea>
                            @foreach ($errors->get('alamatIbu') as $error)
                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                            @endforeach
                        </div>
                    </div>

                    <h5><b>* Periodik Anak</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="tinggi" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tinggi
                            Badan</label>
                        <input type="number" class="form-control inputmasuk2" id="tinggi" placeholder="Masukkan Tinggi badan"
                            name="tinggi" value="{{ old('tinggi') }}" >
                            @foreach ($errors->get('tinggi') as $error)
                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                            @endforeach
                        <div class="mb-3 mt-3">
                            <label for="berat" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Berat
                                Badan</label>
                            <input type="number" class="form-control inputmasuk2" id="berat" placeholder="Masukkan berat badan"
                                name="berat" value="{{ old('berat') }}" >
                                @foreach ($errors->get('berat') as $error)
                                <i class='fa fa-exclamation-circle'
                                    style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                    style="color:#ff0000">{{ $error }}</span>
                                @endforeach
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label>Riwayat Kesehatan (Pilihan Bisa Lebih dari 1)</label>
                            <br>
                            <br>
                            <label for="cacar"><input type="checkbox" name="cacar"
                                 id="cacar" value="cacar"   {{ old('cacar') == 'cacar' ? 'checked' : '' }}> Cacar</label><br>
                            <label for="tbc"><input type="checkbox" name="tbc"
                               id="tbc" value="tbc" {{ old('tbc') == 'tbc' ? 'checked' : '' }}> TBC</label><br>
                            <label for="asma"><input type="checkbox" name="asma"
                                id="asma" value="asma" {{ old('asma') == 'asma' ? 'checked' : '' }}> Asma</label><br>
                            <label for="Lainnya"><input type="checkbox" name="Lainnya"
                                id="Lainnya" value="Lainnya" {{ old('Lainnya') == 'Lainnya' ? 'checked' : '' }}> Lainnya</label><br>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label>Riwayat Imunisasi (Pilihan Bisa Lebih dari 1)</label>
                            <br>
                            <br>
                            <label for="Polio"><input type="checkbox" name="Polio"
                                id="Polio" value="Polio"   {{ old('Polio') == 'Polio' ? 'checked' : '' }}> Polio</label><br>
                            <label for="Rubella"><input type="checkbox" name="Rubella"
                                id="Rubella" value="Rubella"   {{ old('Rubella') == 'Rubella' ? 'checked' : '' }}> Rubella</label><br>
                            <label for="Vaksin8"><input type="checkbox" name="Vaksin8"
                                id="Vaksin8" value="Vaksin8"   {{ old('Vaksin8') == 'Vaksin8' ? 'checked' : '' }}> Vaksin 8</label><br>
                            <label for="Lainnya2"><input type="checkbox" name="Lainnya2"
                                id="Lainnya2" value="Lainnya2"   {{ old('Lainnya2') == 'Lainnya2' ? 'checked' : '' }}> Lainnya</label><br>
                        </div>
                    </div>

                    <h5><b>* Unggah Berkas</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="akta" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Akta Kelahiran</label>
                        <input type="file" class="button form-control inputmasuk2" id="akta" name="akta" value="{{ old('akta') }}" >
                        @foreach ($errors->get('akta') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                        @endforeach
                        <div class="mb-3 mt-3">
                            <label for="kk" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Kartu Keluarga (KK)</label>
                             <input type="file" class="button form-control inputmasuk2" id="kk" name="kk" value="{{ old('kk') }}" >
                             @foreach ($errors->get('kk') as $error)
                             <i class='fa fa-exclamation-circle'
                                 style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                 style="color:#ff0000">{{ $error }}</span>
                             @endforeach
                        </div>
                         <div class="mb-3 mt-3">
                            <label for="foto" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Foto Berwarna 3x4</label>
                            <input type="file" class="button form-control inputmasuk2" id="foto" name="foto" value="{{ old('foto') }}" >
                            @foreach ($errors->get('foto') as $error)
                            <i class='fa fa-exclamation-circle'
                                style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                                style="color:#ff0000">{{ $error }}</span>
                            @endforeach
                         </div>
                    </div>

                    <h5><b>* Pembayaran</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <h6>BNI - 123456789 a.n Devi Suryani</h6>
                        <h6>BRI - 089736336 a.n Devi Suryani</h6>
                        <h6>Mandiri - 417289030 a.n Rodiyah</h6>
                        <br>
                        <input type="file" class="button form-control inputmasuk2" id="bayar" name="bayar" value="{{ old('bayar') }}" >
                        @foreach ($errors->get('bayar') as $error)
                        <i class='fa fa-exclamation-circle'
                            style='font-size:18px;margin-right:10px;margin-top:5px;color:#ff0000'></i><span
                            style="color:#ff0000">{{ $error }}</span>
                        @endforeach
                    </div>
                    <div class="mb-3 mt-3 p-3">

                    @if($now < $end )
                    <button type="submit" class="btn buttons">DAFTAR</button>
                    @else
                    <button type="submit" class="btn buttons" disabled>DAFTAR</button>
                    @endif

                    </div>
                </div>
            </div></div>
        </form>

    @endsection
</body>
