@extends('main.master')
@section('content')
    <div class="container-fluid">
        <div id="page-content-wrapper" style="background: #D0E3ED">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="menu-samping bg-white p-2 justify-content-center align-items-center">
                        <i class="fas fa-align-left primary-text fs-4 text-dark" id="menu-toggle"></i>
                    </div>
                    <h2 class="fs-2 m-0">{{ $title }}</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" style="color: black" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2" style="color: black"></i>Ahmad Hidayat
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <a href="/menu/create" class="text-decoration-none"
            style="background: white; padding: 10px; border-radius:20px; color:black">
            create new menu
        </a>
        <div class="table-responsive mt-3 bg-white p-4" style="border-radius: 20px; height:76% !important;">
            <table class="table table-striped table-hover w-100 nowrap" width="100%" id="table-menu"
                style="height: 10% !important">
                <thead>
                    <tr>
                        @php
                            $no = 1;
                        @endphp
                        <th>No</th>
                        <th>Menu</th>
                        <th>Harga</th>
                        <th>Foto</th>
                        <th>Stok</th>
                        <th>Kantin</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menu as $m)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $m->nama_menu }}</td>
                            <td>Rp {{ number_format($m->harga) }}</td>
                            <td>
                                <img src="{{ url('storage/' . $m->foto) }}"
                                    style="width: 70px; height: 70px;  object-fit: cover;" alt=""
                                    class="rounded-circle">
                            </td>
                            <td>{{ $m->status_stok }}</td>
                            <td>{{ $m->id_kantin }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="/menu/{{ $m->id }}/edit"
                                        class="btn btn-warning text-white btn-sm">Edit</a>
                                    <form action="/menu/{{ $m->id }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" type="submit"
                                            onclick="confirm('Yakin ingin menghapus data ini ? ')">Hapus</button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#table-menu').DataTable();
        });
    </script>
@endsection
