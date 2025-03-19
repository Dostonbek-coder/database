@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="title" value="{{ $product->title }}" required>
        <textarea name="description">{{ $product->description }}</textarea>
        <input type="number" name="price" value="{{ $product->price }}" step="0.01" required>
        <input type="number" name="discount" value="{{ $product->discount }}" step="0.01" min="0" max="100">
        <button type="submit">Update</button>
    </form>
@endsection
