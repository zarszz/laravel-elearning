<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Transaksi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Semua Transaksi',
            'transaksis' => Transaksi::all(),
        ];
        return view('admin.transaksi.index', $data);
    }

    public function belumdicek()
    {
        $data = [
            'title' => 'Transaksi Belum Dicek ',
            'transaksis' => Transaksi::where(['status' => 0])->get(),
        ];
        return view('admin.transaksi.index', $data);
    }

    public function disetujui()
    {
        $data = [
            'title' => 'Transaksi Disetujui',
            'transaksis' => Transaksi::where(['status' => 1])->get(),
        ];
        return view('admin.transaksi.index', $data);
    }

    public function ditolak()
    {
        $data = [
            'title' => 'Transaksi Ditolak',
            'transaksis' => Transaksi::where(['status' => 2])->get(),
        ];
        return view('admin.transaksi.index', $data);
    }

    public function detail($id)
    {
        $dec_id = Crypt::decrypt($id);
        $data = [
            'title' => 'Detail Transaksi',
            'transaksi' => Transaksi::find($dec_id)
        ];
        return view('admin.transaksi.detail', $data);
    }

    public function ubah(Request $request,$id)
    {
        $dec_id = Crypt::decrypt($id);
        $transaksi = Transaksi::find($dec_id);
        if($request->status == 1){
            $transaksi->status = 1;
            User::where('id','=',$transaksi->users_id)->update(['role' => 'premium']);
        }else{
            $transaksi->status = 2;
            User::where('id','=',$transaksi->users_id)->update(['role' => 'regular']);
        }

        $transaksi->save();
        return redirect()->route('admin.transaksi.detail',$id)->with('status','Berhasil Memperbaharui Status');
    }
}

