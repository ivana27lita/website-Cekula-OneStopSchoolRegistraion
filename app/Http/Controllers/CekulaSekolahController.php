<?php

namespace App\Http\Controllers;

use App\Models\UserSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class CekulaSekolahController extends Controller
{
    public function mulai()
    {
        return view('landingpagecekula');
    }
    public function showpilihanpengguna()
    {
        return view('pilihanmasuk');
    }
    public function index()
    {
        return view('masuk(sekolah)');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => ['required']
        ], [
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Harus diisi dengan format @gmail.com',
            'password' => 'Password wajib diisi',
        ]);


        if (Auth::guard('sekolah')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/cekula/BerandaSekolah');
        }

        return back()->withErrors([
            'password' => 'E-mail atau Password yang dimasukkan salah',
        ])->onlyInput('email' || 'password');
    }
}
