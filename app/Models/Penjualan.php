<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal_penjualan','nomer_penjualan','id_customer','id_kasir','subtotal','diskon','total','bayar','model_pembayaran','kembalian','no_meja'];
}
