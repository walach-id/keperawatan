<?php

namespace App\Http\Controllers;

use App\Models\terapiModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class terapiController extends Controller
{
    public function __construct()
    {
        $this->terapiModel = new terapiModel();
    }

    public function index($id, Request $request)
    {
        $data = [
            'terapi' => $this->terapiModel->terapi_penyakit($id)
        ];
        $unik_id = $request->session()->get('id_diagnosa');



        return view('metode_terapi.terapi', $data);
    }

    public function langkah_terapi($id, Request $request)
    {
        $data = [
            'step_terapi' => $this->terapiModel->metode_terapi($id)
        ];
        $terapi = DB::table('intervensi_komplementer')
            ->where('id', $id)->get();

        foreach ($terapi as $item) {
            $nama_terapi =  $request->session()->put('terapi', $item->nama_terapi);
            $nama = $item->nama_terapi;
            $id_terapi = $item->penyakit;
        }

        $request->session()->put('terapi', $id);
        $unik_id = $request->session()->get('id_diagnosa');

        $data_update = [
            'terapi' => $nama,
            'keluhan_id' => $id_terapi
        ];
        $this->terapiModel->addTerapi($unik_id, $data_update);

        return view('step_terapi', $data);
    }
}
