@extends('layouts.front')
@section('content')

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Semua orang bisa belajar</h5>
                        <h1>Belajar Disini Aja</h1>
                        <p>Dengan materi mudah dimengerti dan berbentuk video sehingga membantu proses pembelajaran anda
                        </p>
                    <a href="{{ route('kelas') }}" class="btn_1">Belajar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- feature_part start-->
<section class="feature_part">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xl-3 align-self-center">
                <div class="single_feature_text ">
                    <h2>Jenis <br> Kelas</h2>
                    <p>Berikut adalah jenis kelas yang bisa anda akses </p>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-layers"></i></span>
                        <h4>Gratis</h4>
                        <p>Kelas Gratis ini bisa diakses oleh semua orang yang mengunjungi web ini</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                        <h4>Regular</h4>
                        <p>Kelas Regular hanya bisa diakses dengan cara membuat akun </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                        <h4>Premium</h4>
                        <p>Kelas Premium hanya bisa diakses dengan cara membuat akun dan mengupgrade akun ke akun
                            premium</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upcoming_event part start-->

<!-- learning part start-->
<section class="learning_part">
    <div class="container">
        <div class="row align-items-sm-center align-items-lg-stretch">
            <div class="col-md-7 col-lg-7">
                <div class="learning_img">
                    <img src="{{ asset('frontemplate') }}/img/learning_img.png" alt="">
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="learning_member_text">
                    <h5>Tentang Kami</h5>
                    <h2>Belajar Online Dimanapun Kapanpun</h2>
                    <p>Kami merupakan platform pembelajaran online no 1 di Indonesia. Dengan menggunakan media online
                        sebagai pembelajaran kami siap membantu Anda dalam belajar.</p>
                    <ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- learning part end-->


<!--::review_part start::-->
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>Kelas Popular</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($kelas as $item)
            <div class="col-sm-6 col-lg-4 mb-2">
                <a href="{{ route('kelas.detail',Crypt::encrypt($item->id)) }}">
                    <div class="single_special_cource">
                        <img src="{{ asset('storage/' . $item->thumbnail) }}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <div class="d-flex justify-content-between">
                                <div class="btn_4">
                                    @if ($item->type_kelas == 0)
                                    Gratis
                                    @elseif($item->type_kelas == 1)
                                    Regular
                                    @elseif($item->type_kelas == 2)
                                    Premium
                                    @endif
                                </div>
                                <a href="{{ route('kelas.detail',Crypt::encrypt($item->id)) }}" class="btn btn-secondary">Lihat</a>
                            </div>
                            <a href="{{ route('kelas.detail',Crypt::encrypt($item->id)) }}">
                                <h3>{{ $item->name_kelas }}</h3>
                            </a>
                            <div style="white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;">{!! $item->description_kelas !!}</div>
                        </div>

                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection