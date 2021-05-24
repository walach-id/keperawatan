<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class evaluasiModel extends Model
{
    use HasFactory;

    public function index()
    {
        return DB::table('diagnosa_pasien')
            ->where('id_user', Auth::user()->id)
            ->get();
    }

    public function detail($unique_id)
    {
        return DB::table('diagnosa_pasien')
            ->where('unique_id', $unique_id)
            ->get();
    }

    public function pra($unique_id)
    {
        $id_terapi =  DB::table('diagnosa_pasien')
            ->select('keluhan_id')
            ->where('unique_id', $unique_id)
            ->get();

        foreach ($id_terapi as $item) {
            $keluhan = $item->keluhan_id;
        }

        Request()->session()->put('id_keluhan', $keluhan);


        return DB::table('diagnosa_pasien')
            ->where('unique_id', $unique_id)
            ->get();
    }
}
