@extends('layouts.main')
@section('content')
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>Название товара</th>
        <th>Количество</th>
        <th>Дата создания</th>
        <th>Заказчик</th>
        <th>Статус</th>
        <th>Изменить статус</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($orders as $order)
        <x-orders :order="$order" />
    @endforeach
    </tbody>
</table>
@endsection
