@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }} {{ $blog->name_blog }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.blog.edit',Crypt::encrypt($blog->id)) }}"
                        class="btn btn-warning">Edit</a>
                    <a href="javascript:void(0)" class="btn btn-danger"
                        onclick="alertconfirmn('{{ route('admin.blog.hapus',Crypt::encrypt($blog->id)) }}')">Hapus</a>
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
                                <td style="vertical-align: top">Konten</td>
                                <td style="vertical-align: top" class="py-2 px-3">:</td>
                                <td>{!! $blog->content_blog !!}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('storage/'.$blog->thumbnail_blog) }}" width="100%" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection