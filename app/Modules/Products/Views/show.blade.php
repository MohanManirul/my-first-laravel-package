@extends('layout')

@section('content')
<h1>Product Details</h1>
<p>ID: {{ $product->id }}</p>
<p>Name: {{ $product->name }}</p>
<p>Price: {{ $product->price }}</p>
<p>Description: {{ $product->description }}</p>
<a href="{{ route('products.index') }}">Back to List</a>
@endsection
