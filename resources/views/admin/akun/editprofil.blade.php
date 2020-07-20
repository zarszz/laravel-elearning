@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Profil</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.simpaneditprofil') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" id="">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}" id="">
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="text-right">
                        <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection