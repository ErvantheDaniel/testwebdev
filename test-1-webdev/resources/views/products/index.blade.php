@extends('layout')

@section('title', 'Daftar Produk')

@section('content')
<div class="page-head">
    <h2>Daftar Produk</h2>
    <a href="{{ route('products.create') }}" class="btn">+ Tambah Produk</a>
</div>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th class="right">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                <td>
                    <div class="actions">
                        <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-plain">Detail</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-light">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr><td colspan="3" class="empty">Belum ada data produk 📭</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
