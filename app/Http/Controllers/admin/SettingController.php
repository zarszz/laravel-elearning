<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pengaturan',
            'setting' => Setting::first()
        ];

        return view('admin.pengaturan.index',$data);
    }

    public function simpan(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'about' => 'required',
            'harga' => 'required|numeric'
        ]);

        if($validator->fails()){
            return redirect()->route('admin.setting')->withErrors($validator)->withInput();
        }else{
            Setting::first()->update([
                'about' => $request->about,
                'harga' => $request->harga
            ]);
            return redirect()->route('admin.setting')->with('status','Berhasil Memperbarui Pengaturan');
        }
    }
}
