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

    public function addTerapi($unik_id, $data_update)
    {
        return DB::table('diagnosa_pasien')
            ->where('unique_id', $unik_id)
            ->update($data_update);
    }

    public function list_terapi_penyakit()
    {
        return DB::table('intervensi_komplementer')
            ->leftJoin('penyakit', 'penyakit.id', '=', 'intervensi_komplementer.penyakit')
            ->select('intervensi_komplementer.id', 'intervensi_komplementer.nama_terapi', 'penyakit.nama_penyakit')
            ->get();
    }

    public function detail_list_terapi_penyakit($id)
    {
        return DB::table('intervensi_komplementer')
            ->leftJoin('penyakit', 'penyakit.id', '=', 'intervensi_komplementer.penyakit')
            ->select('intervensi_komplementer.id', 'intervensi_komplementer.nama_terapi', 'penyakit.nama_penyakit')
            ->where('intervensi_komplementer.id', $id)
            ->first();
    }

    public function addDataTerapi($data)
    {
        DB::table('intervensi_komplementer')->insert($data);
    }

    public function hapusDataTerapi($kode)
    {
        DB::table('intervensi_komplementer')
            ->where('id', $kode)
            ->delete();
    }

    // terapi penyakit

    public function langkah_terapi($id)
    {
        return DB::table('langkah_terapi')
            ->where('nama_terapi', $id)
            ->get();
    }
}
