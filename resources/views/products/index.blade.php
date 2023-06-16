@extends('layouts.app')

@section('content')
    <h1>Toko Sepatu 057</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
    <a href="{{ route('products.available') }}" class="btn btn-success mb-3">Stok Tersedia</a>
    <a href="{{ route('products.unavailable') }}" class="btn btn-danger mb-3">Stok Kosong</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" >Detail</a>
                        <a href="{{ route('products.edit', $product->id) }}" >Edit</a>
                        <a href="{{ route('products.updateStockForm', ['id' => $product->id]) }}" >Update Stok</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Untuk Menghapusnya?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
