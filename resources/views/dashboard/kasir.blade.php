@extends('main.master')

@section('content')
    <div class="container" style="box-sizing: border-box" style="width: 100vh">
        <div class="row mt-2 covernew">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-8">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-center gap-3 align-items-center customer ">
                            <p class="fs-5 text-white text-center">Customer</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-kantin">
                        <div
                            class="p-3 bg-white shadow-sm d-flex justify-content-center gap-3 align-items-center customer2">
                            <p class="fs-5 text-white">Kantin</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8 identitas-pelanggan">
                        <div class="p-3 shadow-sm d-flex gap-5 align-items-start bg-lingkarans customer-form ">
                            <div class="tgl-id">
                                <p>12 Januari 2023</p>
                                <p>12019181615</p>
                            </div>

                            <div class="identitas d-flex">
                                <div class="flex1" id="cover-input">
                                    <div class="align-items-end justify-content-end">
                                        <label for="inputid" class="form-label">ID Customer</label>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="text" id="inputid" class="form-control bg-lingkaran"
                                                onkeyup="showCustomer(this.value)">
                                            <input type="hidden" id="inputid">
                                        </div>
                                    </div>
                                    <div class="cover-up">
                                        <div class="mt-1 align-items-end justify-content-end">
                                            <label for="inputnama" class="form-label">Nama Customer</label>
                                            <input type="text" id="inputnama" class="form-control bg-lingkaran" readonly>
                                        </div>
                                        <div class="mt-1 align-items-end justify-content-end">
                                            <label for="inputalamat" class="form-label">Alamat</label>
                                            <input type="text" id="inputalamat" class="form-control bg-lingkaran"
                                                readonly>
                                        </div>
                                        <div class="mt-1 align-items-end justify-content-end">
                                            <label for="inputtelepon" class="form-label">No Telepon</label>
                                            <input type="text" id="inputtelepon" class="form-control bg-lingkaran"
                                                readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih</option>
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
                        <div class="flex2">
                            <div class="align-items-end justify-content-end">
                                <div class="d-flex align-items-center gap-3">
                                    <input type="text" class="form-control bg-lingkaran cari-menu"
                                        placeholder="Cari Menu" onkeyup="searchProducts()" id="search-input">
                                    <div class="bg-search ">
                                        <i class='bx bx-search m-0'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="bg-secondss">
                            <div
                                class="p-3 shadow-sm gap-5 align-items-start justify-content-center bg-lingkaran customer-menu ">
                                <div
                                    class="p-3 shadow-sm d-flex justify-content-center gap-3 align-items-center bg-lingkaran customer">
                                    <p class="fs-5 text-white text-center">Menu</p>
                                </div>
                                <div class="row mt-3">
                                    @foreach ($menu as $m)
                                        <div class="col-md-3 mt-2">
                                            <div class="bungkus-menu bg-second" id="menu_luar"
                                                onclick="saveCart({{ $m->id }})">
                                                <img src="{{ url('storage/' . $m->foto) }}" alt="" width="80px"
                                                    class="justify-content-center align-items-center mx-auto d-block p-2"
                                                    id="menu_dalam">
                                                <p class="m-0 text-center text-primary fw-bold" id="harga_menu">Rp
                                                    {{ number_format($m->harga) }}</p>
                                                <p class="m-0 text-center" id="nama_menu" onclick="namamakanan(this.value)">
                                                    {{ $m->nama_menu }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 bg-nota">
                <form action="#" method="POST">
                    @csrf
                    <div class="d-flex justify-content-between gap-3 mt-2">
                        <h5 class="fw-bold mt-2 d-inline">Order</h5>
                        <div class="d-flex order">
                            <input type="text" placeholder="1" class="d-inline bg-white form-control"
                                style="width: 90%; border: none;">
                            <input type="date" class="bg-white form-control" id="exampleInputEmail1"
                                value="{{ date('Y-m-d') }}" disabled style="outline: none; border: none; width: 100%">
                        </div>
                    </div>

                    <div class="cart-menu row align-items-center mt-3">
                        <div class="col-6">
                            <p class="m-0 text-dark">Geprek Sai</p>
                            <p class="m-0 text-secondary">Rp. 500.000</p>
                        </div>
                        <div class="col-2">
                            <p class="m-0">1x</p>
                        </div>
                        <div class="col-4">
                            <div class="d-flex align-items-center justify-content-end gap-1">
                                <button class="btn btn-sm btn-light rounded-circle">+</button>
                                <button class="btn btn-sm btn-light rounded-circle">-</button>
                                <button type="submit" class="btn btn-sm btn-danger rounded-circle" id="btn_hapus">
                                    <i class="fa-solid fa-trash-can text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="input-group no-meja">
                        <span class="input-group-text" id="basic-addon1">No Meja</span>
                        <input type="number" class="form-control" placeholder="17" aria-label="Username"
                            aria-describedby="basic-addon1" min="1">
                    </div>
                    <div class="mb-3">
                        <div class="metode-pembayaran mt-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Pembayaran</option>
                                <option value="cash">Cash</option>
                                <option value="polijepay">PolijePay</option>
                                <option value="gopay">Gopay</option>
                                <option value="qris">Qris</option>
                                <option value="transfer bank">Transfer Bank</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mt-0">
                            <p class="fw-bold">Nama Customer</p>
                            <p class="fw-bold" id="nama"></p>
                        </div>
                        <div class="d-flex justify-content-between mt-0">
                            <p class="fw-bold">Subtotal</p>
                            <input type="number" class="form-control input-bayar">
                        </div>
                        <div class="d-flex justify-content-between mt-0">
                            <p class="fw-bold">Diskon</p>
                            <input type="number" class="form-control input-bayar">
                        </div>
                        <div class="d-flex justify-content-between mt-0">
                            <p class="fw-bold">Total</p>
                            <input type="number" class="form-control input-bayar">
                        </div>
                        <div class="d-flex justify-content-between mt-0">
                            <p class="fw-bold">Bayar</p>
                            <input type="number" class="form-control input-bayar">
                        </div>
                        <div class="d-flex justify-content-between mt-0">
                            <p class="fw-bold">Kembali</p>
                            <input type="number" class="form-control input-bayar">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary form-control" id="btn_save">Simpan</button>
                    <button type="submit" class="btn btn-danger form-control mt-3" id="btn_clearAll">Clear All</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        })

        function showCustomer(id) {
            $.ajax({
                type: 'GET',
                url: 'http://127.0.0.1:8000/api/customer-byid/' + id,
                dataType: 'json',
                success: function(data) {
                    $('#inputid').val(data['id']);
                    $('#inputnama').val(data['nama']);
                    $('#inputalamat').val(data['alamat']);
                    $('#inputtelepon').val(data['no_telepon']);
                    $('#nama').text(data['nama']);
                    $('#menu_nama').val(data['nama_menu']);
                    $('#menu_harga').val(data['harga']);
                }
            })
        }

        function saveCart(id) {
            var menu_id = id;

            $.ajax({
url: ''
            })
        }

        // function menumakanan(id) {
        //     $.ajax({
        //         type: 'GET',
        //         url: 'http://127.0.0.1:8000/api/data-byid/' + id,
        //         dataType: 'json',
        //         success: function(data_menu) {
        //             $('#i').val(data['nama']);
        //             $('#inputalamat').val(data['alamat']);
        //             $('#inputtelepon').val(data['no_telepon']);
        //             $('#nama').text(data['nama']);
        //             $('#menu_nama').val(data['nama_menu']);
        //             $('#menu_harga').val(data['harga']);
        //         }
        //     })
        // }

        // function searchProducts() {
        //     let input, filter, menu, menus, menuname, i, value;

        //     input = document.getElementById('search_input');
        //     filter = input.value.toUpperCase();
        //     menu = document.getElementById('menu_dalam');
        //     menus = document.getElementById('menu_luar');

        //     for (i = 0; i < menu.length; i++) {
        //         namamenu = menu[i].getElementById('nama_menu')[0];
        //         value = namamenu.textcontent || namamenu.innerText;

        //         if (value.toUpperCase().indexOf(filter) > -1) {
        //             menu[i].style.display = '';
        //         } else {
        //             menu[i].style.display = 'none';
        //         }

        //     }
        // }
    </script>
@endsection
