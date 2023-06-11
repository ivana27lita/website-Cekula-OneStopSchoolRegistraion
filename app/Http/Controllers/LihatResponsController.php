<?php
namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LihatResponsController extends Controller
{
    Public function showLihatRespons()

    {   $paginate=10;
        $forms = DB::table('respons_formulir')->where('id_sekolah2',auth()->user()->id)->paginate($paginate);
        $fnew= DB::table('respons_formulir')->where('id_sekolah2',auth()->user()->id)->value('id_sekolah2');
        $sf = DB::table('formulirsimpan')->where('id_school1',auth()->user()->id)->get('idForm')->toArray();
        $fff=  DB::table('umumkan')->where('id_school2',auth()->user()->id)->get();

        return view('LihatRespons',['forms'=>$forms,'sf'=>$sf,'fnew'=>$fnew,'fff'=>$fff]);
    }
    Public function showLihatFormulir($form2)
    {    $form2 = DB::table('respons_formulir')->where('idFormulir',$form2)->get();

        return view('LihatFormulir',['form2'=>$form2]);
    }
    Public function simpanHasilPengumuman($form3)
    {    $idschool1 = DB::table('respons_formulir')->where('idFormulir',$form3)->value('id_sekolah2');
        $idForm = DB::table('respons_formulir')->where('idFormulir',$form3)->value('idFormulir');
        $idortu = DB::table('respons_formulir')->where('idFormulir',$form3)->pluck('idOrtu');
        $emailortu = DB::table('user_orangtua')->where('id',$idortu)->value('email');
        $namaanak = DB::table('respons_formulir')->where('idFormulir',$form3)->value('namalengkap_pd');
        $jenjanganak = DB::table('respons_formulir')->where('idFormulir',$form3)->value('jenjang');
         if (DB::connection('mysql')->table('formulirsimpan')->where('idForm', $form3)->doesntExist()){
             DB::connection('mysql')->table('formulirsimpan')->insert([
            'id_school1' => $idschool1,
            'idForm'=>$idForm,
            'emailortu' =>$emailortu,
            'namaanak' =>$namaanak,
            'jenjanganak' => $jenjanganak,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->action(
            [LihatResponsController::class, 'showLihatRespons'], ['form' => $idschool1]
        )->with('s1', 'Data telah tersimpan! Untuk mengunduh data dalam Excel silahkan klik xls, untuk umumkan silahkan klik Umumkan Hasil Pendaftaran');
        }else {
            return back()->with('s2', 'Data Sudah Diterima');
        }

    }
    Public function HapusRespons($form4)
    {
        $idsch = DB::table('respons_formulir')->where('idFormulir',$form4)->value('id_sekolah2');
        if (DB::connection('mysql')->table('formulirsimpan')->where('idForm', $form4)->exists()){
        DB::table('formulirsimpan')->where('idForm',$form4)->delete();
        return redirect()->action(
            [LihatResponsController::class, 'showLihatRespons'], ['form' => $idsch]
        )->with('s3', 'Data tidak diterima');
        }else {
            return back()->with('s4', 'Data Sudah Ditolak');
        }
    }
    Public function umumkan()
    {    $idschool2 = DB::table('formulirsimpan')->where('id_school1',auth()->user()->id)->value('id_school1');
        if (DB::connection('mysql')->table('formulirsimpan')->where('id_school1', auth()->user()->id)->exists()){
             DB::connection('mysql')->table('umumkan')->insert([
            'id_school2' => $idschool2,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->action(
            [LihatResponsController::class, 'showLihatRespons'], ['form' => $idschool2]
        )->with('s5', 'Telah diumumkan daftar siswa yang terpilih');
        }else{
            return redirect()->action(
                [LihatResponsController::class, 'showLihatRespons'], ['form' => $idschool2]
            )->with('s16', 'Belum ada Formulir yang disimpan');
        }



    }
    Public function tutupumumkan()
    {$idschool3 = DB::table('umumkan')->where('id_school2',auth()->user()->id)->value('id_school2');

        DB::table('umumkan')->where('id_school2',auth()->user()->id)->delete();
        return redirect()->action(
            [LihatResponsController::class, 'showLihatRespons'], ['form' => $idschool3]
        )->with('s7', 'Pengumuman ditutup');

    }

}
