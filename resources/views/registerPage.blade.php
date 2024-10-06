<?php
 ?>
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
<form action="/register" method="post">
    @csrf
    <label for="register-name">Имя:</label>
    <input type="text" id="register-name" name="name" required>

    <label for="register-email">Почта:</label>
    <input type="email" id="register-email" name="email" required>

    <label for="register-password">Пароль:</label>
    <input type="password" id="register-password" name="password" required>

    <label for="register-password-confirmation">Подтвердите пароль:</label>
    <input type="password" id="register-password-confirmation" name="password_confirmation" required>

    <div class="div_button">
        <button type="submit" class="btn">Зарегистрироваться</button>
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
</body>
</html>

