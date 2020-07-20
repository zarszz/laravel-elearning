<?php

namespace App\Http\Controllers\front;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'blogs' => Blog::paginate(9),
        ];

        return view('front.blog.index', $data);
    }

    public function detail($id)
    {
        $dec_id = Crypt::decrypt($id);
        $data = [
            'blog' => Blog::find($dec_id),
        ];

        return view('front.blog.detail', $data);
    }
}
