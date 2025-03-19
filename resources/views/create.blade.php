@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>
        
        <label>Description:</label>
        <textarea name="description"></textarea>
        
        <label>Price:</label>
        <input type="number" name="price" step="0.01" required>
        
        <label>Discount (%):</label>
        <input type="number" name="discount" step="0.01" min="0" max="100">
        
        <button type="submit">Save</button>
    </form>     
@endsection
