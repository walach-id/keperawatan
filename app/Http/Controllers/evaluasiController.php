<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\evaluasiModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class evaluasiController extends Controller
{
    public function __construct()
    {
        $this->evaluasiModel = new evaluasiModel();
    }

    public function index()
    {
        $data = [
            'evaluasi' => $this->evaluasiModel->index()
        ];

        return view('evaluasi', $data);
    }

    public function detail($unique_id)
    {
        $data = [
            'evaluasi' => $this->evaluasiModel->detail($unique_id)
        ];

        return view('evaluasi_detail', $data);
    }

    public function pra_evaluasi($unique_id)
    {
        Request()->session()->put('unique_id', $unique_id);

        $data = [
            'detail' => $this->evaluasiModel->pra($unique_id),
            'langkah_terapi' =>   DB::table('gejala')
                ->where('nama_penyakit', session('id_keluhan'))
                ->get()
        ];
        // dd(session('id_keluhan'));
        return view('evaluasi_pra', $data);
    }
}
