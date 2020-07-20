<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Rekening;
use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = [
            'rekening' => Rekening::all()
        ];
        return view('front.transaksi.index',$data);
    }

    public function uploadbukti(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'bukti' => 'required|mimes:png,jpg,jpeg'
        ]);

        if ($validator->fails()) {
            return redirect('upgradepremium')->withErrors($validator)->withInput();
        }else{
            
            $file = $request->file('bukti')->store('buktitf','public');
            $obj = [
                'users_id' => Auth::user()->id,
                'status' => '0',
                'bukti_transfer' => $file
            ];

            Transaksi::create($obj);
            return redirect('upgradepremium')->with('status','Berhasil Mengirim Bukti Transfer');
        }
    }

    public function uploadulang(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'bukti' => 'required|mimes:png,jpg,jpeg'
        ]);

        if ($validator->fails()) {
            return redirect('upgradepremium')->withErrors($validator)->withInput();
        }else{
            
            $file = $request->file('bukti')->store('buktitf','public');
            $obj = [
                'users_id' => Auth::user()->id,
                'status' => '0',
                'bukti_transfer' => $file
            ];

            Transaksi::where('id','=',Auth::user()->id)->update($obj);
            return redirect('upgradepremium')->with('status','Berhasil Mengirim Ulang Transfer');
        }
    }
}
