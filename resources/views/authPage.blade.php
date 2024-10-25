@extends('layouts.main')
@section('content')
    <a href="/register">Регистрация</a>
<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-md" action="/login" method="post">
    @csrf
    <label class="block text-gray-700 text-sm font-bold mb-2" for="login-email">Почта:</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" id="login-email" name="email" required>

    <label class="block text-gray-700 text-sm font-bold mb-2" for="login-password">Пароль:</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" id="login-password" name="password" required>

    @if(session('error'))
        <div style="color:red;">
            {{ session('error') }}
        </div>
    @endif

    <div class="div_button">
        <button class="items-center my-5 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" type="submit" >Войти</button>
    </div>
</form>
@endsection

