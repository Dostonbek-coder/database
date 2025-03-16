@extends('layouts.app')

@section('content')    
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Create Product</a>

    @foreach($products as $product)
        <div>
            <h2>{{ $product->title }}</h2>
            <p>{{ $product->description }}</p>
            <p>Price: ${{ $product->price }}</p>
            <p>Discount: {{ $product->discount }}%</p>
            
            <a href="{{ route('products.show', $product) }}">View</a>
            <a href="{{ route('products.edit', $product) }}">Edit</a>
            
            <form action="{{ route('products.destroy', $product) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection

