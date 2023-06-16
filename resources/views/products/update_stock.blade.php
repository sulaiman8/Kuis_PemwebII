@extends('layouts.app')

@section('content')
    <h1 style="margin-bottom: 20px;">Update Stok</h1>

    <form action="{{ route('products.updateStock', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group" style="margin-bottom: 10px;">
            <label for="stock" style="margin-bottom: 5px;">Jumlah Stok Baru</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Stok</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
