<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class penyakitModel extends Model
{
    use HasFactory;

    public function penyakit()
    {
        return DB::table('penyakit')->get();
    }
}
