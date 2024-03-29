@extends('layouts.app')

@section('content')
    <h1 style="margin-bottom: 10px;">Tambah Produk</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" style="margin-bottom: 20px;">
        @csrf
        <div class="form-group" style="margin-bottom: 10px;">
            <label for="name">Nama Produk</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group" style="margin-bottom: 10px;">
            <label for="price">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>
        <div class="form-group" style="margin-bottom: 10px;">
            <label for="stock">Stok</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}">
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
