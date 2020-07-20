<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'users' => User::where('role','=','regular')->orWhere('role','=','premium')->get()
        ];
        return view('admin.user.index',$data);
    }

    public function editprofil()
    {
        $data = [
            'title' => 'Edit Profil',
        ];

        return view('admin.akun.editprofil',$data);
    }

    public function simpaneditprofil(Request $request)
    {
        if ($request->email == Auth::user()->email) {
            $validator = Validator::make($request->all(), [
                'name' => 'required:string',
                'email' => 'required'
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required:string',
                'email' => 'required|unique:users|email'
            ]);
        }

        if ($validator->fails()) {
            return redirect()->route('akun.editprofil')->withErrors($validator)->withInput();
        } else {
            User::where('id', '=', Auth::user()->id)->update([
                'email' => $request->email,
                'name' => $request->name
            ]);
            return redirect()->route('admin.editprofil')->with('status', 'Berhasil memperbarui profil');
        }
    }

    public function editkatasandi()
    {
        $data = [
            'title' => 'Edit Katasandi',
        ];
        return view('admin.akun.editkatasandi',$data);
    }

    public function simpaneditkatasandi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('akun.editkatasandi')->withErrors($validator)->withInput();
        } else {
            User::where('id', '=', Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('admin')->with('status', 'Berhasil memperbarui katasandi');
        }
    }
}
