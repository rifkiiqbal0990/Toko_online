<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
     // SHOP HOME
     public function home()
     {
         $produks = Produk::all();
         return view('pagesUsers.belanja.index', compact('produks'));
     }


     // SHOP PRODUK
    public function shop()
    {
        $produks = Produk::all();
        return view('pagesUsers.belanja.shop', compact('produks'));
    }


     // SHOP KERANJANG
     public function keranjang()
     {
         $keranjangs = Keranjang::all();
         $total = $keranjangs->sum(function ($keranjang) {
            $harga = optional($keranjang)->harga ?? 0;
            $jumlah_order = optional($keranjang)->jumlah_order ?? 0;
            return is_numeric($harga) && is_numeric($jumlah_order) ? $harga * $jumlah_order : 0;
        });

         return view('pagesUsers.belanja.keranjang', compact('keranjangs', 'total'));
     }


    // SHOP DETAIL
    public function shopDetail($id)
   {
        $dataProduk = Produk::find($id);

    if ($dataProduk) {
        return view('pagesUsers.belanja.shopDetail', compact('dataProduk'));
    } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan');
    }

   }

   public function storeKeranjang(Request $request)
   {

       $request->validate([

           'nama_produk'          => 'required',
           'jumlah_order'         => 'required|integer|min:1',
           'harga'                => 'required'

         ]);

         $dataStoreKeranjang = [
            'nama_produk'         => $request->nama_produk,
            'jumlah_order'        => $request->jumlah_order,
            'harga'               => $request->harga,
            'user_id'             => Auth::user()->id,
            'produk_id'           => $request->produk_id,
         ];
        Keranjang::create($dataStoreKeranjang);
           return back();
   }


   // SHOP CHECKOUT
   public function checkout()
   {
       $users = User::all();
       $keranjangs = Keranjang::all();
       return view('pagesUsers.belanja.checkout', compact('users', 'keranjangs'));
   }

   public function storeCheckout(Request $request)
   {
       $request->validate([

           'produk_id'              => 'required',
           'tanggal_order'          => 'required',
           'jumlah_order'           => 'required',
           'metode_pengiriman'      => 'required',
           'metode_pembayaran'      => 'required'

         ]);


         for ($i=0; $i < count($request->produk_id) ; $i++) {
            Order::create([
              'user_id'                => Auth::user()->id,
              'produk_id'              => $request->produk_id[$i],
              'tanggal_order'          => $request->tanggal_order,
              'metode_pengiriman'      => $request->metode_pengiriman,
              'metode_pembayaran'      => $request->metode_pembayaran,
              'jumlah_order'           => $request->jumlah_order[$i],
              'status'                 => 'diproses'
           ]);

           Keranjang::whereIn('produk_id', $request->produk_id)
           ->where('user_id', Auth::user()->id)
           ->delete();

         }
         return redirect('/dikemas');
   }


      // SHOP DIKEMAS
      public function dikemas()
      {
          $orders = Order::where('user_id', Auth::user()->id)->get();
          $users = User::where('id', Auth::user()->id)->get();
          $produks = Produk::all();
          $metode = Order::all();
          return view('pagesUsers.belanja.dikemas', compact('orders', 'users', 'produks'));
      }


   // DELETE KERANJANG
   public function destroyKeranjang($id)
   {
       $keranjangs = Keranjang::find($id);

       $keranjangs->delete();

   return redirect('/keranjang');
   }


}