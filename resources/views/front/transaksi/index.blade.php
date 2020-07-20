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
                    <h2>Upgrade Premium</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @php
            $id = Auth::user()->id;
            $cek = \App\Transaksi::where(['users_id' => $id]);
            @endphp

            @if ($cek->count() > 0 && $cek->first()->status == 1 && Auth::user()->role == 'premium')
            <div class="col-md-6 mx-auto text-center">
                <h4>Selamat Akun Anda Sudah Premium</h4>
            </div>
            @endif

            @if ($cek->count() > 0 && $cek->first()->status == 0)
            <div class="col-md-6 mx-auto text-center">
                <h4>Anda sudah mengirim bukti transfer, silahkan tunggu beberapa saat admin sedang mengkonfirmasi
                    pembayaranmu</h4>
            </div>
            @endif

            @if ($cek->count() > 0 && $cek->first()->status == 2)
            <div class="col-md-6 mx-auto">
                <h4>Pembayaran Anda Ditolak.Silahkan kirim ulang bukti pembayaran</h4>
                <form action="{{ route('uploadulang') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="">Upload bukti transfer</label>
                        <input type="file" class="form-control" name="bukti">
                        @error('bukti')
                        <small class="mt-2 text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn_4">Kirim</button>
                    </div>
                </form>
            </div>
            @endif

            @if($cek->count() < 1) <div class="col-md-6 mx-auto">
                @php
                    $setting = \App\Setting::first()
                @endphp
                <h4>Silahkan transfer sebesar Rp.{{ number_format($setting->harga,2,',','.') }} ke no rekening di bawah ini</h4>
                <ul>
                    @foreach ($rekening as $item)
                    <li>- {{ $item->no_rekening }} a.n <b>{{ $item->atas_nama }}</b></li>
                    @endforeach
                </ul>
                <form action="{{ route('uploadbukti') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="">Upload bukti transfer</label>
                        <input type="file" class="form-control" name="bukti">
                        @error('bukti')
                        <small class="mt-2 text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn_4">Kirim</button>
                    </div>
                </form>
        </div>
        @endif
    </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
@endsection