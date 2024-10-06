<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать!</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
<a href="/profile">Профиль</a>
<ul class='cards'>
    @foreach ($products as $product)
        <x-productCard :product="$product" />
    @endforeach
</ul>

</body>
</html>
