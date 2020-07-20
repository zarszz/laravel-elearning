@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.podcast.tambah') }}" class="btn btn-primary">
                        Tambah
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-hover" id="table">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Podcast</th>
                                <th>URL Podcast</th>
                                <th>Thumbnail</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($podcasts as $item)
                            <tr>
                                <td></td>
                                <td>{{ $item->name_podcast }}</td>
                                <td>{{ $item->url_podcast }}</td>
                                <td>
                                    <img src="http://img.youtube.com/vi/{{ $item->url_podcast }}/0.jpg" width="200"
                                        alt="" srcset="">
                                </td>
                                <td>
                                    <a href="{{ route('admin.podcast.detail',Crypt::encrypt($item->id)) }}"
                                        class="btn btn-warning">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection