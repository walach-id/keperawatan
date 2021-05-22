<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class penyakitModel extends Model
{
    use HasFactory;

    public function penyakit()
    {
        return DB::table('penyakit')->get();
    }

    public function detailPenyakit($kode)
    {
        return DB::table('penyakit')
            ->where('id', $kode)
            ->first();
    }

    public function addDataPenyakit($data)
    {
        DB::table('penyakit')->insert($data);
    }

    public function editDataPenyakit($kode, $data)
    {
        DB::table('penyakit')
            ->where('id', $kode)
            ->update($data);
    }

    public function hapusDataPenyakit($kode)
    {
        DB::table('penyakit')
            ->where('id', $kode)
            ->delete();
    }
}
