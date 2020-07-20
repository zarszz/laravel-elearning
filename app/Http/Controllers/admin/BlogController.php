<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'blogs' => Blog::all(),
            'title' => 'Data Blog'
        ];

        return view('admin.blog.index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Blog',
        ];
        return view('admin.blog.tambah', $data);
    }

    public function simpan(Request $request)
    {

        $validator = Validator($request->all(), [
            'name_blog' => 'required',
            'content_blog' => 'required',
            'thumbnail_blog' => 'required|mimes:png,jpg,jpeg'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.blog.tambah')->withErrors($validator)->withInput();
        } else {
            $file = $request->file('thumbnail_blog')->store('thumbnail_blog', 'public');
            $obj = [
                'name_blog' => $request->name_blog,
                'content_blog' => $request->content_blog,
                'thumbnail_blog' => $file,
            ];
            Blog::create($obj);
            return redirect()->route('admin.blog')->with('status', 'Berhasil Menambah Blog Baru');
        }
    }
}
