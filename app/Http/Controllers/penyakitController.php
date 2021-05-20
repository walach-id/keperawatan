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
}
