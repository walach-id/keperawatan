<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RatingModel extends Model
{
    use HasFactory;

    public function addRating($data)
    {
        DB::table('rating')->insert($data);
    }
}
