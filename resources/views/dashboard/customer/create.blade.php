@extends('main.master')
@section('content')
    <div class="container-fluid mt-5">
        <form method="POST" action="/customer" class="bg-white p-4" style="border-radius: 20px;">
            @csrf
            <div class="mb-3">
                <label for="id_customer" class="form-label">ID Customer</label>
                <input type="text" class="form-control" id="id_customer" name="id_customer" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/customer" class="btn btn-light px-3">Kembali</a>
        </form>
    </div>
@endsection
