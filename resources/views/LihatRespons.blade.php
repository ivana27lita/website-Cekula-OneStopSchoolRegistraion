@extends ('master')

<body class="berandaortu">
    <div class="loader loader--hidden"></div>
    <div id="navbar">
        <nav class="nav-bar">
            <a href="#"><img src="/data_file/Group 220.png" class="nav-logo"></a>
            <ul>

                <li class="list "><a href="{{ url('/cekula/BerandaSekolah') }}" class="linkheader">Beranda</a></li>
                <li class="list"><a class="{{ request()->is('/cekula/LihatRespons') ? active : '' }}"
                        href="/cekula/LihatRespons" class="linkheader">Lihat Respons</a></li>
                    </i></a></li>
                    <li class="list"><a href="/cekula/bantuansekolah" class="linkheader">Bantuan</a></li>
                <li class="list1"><a href="/cekula/profilpenggunasekolah"><i class='fa fa-user-circle-o'
                            style='font-size:36px;color:#7C88F2;'>
                        </i></a></li>
            </ul>


            <div class="toggle_btn">
                <i class="fa fa-bars" style="font-size:25px;color:black"></i>
            </div>


            <div class="dropdown_menu">
                <li><a href="/cekula/BerandaSekolah">Beranda</a></li>
                <li><a href="/cekula/LihatRespons">Lihat Respons</a></li>
                <li><a href="/cekula/bantuansekolah">Bantuan</a></li>
                <li><a href="/cekula/profilpenggunasekolah"><i class="fa fa-user-circle-o" style='font-size:24px;color:#000000;cursor: pointer;'></i></a></li>
            </div>
        </nav>

    </div>
    @section('atas')
        <div class="content">
            <h1 class="teksberanda1" style="color:6070FF"><b>Respons Pendaftaran</b></h1>
            @if (session('s1'))
            <div class="alert alert-primary alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>{{ session('s1') }}</strong>
            </div>
            @endif
            @if (session('s2'))
            <div class="alert alert-warning alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>{{ session('s2') }}</strong>
            </div>
            @endif
            @if (session('s3'))
            <div class="alert alert-warning alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>{{ session('s3') }}</strong>
            </div>
            @endif
            @if (session('s4'))
            <div class="alert alert-warning alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>{{ session('s4') }}</strong>
            </div>
            @endif
            @if (session('s5'))
            <div class="alert alert-warning alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>{{ session('s5') }}</strong>
            </div>
            @endif
            @if (session('s7'))
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>{{ session('s7') }}</strong>
            </div>
            @endif
            @if (session('s14'))
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>{{ session('s14') }}</strong>
            </div>
            @endif

            @if (session('s16'))
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>{{ session('s16') }}</strong>
            </div>
            @endif

            <div class="row" style="margin-bottom:10px;">

                <div class="col-6">

                    <h5 class="teksberanda2 bg-bandingkan5 float-start" style="color:6070FF"><b> Jumlah Pendaftar:
                            {{ $forms->count() }}</b></h5>



                </div>


                <div class="col-6">
                    @forelse($fff as $umumkan)
                    <a type="submit" class="btn button15 float-end" href="/cekula/tutupumumkan">Tutup Hasil Pendaftaran</a>
                    @empty
                    <form action="/cekula/umumkan" method="POST">
                    {{ csrf_field() }}

                    <button type="submit" class="btn button10 float-end">Umumkan Hasil Pendaftaran</button>
                    @endforelse
                </form>
                </div>






            </div>

            <div class="row">
                <div class="col-5">{{ $forms->links('pagination::bootstrap-5') }}</div>
                <div class="col-7 float-end"><a type="button" class="btn button14 float-end " href="/cekula/export-data"><i
                            class="fa fa-database" style="font-size:14px"></i> .xls</a>
                    <a type="button" class="btn button14 float-end" style="margin-right:10px;"
                        href="https://www.youtube.com/watch?v=_Efb_oMgxEs" target="blank">Tutor Mail Merge</a>
                </div>
            </div>
            <br>
            <table class="table table-white css-serial" id="myTable">

                <tr>
                    <th>No</th>
                    <th  onclick="sortTable(0)">Nama</th>
                    <th  onclick="sortTable(1)" style="cursor: pointer;">Jenjang</th>
                    <th>Data</th>
                    <th>Status Penerimaan</th>
                </tr>
                @forelse($forms as $p)
                    <tr>
                        <td style="text-align:center;"></td><form action="/cekula/simpanrespons/{{$p->idFormulir}}" method="POST">
                            {{ csrf_field() }}
                        <td>{{ $p->namalengkap_pd }}</td>
                        <td style="text-align:center;">{{ $p->jenjang }}</td>
                        <td style="text-align:center;"><b><a href="/cekula/LihatFormulir/{{ $p->idFormulir }}"
                                    style="text-decoration: underline">Lihat<br>formulir</a></b></td>
                        <td style="text-align:center;">
                          <button type="submit" class="btn btn-success" >Terima</button>
                           </form>
                           <a type="submit" class="btn btn-warning" href="/cekula/hapusrespons/{{ $p->idFormulir }}">Tolak</a>

                            </td>
                    </tr>
                @empty
                @endforelse
            </table>



        </div>
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
        <script>
            function sortTable(n) {
              var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
              table = document.getElementById("myTable");
              switching = true;
              //Set the sorting direction to ascending:
              dir = "asc";
              /*Make a loop that will continue until
              no switching has been done:*/
              while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                  //start by saying there should be no switching:
                  shouldSwitch = false;
                  /*Get the two elements you want to compare,
                  one from current row and one from the next:*/
                  x = rows[i].getElementsByTagName("TD")[n];
                  y = rows[i + 1].getElementsByTagName("TD")[n];
                  /*check if the two rows should switch place,
                  based on the direction, asc or desc:*/
                  if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                      //if so, mark as a switch and break the loop:
                      shouldSwitch= true;
                      break;
                    }
                  } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                      //if so, mark as a switch and break the loop:
                      shouldSwitch = true;
                      break;
                    }
                  }
                }
                if (shouldSwitch) {
                  /*If a switch has been marked, make the switch
                  and mark that a switch has been done:*/
                  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                  switching = true;
                  //Each time a switch is done, increase this count by 1:
                  switchcount ++;
                } else {
                  /*If no switching has been done AND the direction is "asc",
                  set the direction to "desc" and run the while loop again.*/
                  if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                  }
                }
              }
            }
            </script>
    @endsection
