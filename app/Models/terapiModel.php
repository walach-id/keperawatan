<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class terapiModel extends Model
{
    use HasFactory;
    public function terapi_penyakit()
    {
        $id_penyakit = Request()->session()->get('penyakit');
        return DB::table('intervensi_komplementer')
            ->where('penyakit', $id_penyakit)
            ->get();
    }

    public function metode_terapi($id)
    {
        return DB::table('langkah_terapi')
            ->where('nama_terapi', $id)
            ->get();
    }
}
