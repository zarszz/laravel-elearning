@extends('layouts.front')

@section('content')
<div class="container mt-5 pt-3 mb-3">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            <div class="text-center">
                <h3>Buat Akun</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Kata Sandi</label>

                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">Konfirmasi Kata Sandi</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn_4 py-2 btn-block">
                            Buat Akun
                        </button>
                        <p class="mt-3">Sudah punya akun ? <a href="{{ route('login') }}">Login</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection