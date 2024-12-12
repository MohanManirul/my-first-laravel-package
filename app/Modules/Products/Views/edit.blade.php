@extends('products::layout')

@section('content')
<h1>Edit Product</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $product->name }}" required>
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" value="{{ $product->price }}" required>
    <label for="description">Description:</label>
    <textarea name="description" id="description">{{ $product->description }}</textarea>
    <button type="submit">Update</button>
</form>
@endsection
