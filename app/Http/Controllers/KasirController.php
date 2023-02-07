<?php
namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Customer;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KasirController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        $penjualan = Penjualan::all();
        $menu = Menu::all();

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
}
