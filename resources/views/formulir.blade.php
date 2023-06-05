@extends ('master')

<body class="berandaortu">
    @section('atas')
        <form  method="POST">
            {{ csrf_field() }}
                <div class="bg-bandingkan2">
                    <h1 class="teksberanda1" style="color:6070FF"><b>Formulir</b></h1>
                    <h5><b>* Peserta Didik</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="namaLengkap" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama Lengkap</label>
                        <input type="text" class="form-control inputmasuk2" id="namaLengkap" placeholder="Masukkan nama"
                            name="namaLengkap" value="{{ old('name') }}" required>
                        <div class="mb-3 mt-3">
                            <label for="namaPanggilan" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama panggilan</label>
                            <input type="text" class="form-control inputmasuk2" id="namaPanggilan"
                                placeholder="Masukkan Nama panggilan" name="namaPanggilan" value="{{ old('name') }}"
                                required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nikAnak" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">NIK</label>
                            <input type="text" class="form-control inputmasuk2" id="nikAnak"
                                placeholder="Masukkan NIK Anak" name="nikAnak" value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="kewarganegaraan" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Kewarganegaraan</label>
                            <input type="text" class="form-control inputmasuk2" id="kewarganegaraan"
                                placeholder="Masukkan kewarganegaraan" name="kewarganegaraan" value="{{ old('name') }}"
                                required>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="tempat" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tempat</label>
                                <input type="textarea" class="form-control inputmasuk2" placeholder="Masukkan Tempat Lahir"
                                    name="tempat" id="tempat" required>
                            </div>
                            <div class="col">
                                <label for="tanggalLahir" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tanggal Lahir</label>
                                <input type="date" class="form-control inputmasuk2" placeholder="Masukkan Tanggal lahir"
                                    name="tanggalLahir" id="tanggalLahir" required>
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Alamat</label>
                            <input type="textarea" class="form-control inputmasuk2" id="alamat"
                                placeholder="Masukkan alamat" name="alamat" value="{{ old('name') }}" required>
                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col">
                                <label for="agama" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Agama</label>
                                <input type="textarea" class="form-control inputmasuk2" placeholder="Masukkan Agama"
                                    name="agama" id="agama" required>
                            </div>
                            <div class="col">
                                <label for="anakKe" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Anak ke</label>
                                <input type="Number" class="form-control inputmasuk2" placeholder="Masukkan anak ke"
                                    name="anakKe" id="anakKe" required>
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col">
                                <p> Jenjang </p>
                                <label class="radio-inline form-check-label" for="Jenjang">
                                    <input type="radio" class="form-check-input" name="Jenjang"
                                        id="Jenjang"checked>TK A
                                </label>
                                <label class="radio-inline form-check-label" for="Jenjang">
                                    <input type="radio" class="form-check-input" name="Jenjang" id="Jenjang">TK
                                    B
                                </label>
                            </div>
                            <div class="col">
                                <label for="jumlahSaudara" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Jumlah Saudara</label>
                                <input type="Number" class="form-control inputmasuk2"
                                    placeholder="Masukkan Jumlah Saudara" name="jumlahSaudara" id="jumlahSaudara">
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col">
                                <p> Jenis Kelamin </p>
                                <form>
                                    <label class="radio-inline form-check-label" for="jenisKelamin">
                                        <input type="radio" class="form-check-input" name="jenisKelamin" id="jeniKelamin" checked>Laki - Laki
                                    </label>
                                    <label class="radio-inline form-check-label">
                                        <input type="radio" name="jenisKelamin" class="form-check-input" id="jeniKelamin">Perempuan
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
                            placeholder="Masukkan nama Orang Tua" name="nama ayah" value="{{ old('name') }}" required>
                        <div class="mb-3 mt-3">
                            <label for="NIKayah" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">NIK</label>
                            <input type="text" class="form-control inputmasuk2" id="NIKayah"
                                placeholder="Masukkan NIK Orang Tua" name="NIKayah" value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3 mt-3">
                                <label for="pekerjaanAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pekerjaan</label>
                                <input type="text" class="form-control inputmasuk2" id="pekerjaanAyah"
                                    placeholder="Masukkan pekerjaan orang tua" name="pekerjaanAyah"
                                    value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3 mt-3">
                                <label for="pendidikanAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pendidikan Terakhir</label>
                                <input type="text" class="form-control inputmasuk2" id="pendidikanAyah"
                                    placeholder="Masukkan Pendidikan Terakhir Orang Tua" name="pendidikanAyah"
                                    value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3 mt-3">
                                <label for="tanggalAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tanggal Lahir</label>
                                <input type="date" class="form-control inputmasuk2" id="tanggalAyah"
                                    placeholder="Masukkan Tanggal Lahir Orang Tua" name="tanggalAyah"
                                    value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3 mt-3">
                                <label for="nomorAyah" class="form-label"
                                    style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nomor telepon</label>
                                <input type="text" class="form-control inputmasuk2" id="nomorAyah"
                                    placeholder="Masukkan nomor telepon Orang Tua" name="nomorAyah"
                                    value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamatAyah" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Alamat</label>
                            <textarea name="alamatAyah" id="alamatAyah" class="form-control" cols="30" required rows="10" placeholder="Masukkan Alamat Orang Tua">{{ old('alamat') }}</textarea>
                        </div>
                    </div>

                    <h5><b>* Orang Tua(Ibu)</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="namaIbu" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama Ibu/Wali</label>
                        <input type="text" class="form-control inputmasuk2" id="namaIbu"
                            placeholder="Masukkan nama Orang Tua" name="namaIbu" required value="{{ old('name') }}">
                        <div class="mb-3 mt-3">
                            <label for="nikIbu" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">NIK</label>
                            <input type="text" class="form-control inputmasuk2" id="nikIbu"
                                placeholder="Masukkan NIK Orang Tua" name="nikIbu" value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="pekerjaanIbu" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pekerjaan</label>
                            <input type="text" class="form-control inputmasuk2" id="pekerjaanIbu"
                                placeholder="Masukkan pekerjaan Orang Tua" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="pendidikanIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Pendidikan Terakhir</label>
                            <input type="text" class="form-control inputmasuk2" id="pendidikanIbu" placeholder="Masukkan Pendidikan Terakhir Orang Tua" name="pendidikanIbu"
                                value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="tanggalIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tanggal Lahir</label>
                            <input type="date" class="form-control inputmasuk2" id="tanggalIbu" placeholder="Masukkan Tanggal Lahir Orang Tua" name="tanggalIbu"
                                 value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nomorIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nomor Telepon</label>
                            <input type="text" class="form-control inputmasuk2" id="nomorIbu" placeholder="Masukkan nomor telepon Orang Tua" name="nomorIbu"
                                value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamatIbu" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Alamat</label>
                            <textarea name="alamatIbu" id="alamatIbu" class="form-control" cols="30" rows="10" placeholder="Masukkan Alamat Orang Tua" value="{{ old('alamat') }}" required></textarea>
                        </div>
                    </div>

                    <h5><b>* Periodik Anak</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="tinggi" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Tinggi
                            Badan</label>
                        <input type="number" class="form-control inputmasuk2" id="tinggi" placeholder="Masukkan Tinggi badan"
                            name="tinggi" value="{{ old('name') }}" required>
                        <div class="mb-3 mt-3">
                            <label for="berat" class="form-label" style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Berat
                                Badan</label>
                            <input type="number" class="form-control inputmasuk2" id="berat" placeholder="Masukkan berat badan"
                                name="berat" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label>Riwayat Kesehatan (Pilihan Bisa Lebih dari 1)</label>
                            <br>
                            <br>
                            <label><input type="checkbox" name="category[]"
                                value="cacar"> Cacar</label><br>
                            <label><input type="checkbox" name="category[]"
                                value="TBC"> TBC</label><br>
                            <label><input type="checkbox" name="category[]"
                                value="Asma"> Asma</label><br>
                            <label><input type="checkbox" name="category[]"
                                value="Lainnya1"> Lainnya</label><br>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label>Riwayat Imunisasi (Pilihan Bisa Lebih dari 1)</label>
                            <br>
                            <br>
                            <label><input type="checkbox" name="category[]"
                                value="Polio"> Polio</label><br>
                            <label><input type="checkbox" name="category[]"
                                value="Rubella"> Rubella</label><br>
                            <label><input type="checkbox" name="category[]"
                                value="Vaksin 8"> Vaksin 8</label><br>
                            <label><input type="checkbox" name="category[]"
                                value="Lainnya2"> Lainnya</label><br>
                        </div>
                    </div>

                    <h5><b>* Unggah Berkas</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <label for="akta" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Akta Kelahiran</label>
                        <input type="file" class="button form-control inputmasuk2" id="akta" name="akta" value="{{ old('name') }}" required>
                        <div class="mb-3 mt-3">
                            <label for="kk" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Kartu Keluarga (KK)</label>
                             <input type="file" class="button form-control inputmasuk2" id="kk" name="kk" value="{{ old('name') }}" required>
                        </div>
                         <div class="mb-3 mt-3">
                            <label for="foto" class="form-label"
                                style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Foto Berwarna 3x4</label>
                            <input type="file" class="button form-control inputmasuk2" id="foto" name="foto" value="{{ old('name') }}" required>
                         </div>
                    </div>

                    <h5><b>* Pembayaran</b></h5>
                    <div class="mb-3 mt-3 p-3">
                        <h6>BNI - 123456789 a.n Devi Suryani</h6>
                        <h6>BRI - 089736336 a.n Devi Suryani</h6>
                        <h6>Mandiri - 417289030 a.n Rodiyah</h6>
                        <br>
                        <input type="file" class="button form-control inputmasuk2" id="akta" name="akta" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-3 mt-3 p-3">
                    <button type="submit" class="btn buttons">DAFTAR</button>
                    </div>
                </div>

        </form>
    @endsection
    @section('tengah')
    @endsection
    @section('bawah')
    @endsection
