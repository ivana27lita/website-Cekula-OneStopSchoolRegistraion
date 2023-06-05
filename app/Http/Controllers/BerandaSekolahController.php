<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BerandaSekolahController extends Controller
{
    public function showBerandaSekolah(){
        $info=DB::table('informasi_sekolah')->where('id_sekolah',auth()->user()->id)->get();
        $info6=DB::table('bukasesi')->where('id_sekula',auth()->user()->id)->get();
        $f1 = DB::table('umumkan')->where('id_school2',auth()->user()->id)->get();
        $f2 = DB::table('formulirsimpan')->where('id_school1',auth()->user()->id)->get();
        $f3 = DB::table('respons_formulir')->where('id_sekolah2',auth()->user()->id)->get();
        return view('BerandaSekolah',['info'=>$info,'info6'=>$info6,'f1'=>$f1,'f2'=>$f2,'f3'=>$f3]);
    }
    public function editinformasisekolah($idsekul){
        $info2=DB::table('informasi_sekolah')->where('id_sekolah',$idsekul)->get();
        $info3=DB::table('user_sekolah')->where('id',$idsekul)->get();
        return view('BerandaSekolahedit',['info2'=>$info2,'info3'=>$info3]);
    }
    public function simpaninformasisekolah(Request $request,$idsekul2)
{
    $request->validate([
		'img1' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		'img2' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		'img3' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		'banner' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
	],[
    'img1.required' => 'Data Belum Terisi',
    'img2.required' => 'Data Belum Terisi',
    'img3.required' => 'Data Belum Terisi',
    'banner.required' => 'Data Belum Terisi',



]);
	 //img1
     $file = $request->file('img1');
     $nama_file = time()."_".$file->getClientOriginalName();
     $tujuan_upload = 'data_infosekolah';
     $file->move($tujuan_upload,$nama_file);
     //img2
     $file2 = $request->file('img2');
     $nama_file2 = time()."_".$file2->getClientOriginalName();
     $tujuan_upload2 = 'data_infosekolah';
     $file2->move($tujuan_upload2,$nama_file2);
     //img3
     $file3 = $request->file('img3');
     $nama_file3 = time()."_".$file3->getClientOriginalName();
     $tujuan_upload3 = 'data_infosekolah';
     $file3->move($tujuan_upload3,$nama_file3);
       //banner
       $file4 = $request->file('banner');
       $nama_file4 = time()."_".$file4->getClientOriginalName();
       $tujuan_upload4 = 'data_infosekolah';
       $file4->move($tujuan_upload4,$nama_file4);
    $npsn=DB::table('informasi_sekolah')->where('id_sekolah', $idsekul2)->value('npsn');
    $p1=DB::table('informasi_sekolah')->where('id_sekolah',$idsekul2)->value('persyaratan1');
    $p2=DB::table('informasi_sekolah')->where('id_sekolah',$idsekul2)->value('persyaratan2');
    $p3=DB::table('informasi_sekolah')->where('id_sekolah',$idsekul2)->value('persyaratan3');
    $p4=DB::table('informasi_sekolah')->where('id_sekolah',$idsekul2)->value('persyaratan4');
    $p5=DB::table('informasi_sekolah')->where('id_sekolah',$idsekul2)->value('persyaratan5');


	DB::table('informasi_sekolah')->where('id_sekolah',$idsekul2)->update([
		'id_sekolah' => $idsekul2,
         'noTelp' => $request->nomortelepon,
		'alamatSekolah' => $request->alamatSekolah,

		'senin' => $request->senin,
        'sabtu'=> $request-> sabtu,
        'deskripsifasilitas'=>$request->deskripsifasilitas,
        'playground'=>$request->playground,
        'kolamrenang'=>$request->kolamrenang,
        'funlearning'=>$request->funlearning,
        'kelas'=>$request->kelas,
        'persyaratan1'=>$p1,
        'persyaratan2'=>$p2,
        'persyaratan3'=>$p3,
        'persyaratan4'=>$p4,
        'persyaratan5'=>$p5,
        'img1'=>$nama_file,
        'img2'=>$nama_file2,
        'img3'=>$nama_file3,
        'banner'=>$nama_file4,
        'npsn'=>$npsn,
        'updated_at'=>Carbon::now(),

	]);

	return redirect('/cekula/BerandaSekolah')->with('status3', 'Selamat Informasi pada tab profil anda telah diperbarui, silahkan cek kembali');
}
public function editinformasisekolah2($idsekula){
    $info4=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula)->get();
    $info5=DB::table('user_sekolah')->where('id',$idsekula)->get();
    return view('BerandaSekolahedit2',['info5'=>$info5,'info4'=>$info4]);
}
public function simpaninformasisekolah2(Request $request,$idsekula2)
{
$request->validate([
    'persyaratan1' => 'required',
    'persyaratan2' => 'required',
    'persyaratan3' => 'required',
    'persyaratan4' => 'required',
    'persyaratan5' => 'required',
],[
'persyaratan1.required' => 'Data Belum Terisi',
'persyaratan2.required' => 'Data Belum Terisi',
'persyaratan3.required' => 'Data Belum Terisi',
'persyaratan4.required' => 'Data Belum Terisi',
'persyaratan5.required' => 'Data Belum Terisi',



]);

$npsn=DB::table('informasi_sekolah')->where('id_sekolah', $idsekula2)->value('npsn');
$p1=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('noTelp');
$p2=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('alamatSekolah');
$p3=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('senin');
$p4=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('sabtu');
$p5=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('deskripsifasilitas');
$p6=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('playground');
$p7=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('kolamrenang');
$p8=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('funlearning');
$p9=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('kelas');
$p10=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('banner');
$p11=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('img1');
$p12=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('img2');
$p13=DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->value('img3');


DB::table('informasi_sekolah')->where('id_sekolah',$idsekula2)->update([
    'id_sekolah' => $idsekula2,
     'noTelp' => $p1,
    'alamatSekolah' => $p2,
    'senin' => $p3,
    'sabtu'=> $p4,
    'deskripsifasilitas'=>$p5,
    'playground'=>$p6,
    'kolamrenang'=>$p7,
    'funlearning'=>$p8,
    'kelas'=>$p9,
    'persyaratan1'=>$request->persyaratan1,
    'persyaratan2'=>$request->persyaratan2,
    'persyaratan3'=>$request->persyaratan3,
    'persyaratan4'=>$request->persyaratan4,
    'persyaratan5'=>$request->persyaratan5,
    'img1'=>$p11,
    'img2'=>$p12,
    'img3'=>$p13,
    'banner'=>$p10,
    'npsn'=>$npsn,
    'updated_at'=>Carbon::now(),

]);

return redirect('/cekula/BerandaSekolah')->with('status4', 'Selamat Informasi pada tab pendaftaran anda telah diperbarui, silahkan cek kembali');
}
}
