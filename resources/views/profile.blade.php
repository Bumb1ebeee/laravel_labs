<?php
    use Illuminate\Support\Facades\Auth;?>
@extends('layouts.main')
@section('content')
<h1>{{Auth::user()->name}}</h1>
<form action="/logout" method="get">
    <button type="submit">Выйти</button>
</form>
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

@endsection
