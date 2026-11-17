@extends('layout')

@section('title', $product->name)

@section('content')
<div class="card">
    <h2>{{ $product->name }}</h2>
    <div class="detail-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
    <div class="detail-desc">{{ $product->description ?? 'Tidak ada deskripsi.' }}</div>
    <div class="form-actions">
        <a href="{{ route('products.edit', $product) }}" class="btn btn-light">Edit</a>
        <a href="{{ route('products.index') }}" class="btn btn-plain">Kembali</a>
    </div>
</div>
@endsection
