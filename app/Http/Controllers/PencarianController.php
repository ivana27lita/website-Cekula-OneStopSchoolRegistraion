<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PencarianController extends Controller
{
    public function showHasilPencarian(Request $request){
        $cari=$request->cari;
        $npsn = DB::connection('mysql')->table('user_sekolah')->where('name','like',"%".$cari."%")->get();
        $npsn2 = DB::connection('mysql')->table('informasi_sekolah')->get();
        $info2= DB::connection('mysql')->table('bukasesi')->get();
        return view('Beranda(ortu)cari',['npsn'=>$npsn,'npsn2'=>$npsn2,'in'=>$info2]);
    }
}
