@extends('layouts.main')
@section('content')
<div>
    <h2>{{ $product['name'] }}</h2>
    <p class='card-price'>Цена: {{ $product['price']}} руб.</p>
</div>

<div class="orderForm">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-md" action="/order" method="post">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Название</label>
        <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly value="{{$product['name']}}" type="text">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">Количество</label>
        <input name="amount" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" min="0" max="{{$product['amount']}}">
        <button class="items-center my-5 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" type="submit">Заказать</button>
    </form>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
