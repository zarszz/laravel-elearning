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
        <div class="row">
            <div class="col-lg-8 course_details_left">
                <div class="main_image">
                    <img class="img-fluid" src="img/single_cource.png" alt="">
                </div>
                <div class="content_wrapper">
                    <img src="{{ asset('storage/'.$kelas->thumbnail) }}" width="300" alt="">
                    <h4 class="title_top">{{ $kelas->name_kelas }}</h4>
                    <div class="content">
                        {!! $kelas->description_kelas !!}
                    </div>

                    <h4 class="title">Daftar Materi</h4>
                    <div class="content">
                        <ul class="course_list">
                            @if ($kelas->video->count() < 1)
                            <li class="justify-content-between align-items-center d-flex">
                                <p>Belum Ada Materi</p>
                            </li>
                            @else
                            @foreach ($kelas->video as $item)
                            <li class="justify-content-between align-items-center d-flex">
                                <p>{{ $item->name_video }}</p>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 right-contents">
                <div class="sidebar_top">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Kelas</p>
                                <span class="color">{{ $kelas->name_kelas }}</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Tipe Kelas </p>
                                <span>
                                    @if ($kelas->type_kelas == 0)
                                    Gratis
                                    @elseif($kelas->type_kelas == 1)
                                    Regular
                                    @elseif($kelas->type_kelas == 2)
                                    Premium
                                    @endif
                                </span>
                            </a>
                        </li>
                    </ul>
                    @if ($kelas->video->count() > 0)
                    @if ($kelas->type_kelas == 0)
                    <a href="{{ route('kelas.belajar',[
                        'id' => Crypt::encrypt($kelas->id),
                        'idvideo' => Crypt::encrypt($kelas->video[0]->id)
                    ]) }}" class="btn_1 d-block">Belajar</a>
                    @else
                    @guest
                    Anda harus membuat akun untuk mengakses kelas ini
                    <a href="#" class="btn_1 d-block">Buat Akun</a>
                    @else
                    @if($kelas->type_kelas == 1)
                    <a href="{{ route('kelas.belajar',[
                        'id' => Crypt::encrypt($kelas->id),
                        'idvideo' => Crypt::encrypt($kelas->video[0]->id)
                    ]) }}" class="btn_1 d-block">Belajar</a>
                    @else
                    @if (Auth::user()->role == 'premium')
                    <a href="{{ route('kelas.belajar',[
                        'id' => Crypt::encrypt($kelas->id),
                        'idvideo' => Crypt::encrypt($kelas->video[0]->id)
                    ]) }}" class="btn_1 d-block">Belajar</a>
                    @else
                    Upgrade akun Anda ke premium untuk mengakses kelas ini
                    <a href="#" class="btn_1 d-block">Upgrade Premium</a>
                    @endif
                    @endif
                    @endguest
                    @endif
                    @else
                    Belum Ada Materi Pada Kelas Ini
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
@endsection