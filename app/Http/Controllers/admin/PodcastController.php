<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PodcastController extends Controller
{
    public function index()
    {
        $data = [
            'podcasts' => Podcast::all(),
            'title' => 'Data Podcast'
        ];

        return view('admin.podcast.index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Podcast'
        ];

        return view('admin.podcast.tambah', $data);
    }

    public function simpan(Request $request)
    {
        $validator = Validator($request->all(), [
            'name_podcast' => 'required',
            'url_podcast' => 'required',
            'description_podcast' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.podcast.tambah')->withErrors($validator)->withInput();
        } else {
            $obj = [
                'name_podcast' => $request->name_podcast,
                'url_podcast' => $request->url_podcast,
                'description_podcast' => $request->description_podcast,
            ];
            Podcast::insert($obj);
            return redirect()->route('admin.podcast')->with('status', 'Berhasil Menambah Podcast');
        }
    }

    public function detail($id)
    {
        $dec_id = Crypt::decrypt($id);
        $data = [
            'podcast' => Podcast::find($dec_id),
            'title' => 'Detail Podcast'
        ];

        return view('admin.podcast.detail', $data);
    }

    public function hapus($id)
    {
        $dec_id = Crypt::decrypt($id);
        Podcast::where('id','=',$dec_id)->delete();
        return redirect()->route('admin.podcast')->with('status', 'Berhasil Menghapus Podcast');
    }

    public function edit($id)
    {
        $dec_id = Crypt::decrypt($id);
        $data = [
            'podcast' => Podcast::find($dec_id),
            'title' => 'Edit Podcast',
            'id' => $id
        ];

        return view('admin.podcast.edit', $data);
    }

    public function update(Request $request,$id)
    {
        $dec_id = Crypt::decrypt($id);
        $validator = Validator($request->all(), [
            'name_podcast' => 'required',
            'url_podcast' => 'required',
            'description_podcast' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.podcast.edit',$id)->withErrors($validator)->withInput();
        } else {
            $obj = [
                'name_podcast' => $request->name_podcast,
                'url_podcast' => $request->url_podcast,
                'description_podcast' => $request->description_podcast,
            ];
            Podcast::where('id','=',$dec_id)->update($obj);
            return redirect()->route('admin.podcast')->with('status', 'Berhasil Memperbarui Podcast');
        }
    }
}
