<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandingkanController extends Controller
{
    public function showlamanbandingkan()
    {

        $npsn2 = DB::connection('mysql')->table('user_sekolah')->get();
        return view('BandingkanSekolah', ['npsn2' => $npsn2]);
    }

    public function showInformasiSekolah(Request $request)
    {

        $request->validate([
            'sekolah1' => 'required',
            'sekolah2' => 'required',

        ], [
            'sekolah1' => 'Pilihan sekolah belum dipilih',
            'sekolah2' => 'Pilihan sekolah belum dipilih',

        ]);
        $namasekolah1 = DB::connection('mysql')->table('user_sekolah')->where('name', $request->sekolah1)->get();
        $namasekolah2 = DB::connection('mysql')->table('user_sekolah')->where('name', $request->sekolah2)->get();
        $id = DB::connection('mysql')->table('user_sekolah')->where('name', $request->sekolah1)->pluck('id');
        $id2 = DB::connection('mysql')->table('user_sekolah')->where('name', $request->sekolah2)->pluck('id');
        $info = DB::connection('mysql')->table('informasi_sekolah')->where('id', $id)->get();
        $info2 = DB::connection('mysql')->table('informasi_sekolah')->where('id', $id2)->get();
        $kuota = DB::connection('mysql')->table('bukasesi')->where('id_sekula', $id)->get();
        $kuota2= DB::connection('mysql')->table('bukasesi')->where('id_sekula', $id2)->get();
        return view('HasilBandingkanSekolah', ['namasekolah1' => $namasekolah1, 'namasekolah2' => $namasekolah2, 'info' => $info, 'info2' => $info2,'kuota' => $kuota,'kuota2' => $kuota2]);


    }
}
