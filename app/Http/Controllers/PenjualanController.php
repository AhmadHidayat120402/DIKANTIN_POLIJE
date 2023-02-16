<?php

namespace App\Http\Controllers;

use App\Models\detail_penjualan;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('dashboard.penjualan.index', [
            'title' => 'penjualan',
            'penjualan' => $penjualan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function tambahJumlah(Request $request)
    {
        $detail = detail_penjualan::find($request->id);

        $jumlah = $detail->jumlah + 1;

        $harga = $detail->menus->harga * $jumlah;

        $data['jumlah'] = $jumlah;
        $data['harga'] = $harga;

        $detail->update($data);

        return response(true);
    }
    public function kurangJumlah(Request $request)
    {
        $detail = detail_penjualan::find($request->id);

        $jumlah = $detail->jumlah - 1;

        $harga = $detail->menus->harga * $jumlah;

        $data['jumlah'] = $jumlah;
        $data['harga'] = $harga;

        $detail->update($data);

        return response(true);
    }

    public function hapusItem(Request $request)
    {
        $detail = detail_penjualan::find($request->id)->delete();
        return response(true);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['id_customer'] = $request->id_customer;
        $data['id_kasir'] = $request->id_kasir;
        $data['nomer_penjualan'] = Penjualan::count() + 1;
        $data['subtotal'] = 0;
        $data['diskon'] = 0;
        $data['total'] = 0;
        $data['bayar'] = 0;
        $data['model_pembayaran'] = "cash";
        $data['kembalian'] = 0;
        $data['no_meja'] = 0;
        $data['tanggal_penjualan'] = date("Y-m-d");

        Penjualan::updateOrCreate($data);

        $penjualan = Penjualan::orderBy('id', 'desc')->first();

        return response()->json(['orderid' => $penjualan->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }
}
