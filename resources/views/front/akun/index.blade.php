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
                    <h2>Akun</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto ">
                <table>
                    <tr>
                        <td>
                            <h4>Nama</h4>
                        </td>
                        <td class="py-1 px-3">
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4>{{ Auth::user()->name }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Email</h4>
                        </td>
                        <td class="py-1 px-3">
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4>{{ Auth::user()->email }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Tipe Akun</h4>
                        </td>
                        <td class="py-1 px-3">
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4>{{ Auth::user()->role }}</h4>
                        </td>
                    </tr>
                </table>
                <div class="mt-2">
                    <a href="{{ route('akun.editprofil') }}" class="btn btn-warning text-white">Edit Profil</a>
                    <a href="{{ route('akun.editkatasandi') }}" class="btn btn-secondary">Edit Kata Sandi</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
@endsection