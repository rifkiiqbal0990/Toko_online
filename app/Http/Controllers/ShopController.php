<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // SHOP PRODUK
    public function shop()
    {
        $produks = Produk::all();
        return view('pagesUsers.belanja.shop', compact('produks'));
    }


    public function shopDetail($id)
   {
        $dataProduk = Produk::find($id);

    if ($dataProduk) {
        return view('pagesUsers.belanja.shopDetail', compact('dataProduk'));
    } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan');
    }
   }

}
