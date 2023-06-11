<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
use App\Models\informasisekolah;
use Illuminate\Validation\Rules\Unique;
use App\Models\user_sekolah;
use Illuminate\Support\Carbon;
use Session;

class DaftarSekolahController extends Controller
{
    public function showDaftarSekolah()
    {
        return view('Daftar(sekolah)');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'email' => 'required | unique:mysql.sekolah.user_sekolah,email',
            'password' => 'required',
            'alamat' => 'required',
            'typePhone' => 'required| max_digits:12| numeric ',
            'npsn' => 'required',

        ], [
            'name' => 'Nama Sekolah Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.unique' => 'Email Sudah Ada',
            'password' => 'Password Wajib Diisi',
            'alamat' => 'Alamat Wajib Diisi',
            'typePhone.required' => 'Telepon Kantor Wajib Diisi',
            'typePhone.max_digits' => 'Tidak boleh lebih dari 12',
            'typePhone.numeric' => 'Nomor Telepon Harus Angka',
            'npsn' => 'NPSN Wajib Diisi',

        ]);
        $seninjumat="07.00 - 10.00 WIB";
        $sabtu="07.00 - 09.00 WIB";
        $deskripsifasilitas="TK Sepuluh Nopember memberikan fasilitas pendidikan yang mumpuni. hal itu sebagai penunjang untuk pendidikan anak didik agar para siswa dapat belajar dengan maksimal dan tercukupi.";
        $playground="Playground";
        $kolamrenang="Kolam Renang";
        $funlearning="Fun Learning";
        $kelas ="Kelas";
        $persyaratan1= "Informasi dan pendaftaran terdapat dalam menu profil";
        $persyaratan2="Membeli formulir PPDB Rp 125.000";
        $persyaratan3=" Pembayaran dilakukan dengan mentransfer uang formulir ke nomor Virtual Account CIMB Niaga (mohon cek email yang telah didaftarkan untuk mengetahui nomor VA pembayaran formulir, setelah melakukan pembayaran dapat mengupload bukti transfer pada formulir).";
        $persyaratan4= "Mengupload dokumen pendaftaran :
        Akte Kelahiran
        Kartu Keluarga
        Foto berwarna terbaru 3X4";
        $deskripsipersyaratan="Semua pendaftar akan dimasukkan di grup Whatsapp PPDB TK Sepuluh Nopember untuk informasi lebih lanjut.";
        $banner = url('/data/file/unsplash_xH04gkmk1sg(1).png');
        $img1 = url('/data/file/unsplash_xH04gkmk1sg(1).png');
        $img2 = url('/data/file/unsplash_xH04gkmk1sg(1).png');
        $img3 = url('/data/file/unsplash_xH04gkmk1sg(1).png');


        if (
            DB::connection('mysql')->table('npsn')->where('name', $request->name)->exists() &&
            DB::connection('mysql')->table('user_sekolah')->where('name', $request->name)->doesntExist()
            && DB::connection('mysql')->table('user_sekolah')->where('email', $request->email)->doesntExist()
        ) {
            $oke = DB::connection('mysql')->table('user_sekolah')->insertGetId([
                'name' => strtoupper($request->name),
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'created_at' => Carbon::now(),
            ]);
            DB::connection('mysql')->table('informasi_sekolah')->insert([
                'alamatSekolah' => $request->alamat,
                'noTelp' => $request->typePhone,
                'npsn' => $request->npsn,
                'id_sekolah' => $oke,
                'senin'=>$seninjumat,
                'sabtu'=>$sabtu,
                'deskripsifasilitas'=>$deskripsifasilitas,
                'playground'=>$playground,
                'kolamrenang'=>$kolamrenang,
                'funlearning'=>$funlearning,
                'kelas'=>$kelas,
                'persyaratan1'=>$persyaratan1,
                'persyaratan2'=>$persyaratan2,
                'persyaratan3'=>$persyaratan3,
                'persyaratan4'=>$persyaratan4,
                'persyaratan5'=>$deskripsipersyaratan,
                'banner' => $banner,
                'img1'=>$img1,
                'img2'=>$img2,
                'img3'=>$img3,
                'created_at' => Carbon::now(),
            ]);
            return redirect('/cekula/masuksekolah')->with('status', 'Akun berhasil terdaftar silahkan login');
        } else if (DB::connection('mysql')->table('user_sekolah')->where('name', $request->name)->exists()) {
            return back()->withErrors([
                'name' => 'Nama sekolah sudah terdaftar',
                'npsn' => 'NPSN sekolah sudah terdaftar',
            ])->onlyInput('name' && 'npsn' && 'email');
        } else {
            return back()->withErrors([
                'name' => 'Nama sekolah tidak sesuai database Kemendikbud',
                'npsn' => 'NPSN tidak sesuai database Kemendikbud',
            ])->onlyInput('name' && 'npsn');
        }
    }
}
