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
                <form action="{{ route('admin.blog.update',Crypt::encrypt($blog->id)) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" name="name_blog"
                            class="form-control @error('name_blog') is-invalid @enderror"
                            value="{{ $blog->name_blog }}">
                        @error('name_blog')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Konten</label>
                        <textarea name="content_blog" class="ckeditor @error('content_blog') is-invalid @enderror"
                            id="ckeditor">
                        {{ $blog->content_blog }}
                    </textarea>
                        @error('content_blog')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">thumbnail_blog</label>
                        <input type="file" name="thumbnail_blog"
                            class="form-control @error('thumbnail_blog') is-invalid @enderror">
                        <small>Kosongkan jika tidak akan mengubah thumbnail</small>
                        @error('thumbnail_blog')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Update Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection