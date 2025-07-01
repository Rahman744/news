@extends('layout')

@section('title', 'Вход')

@section('main_content')
    <div class="container mt-5" style="max-width: 400px;">
        <h2 class="mb-4">Вход</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Войти</button>
        </form>

        <p class="mt-3">Нет аккаунта? <a href="/register">Зарегистрироваться</a></p>
    </div>
@endsection
