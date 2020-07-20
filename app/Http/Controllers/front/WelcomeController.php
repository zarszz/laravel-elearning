<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = [
            'kelas' => Kelas::all()
        ];

        return view('front.welcome', $data);
    }

    public function about()
    {
        return view('front.about');
    }
}
