@extends('main.master')
@section('content')
    <div class="container-fluid mt-5">
        <form method="POST" action="/menu/{{ $menu->id }}" class="bg-white p-4" style="border-radius: 20px;"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="nama_menu" class="form-label">Menu</label>
                <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="{{ $menu->nama_menu }}">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $menu->harga }}">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*"
                    value="{{ $menu->foto }}">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                {{-- <input type="number" class="form-control" id="stok" name="stok" value="{{ $menu->status_stok }}"> --}}
                <select class="form-select" aria-label="Default select example" name="id_kantin">
                    <option selected>{{ $menu->status_stok }}</option>
                    <option value="ada">Ada</option>
                    <option value="habis">Habis</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="kantin" class="form-label">Kantin</label>
                <select class="form-select" aria-label="Default select example" name="id_kantin">
                    <option selected>{{ $menu->id }}</option>
                    <option value="1">Kantin 1</option>
                    <option value="2">Kantin 2</option>
                    <option value="3">Kantin 3</option>
                    <option value="4">Kantin 4</option>
                    <option value="5">Kantin 5</option>
                    <option value="6">Kantin 6</option>
                    <option value="7">Kantin 7</option>
                    <option value="8">Kantin 8</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <a href="/menu" class="btn btn-light px-3">Kembali</a>
            </div>
        </form>
    </div>
@endsection
