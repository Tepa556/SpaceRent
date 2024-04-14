@extends('layout')

@section('main-content')
<div class="fomt_login">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img class="mb-4" src="../image/SpaceRent_black.png" alt="Logo" >
                    </div>

                    <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-3">
        <label for="email" class="form-label" style="font-weight: 600; font-size:32px;">Логин</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" style="font-weight: 600; font-size:32px;">Пароль</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <a href="{{ route('register') }}" style="text-decoration: none; color:black;">Нет аккаунта?</a>
    </div>
    <div class="mb-3">
        <a href="{{ route('password.request') }}" style="text-decoration: none; color:black;">Забыли пароль?</a>
    </div>

    <button type="submit" class=" login_button">Войти</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection
