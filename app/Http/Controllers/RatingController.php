<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingModel;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function __construct()
    {
        $this->RatingModel = new RatingModel();
    }

    public function rating()
    {
        return view('rating');
    }

    public function add_rating(Request $request)
    {
        $data = [
            'nama_user' => Auth::user()->nama_lengkap,
            'rating_star' => $request->input('rating'),
            'review' => $request->input('review')
        ];

        $this->RatingModel->addRating($data);
        return redirect('rating')->with(['pesan' => 'Ulasan kamu berhasil direkam, terimakasih']);
    }
}
