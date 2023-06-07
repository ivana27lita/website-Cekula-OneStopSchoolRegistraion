<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class Profile2Controller extends Controller
{

    public function showProfileSekolah()
    {

        return view('profilpengguna(sekolah)');
    }
    public function showEditSekolah($noedit2)
    {

        return view('profiledit(sekolah)');
    }
    public function showUpdateSekolah(request $request ,$nosimpan2)
{
	DB::table('user_sekolah')->where('id',$nosimpan2)->update([
		'name' => $request->name,
		'email' => auth()->user()->email,
		'password' => Hash::make($request->password),
		'updated_at' => Carbon::now(),
	]);

	return redirect('/cekula/BerandaSekolah')->with('status2', 'Data profil berhasil terubah, silahkan cek kembali laman profil Anda');
}
    public function logoutSekolah()
    {

        Auth::guard('sekolah')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/cekula/masuksekolah');
    }
}
