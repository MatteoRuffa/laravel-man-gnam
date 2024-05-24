@extends('layouts.app')

@section('title', 'Products')

@section('content')
<main>
     @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->image }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->weight }}</td>
            <td>{{ $product->expiration_date }}</td>
            <td>{{ $product->country }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->packaging }}</td>
            <td>{{ $product->ingredients }}</td>
            <td>{{ $product->type }}</td>
            
        </tr>
    @endforeach

</main>

@endsection
