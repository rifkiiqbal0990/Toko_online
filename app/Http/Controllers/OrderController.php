<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Produk;
use App\Models\Tracking;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     // PROSES ORDER
     public function order()
     {
         $orders = Order::all();
         $users = User::all();
         $produks = Produk::all();
         $trackings = Tracking::all();
         return view('pagesAdmin.manajemen.proses', compact('orders', 'users', 'produks', 'trackings'));
     }


    public function update(Request $request, $id)
    {
        $request->validate( [

            'status'               => 'required'

          ], [

            'status.required'                => 'Status harus diisi'

          ]);

        $storeDataOrder = [
            'status'                 => $request -> status
           ];

           $dataOrder = Order::find($id)->update($storeDataOrder);

            return redirect('/order');
    }


}
