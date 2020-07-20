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
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/{{ $video->url_video }}" allowfullscreen></iframe>
                    </div>
                    <h4 class="title_top">{{ $video->name_video }}</h4>
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
                        <li>
                            <div>
                                <p class="mb-2">Daftar Materi </p>
                                @foreach ($kelas->video as $item)
                                <div>
                                    <a class="btn {{ $video->id == $item->id ? 'btn-warning text-white' : 'btn-light' }} mb-3 btn-block"
                                        href="{{ route('kelas.belajar',[
                                        'id' => Crypt::encrypt($kelas->id),
                                        'idvideo' => Crypt::encrypt($item->id)
                                    ]) }}">{{ $item->name_video }}</a>
                                </div>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
@endsection