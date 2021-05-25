<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RatingModel extends Model
{
    use HasFactory;

    public function addRating($data)
    {
        DB::table('rating')->insert($data);
    }

    public function dataRating()
    {
        return DB::table('rating')
            ->get();
    }

    public function dataEvaluasi()
    {
        return DB::table('diagnosa_pasien')
            ->leftJoin('users', 'users.id', '=', 'diagnosa_pasien.id')
            ->select('diagnosa_pasien.id', 'users.nama_lengkap', 'diagnosa_pasien.keluhan', 'diagnosa_pasien.terapi', 'diagnosa_pasien.jenis_keluhan')
            ->get();
    }

    public function detailDataEvaluasi($kode)
    {
        return DB::table('diagnosa_pasien')
            ->leftJoin('users', 'users.id', '=', 'diagnosa_pasien.id')
            ->select('diagnosa_pasien.id', 'users.nama_lengkap', 'diagnosa_pasien.keluhan', 'diagnosa_pasien.terapi', 'diagnosa_pasien.jenis_keluhan', 'diagnosa_pasien.tgl_mulai')
            ->where('diagnosa_pasien.id', $kode)
            ->first();
    }
}
