@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }}</h4>
                <div class="card-header-action">
                    <button id="btn-back" class="btn btn-primary">
                        Kembali
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.kelas.simpanvideo',$id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul Video</label>
                        <input type="text" name="name_video"
                            class="form-control @error('name_video') is-invalid @enderror"
                            value="{{ old('name_video') }}">
                        @error('name_video')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kode embed Video Youtube</label>
                        <input type="text" name="url_video"
                            class="form-control @error('url_video') is-invalid @enderror"
                            value="{{ old('url_video') }}">
                        @error('url_video')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Simpan Video</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection