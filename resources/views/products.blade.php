@extends('layouts.main')
@section('content')
    <ul class='cards'>
        @foreach ($products as $product)
            <x-productCard :product="$product" />
        @endforeach
    </ul>
@endsection
