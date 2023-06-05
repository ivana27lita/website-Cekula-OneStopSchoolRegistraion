<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BerandaOrtuController extends Controller
{
    Public function showBerandaOrtu(){
        $npsn= DB::connection('mysql')->table('user_sekolah')->get();
        $npsn2= DB::connection('mysql')->table('npsn')->get();
        $info= DB::connection('mysql')->table('informasi_sekolah')->get();
        $info2= DB::connection('mysql')->table('bukasesi')->get();
        return view('Beranda(ortu)',['npsn'=>$npsn, 'info'=>$info,'in'=>$info2,'npsn2'=>$npsn2]);
    }
}
