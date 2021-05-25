<?php

namespace App\Http\Controllers;

use App\Models\terapiModel;
use App\Models\penyakitModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class terapiController extends Controller
{
    public function __construct()
    {
        $this->terapiModel = new terapiModel();
        $this->penyakitModel = new penyakitModel();
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

    // admin controller
    public function namaTerapi()
    {
        $data = [
            'terapi' => $this->terapiModel->list_terapi_penyakit()
        ];

        return view('admin.terapi.data_terapi', $data);
    }

    public function formTerapi()
    {
        $data = [
            'penyakit' => $this->penyakitModel->penyakit()
        ];

        return view('admin.terapi.add_terapi', $data);
    }

    public function addDataTerapi()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'nama_terapi' => Request()->nama_terapi,
            'penyakit' => Request()->penyakit,
            'tgl_tambah' => date("Y-m-d h:i:s"),
        ];

        $this->terapiModel->addDataTerapi($data);
        return redirect('/treatment');
    }

    public function hapusDataTerapi($kode)
    {
        $this->terapiModel->hapusDataTerapi($kode);
        return back();
    }

    public function step_terapi($id, Request $request)
    {
        $request->session()->forget('gejala');
        $request->session()->put('terapi', $id);

        $data = [
            'terapi' => $this->terapiModel->detail_list_terapi_penyakit($id),
            'langkah' => $this->terapiModel->langkah_terapi($id)
        ];
        // $request->session()->put('penyakit', $id);
        return view('admin.langkah_terapi.data_langkah_terapi', $data);
    }

    public function addDataStepTerapi(Request $request)
    {
        $kode = $request->session()->get('terapi');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'langkah_terapi' => Request()->content,
            'nama_terapi' => $kode,
            'tgl_tambah' => date("Y-m-d h:i:s"),
        ];

        $this->terapiModel->addDataLangkahTerapi($data);
        return redirect('/step-treatment/' . $kode);
    }

    public function hapusDataStepGejala($kode)
    {
        $this->terapiModel->hapusDataLangkahTerapi($kode);
        return back();
    }

    // jurnal

    public function dataJurnal()
    {
        $data = [
            'jurnal' => $this->terapiModel->dataJurnal()
        ];

        return view('admin.jurnal.data_jurnal', $data);
    }

    public function formAddJurnal()
    {
        $data = [
            'jurnal' => $this->terapiModel->dataTerapi()
        ];

        return view('admin.jurnal.add_jurnal', $data);
    }



    public function detailDataJurnal($kode)
    {
        $data = [
            'jurnal' => $this->terapiModel->detailDataJurnal($kode)
        ];

        return view('admin.jurnal.edit_jurnal', $data);
    }

    public function editDataJurnal($kode)
    {

        $data = [
            'link_jurnal' => Request()->link_jurnal,
        ];

        $this->terapiModel->editDataJurnal($kode, $data);
        return redirect('/jurnal');
    }

    public function addDataJurnal()
    {

        $data = [
            'id_terapi' => Request()->nama_terapi,
            'link_jurnal' => Request()->link_jurnal,
        ];

        $this->terapiModel->addDataJurnal($data);
        return redirect('/jurnal');
    }

    public function hapusDataJurnal($kode)
    {
        $this->terapiModel->hapusDataJurnal($kode);
        return back();
    }
}
