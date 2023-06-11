<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Models\user_sekolah;

class DaftarOrtuController extends Controller
{
    public function showDaftarorangtua()
    {

        return view('Daftar(ortu)');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | unique:mysql.sekolah.user_orangtua,email',
            'password' => 'required | min:4',

        ], [
            'name' => 'Nama Orang Tua Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.unique' => 'Email Sudah Ada',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Minimal Password 4',

        ]);
        DB::connection('mysql')->table('user_orangtua')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);
        return redirect('/cekula/masukorangtua')->with('status', 'Akun berhasil terdaftar, silahkan masuk dengan akun yang telah dibuat.');
    }
}
