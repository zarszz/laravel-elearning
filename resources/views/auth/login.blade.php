@extends('layouts.front')

@section('content')
<div class="container mt-5 pt-5 mb-3">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto ">
            <div class="text-center">
                <h3>Masuk</h3>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>

                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn_4 py-2 btn-block">
                            {{ __('Login') }}
                        </button>
                        <p class="mt-3">Belum punya akun ? <a href="{{ route('register') }}">Daftar</a></p>
                    </div>
                    {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                    </a>
                    @endif --}}
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection