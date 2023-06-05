<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class DaftarController extends Controller
{
    public function showFormulir($no)
    {
        $infosekolah=DB::connection('mysql')->table('npsn')->where('No',$no)->pluck('No');
        $sesi = DB::connection('mysql')->table('bukasesi')->where('id_sekula',$no)->value('TanggalSelesai');
        $end = Carbon::parse($sesi);
        $now = Carbon::now();
        $diff = $now->diffInDays($end);
        return view('FormulirOrtu',['info' => $infosekolah,'datenow'=>$diff,'sesi'=>$sesi,'now'=>$now,'end'=>$end]);
    }
    public function simpanFormulir(request $request,$no2)
    {

        $request->validate([
            'namaLengkap' => 'required',
            'namaPanggilan' => 'required|alpha',
            'nikAnak' =>'required |numeric|min_digits:16|max_digits:16',
            'kewarganegaraan'=>'required|alpha',
            'tempat'=>'required|alpha',
            'tanggalLahir'=>'required',
            'alamat'=>'required',
            'agama'=>'required|alpha',
            'anakKe'=>'required|numeric',
            'jumlahSaudara'=>'required',
            'namaayah'=>'required',
            'NIKayah' =>'required |numeric|min_digits:16|max_digits:16',
            'pekerjaanAyah' =>'required',
            'pendidikanAyah' =>'required',
            'tanggalAyah' =>'required',
            'nomorAyah' =>'required|numeric',
            'alamatAyah' =>'required',
            'namaIbu'=>'required',
            'nikIbu' =>'required |numeric|min_digits:16|max_digits:16',
            'pekerjaanIbu' =>'required',
            'pendidikanIbu' =>'required',
            'tanggalIbu' =>'required',
            'nomorIbu' =>'required|numeric',
            'alamatIbu' =>'required',
            'tinggi' =>'required',
            'berat'=>'required',
            'akta'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'kk'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'foto'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'bayar'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'namaLengkap.required' => 'Data Belum Terisi',
            'namaPanggilan.required' => 'Data Belum Terisi',
            'namaPanggilan.alpha' => 'Data harus huruf',
            'nikAnak.required' => 'Data Belum Terisi',
            'nikAnak.numeric' => 'Data harus angka',
            'nikAnak.min_digits' => 'Data harus 16 angka (masih kurang)',
            'nikAnak.max_digits' => 'Data harus 16 angka (kelebihan)',
            'kewarganegaraan.required' => 'Data belum terisi',
            'kewarganegaraan.alpha' => 'Data harus huruf',
            'tempat.required' => 'Data belum terisi',
            'tempat.alpha' => 'Data harus huruf',
            'tanggalLahir.required' => 'Data belum terisi',
            'alamat.required' => 'Data belum terisi',
            'agama.required' => 'Data belum terisi',
            'agama.alpha' => 'Data harus huruf',
            'anakKe.required' => 'Data belum terisi',
            'anakKe.numeric' => 'Data harus angka',
            'jumlahSaudara' =>'data belum terisi',
            'namaayah' =>'data belum terisi',
            'NIKayah.required' => 'Data Belum Terisi',
            'NIKayah.numeric' => 'Data harus angka',
            'NIKayah.min_digits' => 'Data harus 16 angka (masih kurang)',
            'NIKayah.max_digits' => 'Data harus 16 angka (kelebihan)',
            'pekerjaanAyah' =>'data belum terisi',
            'pendidikanAyah' =>'data belum terisi',
            'tanggalAyah' =>'data belum terisi',
            'nomorAyah.required' =>'data belum terisi',
            'nomorAyah.numeric' =>'data harus angka',
            'alamatAyah' =>'data belum terisi',
            'namaIbu' =>'data belum terisi',
            'nikIbu.required' => 'Data Belum Terisi',
            'nikIbu.numeric' => 'Data harus angka',
            'nikIbu.min_digits' => 'Data harus 16 angka (masih kurang)',
            'nikIbu.max_digits' => 'Data harus 16 angka (kelebihan)',
            'pekerjaanIbu' =>'data belum terisi',
            'pendidikanIbu' =>'data belum terisi',
            'tanggalIbu' =>'data belum terisi',
            'nomorIbu.required' =>'data belum terisi',
            'nomorIbu.numeric' =>'data harus angka',
            'alamatIbu' =>'data belum terisi',
            'tinggi'=>'data belum terisi',
            'berat'=>'data belum terisi',
            'akta.required'=>'data belum terisi',
            'kk.required'=>'data belum terisi',
            'foto.required'=>'data belum terisi',
            'bayar.required'=>'data belum terisi',


        ]);
        		// menyimpan data file yang diupload ke variabel $file
                //akta
		$file = $request->file('akta');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'data_formulir';
		$file->move($tujuan_upload,$nama_file);
        //kk
        $file2 = $request->file('kk');
		$nama_file2 = time()."_".$file2->getClientOriginalName();
		$tujuan_upload2 = 'data_formulir';
		$file2->move($tujuan_upload2,$nama_file2);
        //foto
        $file3 = $request->file('foto');
		$nama_file3 = time()."_".$file3->getClientOriginalName();
		$tujuan_upload3 = 'data_formulir';
		$file3->move($tujuan_upload3,$nama_file3);
          //bayar
          $file4 = $request->file('bayar');
          $nama_file4 = time()."_".$file4->getClientOriginalName();
          $tujuan_upload4 = 'data_formulir';
          $file4->move($tujuan_upload4,$nama_file4);

        DB::connection('mysql')->table('respons_formulir')->insert([
            'id_sekolah2'=>$no2,
            'idOrtu'=>auth()->user()->id,
            'namalengkap_pd' => $request->namaLengkap,
            'namapanggilan_pd' => $request->namaPanggilan,
            'nik_pesertadidik' => $request->nikAnak,
            'kewarganegaraan_pd' => $request->kewarganegaraan,
            'tempat_pd' => $request->tempat,
            'tanggallahir_pd' => $request->tanggalLahir,
            'alamat_pd' => $request->alamat,
            'agama_pd' => $request->agama,
            'anakke_pd' => $request->anakKe,
            'jumlahsaudara_pd' => $request->jumlahSaudara,
            'jenjang' => $request->Jenjang,
            'jeniskelamin' => $request->jenisKelamin,
            'nama_ay' => $request->namaayah,
            'nik_ay' => $request->NIKayah,
            'pekerjaan_ay' => $request->pekerjaanAyah,
            'pendidikan_ay' => $request->pendidikanAyah,
            'ttl_ay' => $request->tanggalAyah,
            'telpon_ay' => $request->nomorAyah,
            'alamat_ay' => $request->alamatAyah,
            'nama_ib' => $request->namaIbu,
            'nik_ib' => $request->nikIbu,
            'pekerjaan_ib' => $request->pekerjaanIbu,
            'pendidikan_ib' => $request->pendidikanIbu,
            'ttl_ib' => $request->tanggalIbu,
            'telpon_ib' => $request->nomorIbu,
            'alamat_ib' => $request->alamatIbu,
            'berat_ank' => $request->berat,
            'tinggi_ank' => $request->tinggi,
            'rk_cacar'=>$request->cacar,
            'rk_tbc'=> $request->tbc,
            'rk_asma'=> $request->asma,
            'rk_lainnya'=>$request->Lainnya,
            'ri_polio'=>$request->Polio,
            'ri_rubella'=>$request->Rubella,
            'ri_vaksin8'=>$request->Vaksin8,
            'ri_lainnya'=>$request ->Lainnya2,
            'akta'=>$nama_file,
            'kk'=>$nama_file2,
            'ft'=>$nama_file3,
            'bayar'=>$nama_file4,

'created_at' => Carbon::now(),

        ]);

        return redirect('/cekula/BerandaOrtu')->with('status', 'Selamat Anda telah melakukan pendaftaran sekolah,Silahkan tunggu kabar berikutnya');
    }

}
