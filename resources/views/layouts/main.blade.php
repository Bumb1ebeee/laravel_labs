 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
<a href="/products">Продукты</a>
<a href="/profile">Профиль</a>
@if(Auth::check())
    @if(Auth::user()->role=='admin')
        <a href="/admin_profile">Администратор</a><br>
    @endif
@endif
@yield('content')
</body>
</html>