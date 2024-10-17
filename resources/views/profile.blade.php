<?php
    use Illuminate\Support\Facades\Auth;?>
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
<h1>{{Auth::user()->name}}</h1>
<form action="/logout" method="get">
    <button type="submit">Выйти</button>
</form>
<a href="/products">Выбрать продукт</a>
<h1>Мои заказы</h1>
@if($orders->isEmpty())
    <p>У вас нет заказов.</p>
@else
    <ul>
        @foreach($orders as $order)
            <li>
                <p>Товар: <b>{{ $order->product->name }}</b></p>
                <p>Количество: {{ $order->amount }}</p>
                <p>Сумма: {{ $order->total_price }} руб.</p>
                <p>Статус: {{$order->status}}</p>
            </li>
        @endforeach
    </ul>
@endif

</body>
</html>
