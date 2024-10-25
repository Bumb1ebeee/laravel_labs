@extends('layouts.main')
@section('content')
    <a href="/login">Войти</a>
<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-md" action="/register" method="post">
    @csrf
    <label class="block text-gray-700 text-sm font-bold mb-2" for="register-name">Имя:</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="register-name" name="name" required>

    <label class="block text-gray-700 text-sm font-bold mb-2" for="register-email">Почта:</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" id="register-email" name="email" required>

    <label class="block text-gray-700 text-sm font-bold mb-2" for="register-password">Пароль:</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" id="register-password" name="password" required>

    <label class="block text-gray-700 text-sm font-bold mb-2" for="register-password-confirmation">Подтвердите пароль:</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" id="register-password-confirmation" name="password_confirmation" required>

    <div class="div_button">
        <button class="items-center my-5 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" type="submit">Зарегистрироваться</button>
    </div>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul style="color: red">
                @foreach($errors->all() as $errors)
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>
@endsection
