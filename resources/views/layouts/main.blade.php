 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
<div class="mx-40">
    <nav class="text-center">
        <a href="/products" class="mr-6 text-grey-500 hover:text-grey-800">Продукты</a>
        <a href="/profile" class="mr-6 text-grey-500 hover:text-grey-800">Профиль</a>
        @if(Auth::check())
            @if(Auth::user()->role=='admin')
                <a href="/admin_profile" class="mr-6 text-grey-500 hover:text-grey-800">Администратор</a><br>
            @endif
        @endif
    </nav>

    @yield('content')
</div>

</body>
</html>
