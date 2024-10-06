<?php

use App\Http\Controllers\RegisterController; ?>
    <!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/login" method="post">
    @csrf
    <label for="login-email">Почта:</label>
    <input type="email" id="login-email" name="email" required>

    <label for="login-password">Пароль:</label>
    <input type="password" id="login-password" name="password" required>

    @if(session('error'))
        <div style="color:red;">
            {{ session('error') }}
        </div>
    @endif

    <div class="div_button">
        <button type="submit" class="btn">Войти</button>
    </div>
</form>
</body>
</html>

