<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class errorController extends Controller
{
    public function index($nama){
		if($nama == "Informasisekolah"){
			return redirect('/cekula/Bandingkansekolah');
		}elseif($nama == "loginsekolah"){
            return redirect('/cekula/masuksekolah');
        }elseif($nama == "loginorangtua"){
            return redirect('/cekula/masukorangtua');
        }elseif($nama == "Berhasilsekolah"){
            return redirect('/cekula/Daftarsekolah');
        }elseif($nama == "Berhasilorangtua"){
            return redirect('/cekula/Daftarorangtua');
        }
    }
}
