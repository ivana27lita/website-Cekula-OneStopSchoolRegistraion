<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewProfilSekolahController extends Controller
{
    public function viewProfilSekolah($nomor)
    {
        $infosekolah=DB::connection('mysql')->table('informasi_sekolah')->where('id_sekolah',$nomor)->get();
        $infosekolah3=DB::connection('mysql')->table('user_sekolah')->where('id',$nomor)->get();
        $infosekolah2=DB::connection('mysql')->table('bukasesi')->where('id_sekula',$nomor)->get();
        $pengumuman = DB::connection('mysql')->table('umumkan')->where('id_school2',$nomor)->get();
        $pengumuman2 = DB::connection('mysql')->table('formulirsimpan')->where('id_school1',$nomor)->get();
        $f3 = DB::connection('mysql')->table('respons_formulir')->where('id_sekolah2',$nomor)->get();
    	return view('ProfilSekolah(Ortu)',['info' => $infosekolah,'in'=>$infosekolah2,'in2'=>$infosekolah3,'p'=>$pengumuman,'p2'=>$pengumuman2,'f3'=>$f3]);
    }
}
