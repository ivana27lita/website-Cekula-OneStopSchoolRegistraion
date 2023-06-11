@extends ('master')



<body class="profilsekolah">
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

                <form>
                     {{ csrf_field() }}
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif">Nama</label>
                        <input type="text" class="form-control inputmasuk2" id="name"
                            name="name" value="{{auth()->user()->name}}">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label"
                            style="color:rgb(0, 0, 0);font-family:poppins,sans-serif;">Email/No Telepon</label>
                        <input type="email" class="form-control inputmasuk" id="email" disabled
                            name="email" value="{{auth()->user()->email}}">
                    </div>

                    <br>
                    <br>
                    <div class="row">
                        <div class="col-6">
                    <a  class="btn button6" value="Simpan Data" href="/cekula/editprofilsekolah/{{ auth()->user()->id }}">Edit</a></div>
                    </form> <div class="col-6"><form action="/cekula/logoutsekolah" method="POST">
                        {{ csrf_field() }}
                    <button type="submit" class="btn button6" value="Keluar Akun">Keluar Akun</button>
                    </form></div></div>
            </div>
        </div>
    @endsection

