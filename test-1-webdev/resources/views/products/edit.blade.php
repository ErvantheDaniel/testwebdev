@extends('layout')

@section('title', 'Edit Produk')

@section('content')
<div class="page-head"><h2>Edit Produk</h2></div>

<div class="card">
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}">
        </div>
        <div class="field">
            <label for="price">Harga (Rp)</label>
            <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}">
        </div>
        <div class="field">
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description">{{ old('description', $product->description) }}</textarea>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn">Update</button>
            <a href="{{ route('products.index') }}" class="btn btn-plain">Kembali</a>
        </div>
    </form>
</div>
@endsection
