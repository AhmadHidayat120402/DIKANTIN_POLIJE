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

                    <ul class="navbar-nav ms-auto">
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle h3" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    welcome back, {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </li>


                            {{-- <h3 class="fw-bold">welcome back, {{ auth()->user()->name }}</h3> --}}
                        @else
                        @endauth
                    </ul>
                </div>
                {{-- </div> --}}
            </nav>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div
                        class="p-3 bg-white shadow-sm d-flex justify-content-start gap-3 align-items-center dashboard-warna1 c-produk">
                        <i class="fas fa-solid fa-money-check-dollar fs-2 primary-text border rounded-full bg-white secondary-bg p-3"
                            style="color: #54BE6D"></i>
                        <div>
                            <h3 class="fs-2">Rp 250.000</h3>
                            <p class="fs-5">Total Pendapatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 menu-atas">
                    <div
                        class="p-3 bg-white shadow-sm d-flex justify-content-start gap-3 align-items-center dashboard-warna2 c-menu">
                        <i class="fas fa-solid fa-cart-shopping fs-2 primary-text border rounded-full secondary-bg p-3 bg-white"
                            style="color: #D1D44F"></i>
                        <div>
                            <h3 class="fs-2">12</h3>
                            <p class="fs-5">Menu Terjual</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 menu-atas">
                    <div
                        class="p-3 bg-white shadow-sm d-flex justify-content-start gap-3 align-items-center dashboard-warna3 c-customer">
                        <i class="fas fa-solid fa-users fs-2 primary-text border rounded-full secondary-bg p-3 bg-white"
                            style="color: #6BB1D7"></i>
                        <div>
                            <h3 class="fs-2">25</h3>
                            <p class="fs-5">Total Customer</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8 dashboard-all analytic-overview ">
                    <div class="p-3 bg-white shadow-sm bg-second-dashboard">
                        <div>
                            <div class="d-flex justify-content-between">
                                <p class="fs-5 ">Analytics Overview</p>
                                <div class="dropdown pilih-kantin">
                                    <a class="btn dropdown-toggle text-black fs-5" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Januari
                                    </a>
                                    <ul class="dropdown-menu" style="width: 100% !important">
                                        <li><a class="dropdown-item" href="#">Januari</a></li>
                                        <li><a class="dropdown-item" href="#">Februari</a></li>
                                        <li><a class="dropdown-item" href="#">Maret</a></li>
                                        <li><a class="dropdown-item" href="#">April</a></li>
                                        <li><a class="dropdown-item" href="#">Mei</a></li>
                                        <li><a class="dropdown-item" href="#">Juni</a></li>
                                        <li><a class="dropdown-item" href="#">Juli</a></li>
                                        <li><a class="dropdown-item" href="#">Agustus</a></li>
                                        <li><a class="dropdown-item" href="#">September</a></li>
                                        <li><a class="dropdown-item" href="#">Oktober</a></li>
                                        <li><a class="dropdown-item" href="#">November</a></li>
                                        <li><a class="dropdown-item" href="#">Desember</a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="/img/ex-grafik.png" alt="">
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm top-kantin">
                        <div>
                            <p class="fs-5">Top Kantin</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 kantin1">
                            <p style="color: #FF4A4F">1</p>
                            <h1>
                                <i class='bx bx-store'></i>
                            </h1>
                            <div>
                                <h5 class="fw-bold">Kantin 1</h5>
                                <p>Rp 950.000</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 kantin2 mt-3">
                            <p style="color: #A3A711">2</p>
                            <h1>
                                <i class='bx bx-store'></i>
                            </h1>
                            <div>
                                <h5 class="fw-bold">Kantin 2</h5>
                                <p>Rp 950.000</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 kantin3 mt-3">
                            <p style="color: #54BE6D">3</p>
                            <h1>
                                <i class='bx bx-store'></i>
                            </h1>
                            <div>
                                <h5 class="fw-bold">Kantin 3</h5>
                                <p>Rp 950.000</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 kantin4 mt-3">
                            <p style="color: #51AADD">4</p>
                            <h1>
                                <i class='bx bx-store'></i>
                            </h1>
                            <div>
                                <h5 class="fw-bold">Kantin 4</h5>
                                <p>Rp 950.000</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 kantin5 mt-3">
                            <p>5</p>
                            <h1>
                                <i class='bx bx-store'></i>
                            </h1>
                            <div>
                                <h5 class="fw-bold">Kantin 5</h5>
                                <p>Rp 950.000</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 kantin6 mt-3">
                            <p>6</p>
                            <h1>
                                <i class='bx bx-store'></i>
                            </h1>
                            <div>
                                <h5 class="fw-bold">Kantin 6</h5>
                                <p>Rp 950.000</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 kantin7 mt-3">
                            <p>7</p>
                            <h1>
                                <i class='bx bx-store'></i>
                            </h1>
                            <div>
                                <h5 class="fw-bold">Kantin 7</h5>
                                <p>Rp 950.000</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 kantin8 mt-3">
                            <p>8</p>
                            <h1>
                                <i class='bx bx-store'></i>
                            </h1>
                            <div>
                                <h5 class="fw-bold">Kantin 8</h5>
                                <p>Rp 950.000</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
