<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\tabelExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index()
{
    $int = DB::table('formulirsimpan')->where('id_school1',auth()->user()->id)->value('id_school1');
    if (DB::table('formulirsimpan')->where('id_school1',auth()->user()->id)->exists()){
        return Excel::download(new tabelExport($int), 'Data Siswa Diterima.xlsx');
    }else{
        return redirect()->action(
            [LihatResponsController::class, 'showLihatRespons'], ['form' => auth()->user()->id]
        )->with('s14', 'Belum ada formulir yang diterima atau disimpan');
    }

}
}
