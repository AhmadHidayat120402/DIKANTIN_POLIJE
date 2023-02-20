<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Customer;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\detail_penjualan;

class KasirController extends Controller
{
    public function index(Request $req)
    {

        $pencarian = $req->q;
        $customer = Customer::all();
        $penjualan = Penjualan::all();
        $menu = Menu::where('nama_menu', 'like', "%$pencarian%")->get();

        return view('dashboard.kasir', [
            'title' => 'kasir',
            'customer' => $customer,
            'penjualan' => $penjualan,
            'menu' => $menu
        ]);
    }
    public function create()
    {
        return view('dashboard.customer.create', [
            'title' => 'Add Customer'
        ]);
    }

    public function order(Request $req)
    {
        $data['subtotal'] = $req->subtotal;
        $data['diskon'] = $req->diskon;
        $data['total'] = $req->total;
        $data['bayar'] = $req->bayar;
        $data['kembalian'] = $req->kembali;
        $data['model_pembayaran'] = $req->model_pembayaran;
        $data['no_meja'] = $req->no_meja;

        Penjualan::where('id', $req->id_penjualan)->update($data);

        return redirect('/kasir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect('/customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        $title = "Edit Customer";
        return view('dashboard.customer.edit', compact(['customer', 'title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());
        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/customer');
    }

    public function hapussemua($id)
    {
        // Penjualan::destroy($id);
        detail_penjualan::where('id_penjualan', $id)->delete();
        Penjualan::where('id', $id)->delete();

        return redirect('/kasir');
    }
    public function cekCustomer(Request $request)
    {
    }
}
