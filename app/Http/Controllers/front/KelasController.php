<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Kelas;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class KelasController extends Controller
{

    public function index()
    {
        $data = [
            'kelas' => Kelas::paginate(9)
        ];

        return view('front.kelas.index',$data);
    }

    public function detail($id)
    {
        $dec_id = Crypt::decrypt($id);
        $data = [
            'kelas' => Kelas::find($dec_id)
        ];

        return view('front.kelas.detail',$data);
    }

    public function belajar($id,$idvideo)
    {
        $dec_id = Crypt::decrypt($id);
        $dec_idvideo = Crypt::decrypt($idvideo);
        $data = [
            'kelas' => Kelas::find($dec_id),
            'video' => Video::find($dec_idvideo)
        ];

        return view('front.kelas.belajar',$data);
    }
}
