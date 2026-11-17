@extends('layout')

@section('title', 'Tambah Produk')

@section('content')
<div class="page-head"><h2>Tambah Produk</h2></div>

<div class="card">
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="field">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Contoh: Kemeja Putih">
        </div>
        <div class="field">
            <label for="price">Harga (Rp)</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" placeholder="50000">
        </div>
        <div class="field">
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" placeholder="Opsional">{{ old('description') }}</textarea>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn">Simpan</button>
            <a href="{{ route('products.index') }}" class="btn btn-plain">Kembali</a>
        </div>
    </form>
</div>
@endsection
