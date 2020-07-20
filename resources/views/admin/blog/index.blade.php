@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.blog.tambah') }}" class="btn btn-primary">
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
                                <th>Judul</th>
                                <th>Thumbnail</th>
                                <th>Tanggal Posting</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $item)
                            <tr>
                                <td></td>
                                <td>{{ $item->name_blog }}</td>
                                <td>
                                <img src="{{ asset('storage/'.$item->thumbnail_blog) }}" width="200"
                                    alt="" srcset="">
                                </td>
                                <td>{{ substr($item->created_at,0,10) }}</td>
                                <td>
                                    <a href="{{ route('admin.blog.detail',Crypt::encrypt($item->id)) }}"
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