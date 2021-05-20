<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\gejalaModel;

class gejalaController extends Controller
{
    public function __construct()
    {
        $this->gejalaModel = new gejalaModel();
    }

    public function index($id, Request $request)
    {
        $data = [
            'gejala' => $this->gejalaModel->gejala_penyakit($id)
        ];
        $request->session()->put('penyakit', $id);
        return view('form_gejala', $data);
    }

    public function add_gejala(Request $request)
    {
        $input = $request->all();
        $input['gejala'] = $request->input('gejala');
        $arrlength = count($input['gejala']);
        $id_penyakit = $request->session()->get('penyakit');

        $jumlah_data = DB::table('gejala')->where('nama_penyakit', $id_penyakit)->count();

        $hasil = ($arrlength / $jumlah_data) * 100;
        if ($hasil >= 50) {
            return redirect('/terapi/' . $id_penyakit);
        } else {
            return redirect('/form_gejala/' . $id_penyakit)->with(['pesan' => 'Opps :( pilihan gejala anda kurang, pilih lebih banyak ya']);
        }
    }
}
