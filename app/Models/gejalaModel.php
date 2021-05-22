<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class gejalaModel extends Model
{
    use HasFactory;

    public function gejala_penyakit($id)
    {
        return DB::table('gejala')
            ->where('id_penyakit', $id)
            ->get();
    }

    public function gejaladanpenyakit($id)
    {
        return DB::table('gejala')
            ->leftJoin('penyakit', 'penyakit.id', '=', 'gejala.id_penyakit')
            ->where('gejala.id_penyakit', $id)
            ->get();
    }

    public function addDataGejala($id, $data)
    {
        DB::table('gejala')
            ->where('id_penyakit', $id)
            ->insert($data);
    }

    public function hapusDataGejala($kode)
    {
        DB::table('gejala')
            ->where('id', $kode)
            ->delete();
    }
}
