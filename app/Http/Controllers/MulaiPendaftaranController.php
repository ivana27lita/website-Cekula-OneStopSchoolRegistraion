<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class MulaiPendaftaranController extends Controller
{
    public function showOpenSesi()
    {
        $sesi = DB::table('informasi_sekolah')->where('id_sekolah',auth()->user()->id)->get();
        return view('OpenSesi',['sesi'=>$sesi]);
    }
    public function simpansesi(Request $request)
    {
        $request->validate([

            'stop' => 'required ',
            'kuota' => 'required',

        ], [

            'stop' => 'Stop Wajib Diisi',
            'kuota' => 'Kuota Wajib Diisi',

        ]);
        DB::connection('mysql')->table('bukasesi')->insert([
        'id_sekula' => auth()->user()->id,
        'TanggalSelesai' => $request->stop,
        'kuotarombel' => $request->kuota,
        'created_at' =>Carbon::now(),

        ]);
        return redirect('/cekula/BerandaSekolah')->with('status9', 'Sesi pendaftaran telah dibuka, untuk mengecek silahkan buka tab pendaftaran');
    }
    public function showhapusSesi(){

	DB::table('bukasesi')->where('id_sekula',auth()->user()->id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/cekula/BerandaSekolah')->with('status10', 'Masa pendaftaran telah ditutup');
    }
}
