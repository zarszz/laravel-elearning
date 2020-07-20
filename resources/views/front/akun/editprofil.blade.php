@extends('layouts.front')
@section('content')
{{-- <section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Course Details</h2>
                        <p>Home<span>/</span>Course Details</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- breadcrumb start-->

<!--================ Start Course Details Area =================-->
<section class="course_details_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>Edit Profil</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto ">
                <form action="{{ route('akun.simpaneditprofil') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" id="">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}" id="">
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="text-right">
                        <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
@endsection