<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

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
}
