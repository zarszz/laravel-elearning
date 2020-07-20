@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }} {{ $podcast->name_podcast }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.podcast.edit',Crypt::encrypt($podcast->id)) }}" class="btn btn-warning">Edit</a>
                    <a href="javascript:void(0)" class="btn btn-danger"
                        onclick="alertconfirmn('{{ route('admin.podcast.hapus',Crypt::encrypt($podcast->id)) }}')">Hapus</a>
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
                                <td style="vertical-align: top">Deskripsi Podcast</td>
                                <td style="vertical-align: top" class="py-2 px-3">:</td>
                                <td>{!! $podcast->description_podcast !!}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/{{ $podcast->url_podcast }}"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection