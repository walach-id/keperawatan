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
        $request->session()->put('terapi', $id);
        return view('metode_terapi.terapi', $data);
    }

    public function langkah_terapi($id, Request $request)
    {
        $data = [
            'step_terapi' => $this->terapiModel->metode_terapi($id)
        ];
        $terapi = DB::table('intervensi_komplementer')
            ->select('nama_terapi')
            ->where('id', $id)->get();

        foreach ($terapi as $item) {
            $nama_terapi =  $request->session()->put('terapi', $item->nama_terapi);
        }

        return view('step_terapi', $data);
    }
}
