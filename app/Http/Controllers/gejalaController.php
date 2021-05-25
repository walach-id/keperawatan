<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\gejalaModel;
use App\Models\penyakitModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

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
        //Mendapatkan nama penyakit
        $nama_penyakit = DB::table('penyakit')->where('id', $id_penyakit)->value('nama_penyakit');

        //Mendapatkan keluhan keluhan yg ada
        $gejala = implode(", ", $input['gejala']);

        //Mendapatkan ID User
        $id = Auth::user()->id;

        //Mendapat tgl hari ini
        date_default_timezone_set("Asia/Jakarta");
        $tgl_mulai = date("Y/m/d");


        //Hitung jumlah gejala dalam penyakit
        $jumlah_data = DB::table('gejala')->where('id_penyakit', $id_penyakit)->count();

        $unik_id = uniqid();
        $request->session()->put('id_diagnosa', $unik_id);

        $hasil = ($arrlength / $jumlah_data) * 100;
        if ($hasil >= 50) {
            $data = [
                'unique_id' => $unik_id,
                'id_user' => $id,
                'tgl_mulai' => $tgl_mulai,
                'keluhan' => $nama_penyakit,
                'jenis_keluhan' => $gejala
            ];
            $this->gejalaModel->addGejala($data);

            return redirect('/terapi/' . $id_penyakit);
        } else {
            return redirect('/form_gejala/' . $id_penyakit)->with(['pesan' => 'Opps :( pilihan gejala anda kurang, pilih lebih banyak ya']);
        }
    }

    // controller admin
    public function gejala_penyakit($id, Request $request)
    {
        $request->session()->forget('terapi');
        $request->session()->put('gejala', $id);

        $data = [
            'penyakit' => $this->penyakitModel->detailPenyakit($id),
            'gejala' => $this->gejalaModel->gejaladanpenyakit($id)
        ];
        // $request->session()->put('penyakit', $id);
        return view('admin.gejala.data_gejala', $data);
    }

    public function detail_gejala_penyakit($id)
    {

        $data = [
            'gejala' => $this->gejalaModel->detail_gejala_penyakit($id)
        ];
        // $request->session()->put('penyakit', $id);
        return view('admin.gejala.edit_gejala', $data);
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

    public function editDataGejala($id)
    {

        $data = [
            'nama_gejala' => Request()->nama_gejala,
        ];

        $this->gejalaModel->editDataGejala($id, $data);
        return redirect('/gejala/' . session('gejala'));
    }


    public function hapusDataGejala($kode)
    {
        $this->gejalaModel->hapusDataGejala($kode);
        return back();
    }

    public function update_gejala(Request $request, $id)
    {

        $input = $request->all();
        $input['gejala'] = $request->input('gejala');
        $arrlength = count($input['gejala']);
        $id_penyakit = $request->session()->get('penyakit');

        //Mendapatkan nama penyakit
        $nama_penyakit = DB::table('penyakit')->where('id', $id_penyakit)->value('nama_penyakit');

        //Mendapatkan keluhan keluhan yg ada
        $gejala = implode(", ", $input['gejala']);

        //Mendapatkan ID User
        $id = Auth::user()->id;

        //Mendapat tgl hari ini
        date_default_timezone_set("Asia/Jakarta");
        $tgl_mulai = date("Y/m/d");


        //Hitung jumlah gejala dalam penyakit
        $jumlah_data = DB::table('gejala')->where('id_penyakit', $id_penyakit)->count();

        $unik_id = uniqid();
        $request->session()->put('id_diagnosa', $unik_id);

        $hasil = ($arrlength / $jumlah_data) * 100;
        $data = [
            'jenis_keluhan' => $gejala
        ];
        $this->gejalaModel->updateGejala($data, session('unique_id'));
        return redirect('/evaluasi/detail/' . session('unique_id'));

        // if ($hasil >= 50) {
        //     $data = [
        //         'jenis_keluhan' => $gejala
        //     ];
        //     $this->gejalaModel->updateGejala($data, session('unique_id'));

        //     return redirect('/evaluasi/detail/' . session('unique_id'));
        // } else {
        //     return redirect('/evaluasi/pra/' . session('unique_id'))->with(['pesan' => 'Opps :( pilihan keluhan anda kurang, pilih lebih banyak ya']);
        // }
    }
}
