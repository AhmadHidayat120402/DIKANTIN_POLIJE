@extends('main.master')
@section('content')
    <div class="container-fluid mt-5">
        <form method="POST" action="/customer/{{ $customer->id }}" class="bg-white p-4" style="border-radius: 20px;">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="id_customer" class="form-label">ID Customer</label>
                <input type="text" class="form-control" id="id_customer" name="id_customer"
                    value="{{ $customer->id_customer }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $customer->nama }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $customer->alamat }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
