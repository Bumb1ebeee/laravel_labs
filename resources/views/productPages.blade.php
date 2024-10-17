@extends('layouts.main')
@section('content')
<div>
    <h2>{{ $product['name'] }}</h2>
    <p class='card-price'>Цена: {{ $product['price']}} руб.</p>
</div>

<div class="orderForm">
    <form action="/order" method="post">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
        <label for="name">Название</label>
        <input name="name" readonly value="{{$product['name']}}" type="text">
        <label for="amount">Количество</label>
        <input name="amount" type="number" min="0" max="{{$product['amount']}}">
        <button type="submit">Заказать</button>
    </form>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
