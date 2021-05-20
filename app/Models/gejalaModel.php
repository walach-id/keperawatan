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
            ->where('nama_penyakit', $id)
            ->get();
    }
}
