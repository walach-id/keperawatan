<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\penyakitModel;

class penyakitController extends Controller
{
    public function __construct()
    {
        $this->penyakitModel = new penyakitModel();
    }

    public function index()
    {
        $data = [
            'penyakit' => $this->penyakitModel->penyakit()
        ];
        return view('home', $data);
    }


    // controller admin
    public function adminIndex()
    {
        $data = [
            'penyakit' => $this->penyakitModel->penyakit()
        ];
        return view('admin/penyakit.data_penyakit', $data);
    }

    public function detailPenyakit($kode)
    {
        $data = [
            'penyakit' => $this->penyakitModel->detailPenyakit($kode)
        ];
        return view('admin/penyakit.edit_penyakit', $data);
    }

    public function addDataPenyakit()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'nama_penyakit' => Request()->nama_penyakit,
            'kode_penyakit' => Request()->kode_penyakit,
            'tgl_tambah' => date("Y-m-d h:i:s"),
        ];

        $this->penyakitModel->addDataPenyakit($data);
        return redirect('/penyakit');
    }

    public function editDataPenyakit($kode)
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'nama_penyakit' => Request()->nama_penyakit,
            'kode_penyakit' => Request()->kode_penyakit,
            'tgl_tambah' => date("Y-m-d h:i:s"),
        ];

        $this->penyakitModel->editDataPenyakit($kode, $data);
        return redirect('/penyakit');
    }

    public function hapusDataPenyakit($kode)
    {
        $this->penyakitModel->hapusDataPenyakit($kode);
        return back();
    }
}
