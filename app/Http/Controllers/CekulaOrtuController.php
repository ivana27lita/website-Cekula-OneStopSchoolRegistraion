<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekulaOrtuController extends Controller
{
    public function index()
    {
        return view('masuk');
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


        if (Auth::guard('orangtua')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/cekula/BerandaOrtu');
        }

        return back()->withErrors([
            'password' => 'E-mail atau Password yang dimasukkan salah',
        ])->onlyInput('email' || 'password');
    }
}
