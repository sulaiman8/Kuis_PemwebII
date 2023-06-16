@extends('layouts.app')

@section('content')
    <h1 style="margin-bottom: 20px;">Edit Produk</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group" style="margin-bottom: 10px;">
            <label for="name"style="margin-bottom: 5px;">Nama Produk</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}">
        </div>
        <div class="form-group" style="margin-bottom: 10px;">
            <label for="price" style="margin-bottom: 5px;">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}">
        </div>
        <div class="form-group" style="margin-bottom: 10px;">
            <label for="stock" style="margin-bottom: 5px;">Stok</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $product->stock) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
