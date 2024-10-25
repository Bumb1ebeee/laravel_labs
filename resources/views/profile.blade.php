<?php
    use Illuminate\Support\Facades\Auth;?>
@extends('layouts.main')
@section('content')
<h1 class="font-bold text-xl my-4">{{Auth::user()->name}}</h1>
<form action="/logout" method="get">
    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" type="submit">Выйти</button>
</form>
<h1 class="text-xl my-4">Мои заказы</h1>
@if($orders->isEmpty())
    <p>У вас нет заказов.</p>
@else
    <ul class="mx-6 my-4 flex mb-4">
        @foreach($orders as $order)
            <li class="px-6 py-4 mx-6 my-4 border max-w-md border-gray-400">
                <p>Товар: <b>{{ $order->product->name }}</b></p>
                <p>Количество: {{ $order->amount }}</p>
                <p>Сумма: {{ $order->total_price }} руб.</p>
                <p>Статус: {{$order->status}}</p>
            </li>
        @endforeach
    </ul>
@endif

@endsection
