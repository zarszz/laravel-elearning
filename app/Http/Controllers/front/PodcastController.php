<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PodcastController extends Controller
{
    public function index()
    {
        $data = [
            'podcasts' => Podcast::paginate(9),
        ];

        return view('front.podcast.index', $data);
    }

    public function detail($id)
    {
        $dec_id = Crypt::decrypt($id);
        $data = [
            'podcast' => Podcast::find($dec_id),
            'title' => 'Detail Podcast'
        ];

        return view('front.podcast.detail', $data);
    }
}
