<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfileOrtu()
    {

        return view('profilpengguna(ortu)');
    }
    public function showeditOrtu($noedit)
    {

        return view('profiledit(ortu)');
    }
    public function showupdateOrtu(request $request ,$nosimpan)
{
	DB::table('user_orangtua')->where('id',$nosimpan)->update([
		'name' => $request->name,
		'email' => auth()->user()->email,
		'password' => Hash::make($request->password),
		'updated_at' => Carbon::now(),
	]);

	return redirect('/cekula/BerandaOrtu')->with('status2', 'nama berhasil terubah, silahkan cek kembali laman profil anda');
}
    public function logoutOrtu()
    {

        Auth::guard('orangtua')->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/cekula/masukorangtua');
    }

}
