<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BantuanController extends Controller
{
    public function showBantuan(){
        return view('bantuan');
    }
    public function showBantuanSekolah(){
        return view('bantuansekolah');
    }
}
