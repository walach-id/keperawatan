<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\gejalaModel;
use App\Models\penyakitModel;

class gejalaController extends Controller
{
    public function __construct()
    {
        $this->gejalaModel = new gejalaModel();
        $this->penyakitModel = new penyakitModel();
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

        $jumlah_data = DB::table('gejala')->where('id_penyakit', $id_penyakit)->count();

        $hasil = ($arrlength / $jumlah_data) * 100;
        if ($hasil >= 50) {
            return redirect('/terapi/' . $id_penyakit);
        } else {
            return redirect('/form_gejala/' . $id_penyakit)->with(['pesan' => 'Opps :( pilihan gejala anda kurang, pilih lebih banyak ya']);
        }
    }

    // controller admin
    public function gejala_penyakit($id)
    {
        $data = [
            'penyakit' => $this->penyakitModel->detailPenyakit($id),
            'gejala' => $this->gejalaModel->gejaladanpenyakit($id)
        ];
        // $request->session()->put('penyakit', $id);
        return view('admin.gejala.data_gejala', $data);
    }

    public function formAddGejala($id)
    {
        $data = [
            'penyakit' => $this->penyakitModel->detailPenyakit($id),
            'gejala' => $this->gejalaModel->gejaladanpenyakit($id)
        ];
        // $request->session()->put('penyakit', $id);
        return view('admin.gejala.add_gejala', $data);
    }

    public function addDataGejala($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'nama_gejala' => Request()->nama_gejala,
            'id_penyakit' => $id,
            'tgl_tambah_data' => date("Y-m-d h:i:s"),
        ];

        $this->gejalaModel->addDataGejala($id, $data);
        return redirect('/gejala/' . $id);
    }

    public function hapusDataGejala($kode)
    {
        $this->gejalaModel->hapusDataGejala($kode);
        return back();
    }
}
