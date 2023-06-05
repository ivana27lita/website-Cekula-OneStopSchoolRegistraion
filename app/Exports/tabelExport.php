<?php

namespace App\Exports;

use App\Models\Tblresponsformulir;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Ramsey\Uuid\Type\Integer;

class tabelExport implements FromQuery,WithHeadings
{
       /**
     * @return \Illuminate\Support\Collection
     */
    public function __construct(int $keyword)
    {
        $this->nama = $keyword;
    }
    public function query()
    {
        return Tblresponsformulir::query()->where('id_school1',$this->nama)->select('namaanak','emailortu','jenjanganak','created_at');
    }
    public function headings():array
    {
        return ["Nama Anak","Email Ortu","Jenjang Anak","Waktu Diterima"];
    }
}
