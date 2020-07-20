@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }} {{ $transaksi->users->name }}</h4>
                <div class="card-header-action">
                    <button id="btn-back" class="btn btn-primary">
                        Kembali
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <td>Nama User</td>
                                <td class="py-2 px-3">:</td>
                                <td>{{ $transaksi->users->name }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Upload Bukti</td>
                                <td class="py-2 px-3">:</td>
                                <td>{{ substr($transaksi->created_at,0,10) }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td class="py-2 px-3">:</td>
                                <td>
                                    @if ($transaksi->status == 0)
                                    Belum Dicek
                                    @elseif($transaksi->status == 1)
                                    Disetujui
                                    @else
                                    Ditolak
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Aksi</td>
                                <td>:</td>
                                <td>
                                    <form action="{{ route('admin.transaksi.ubah',Crypt::encrypt($transaksi->id)) }}"
                                        method="post">
                                        @csrf
                                        <div class="input-group input-group-sm">
                                            <select class="custom-select" name="status" id="inputGroupSelect04">
                                                <option value="1">Setujui</option>
                                                <option value="2">Tolak</option>
                                            </select>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('storage/'.$transaksi->bukti_transfer) }}" width="100%" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection