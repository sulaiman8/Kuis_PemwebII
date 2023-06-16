@extends('layouts.app')

@section('content')
    <h1 style="margin-bottom: 20px;">Stok Kosong</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unavailableProducts as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
        <a href="{{ route('products.index') }}" class="btn btn-secondary" style="margin-bottom: 10px;">Kembali</a>
    </table>
@endsection
