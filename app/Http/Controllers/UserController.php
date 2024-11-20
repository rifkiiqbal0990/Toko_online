<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // DASHBOARD
    public function dashboard(){
        $users = User::take(10)->get();
        $orders = Order::take(10)->get();
        $produks = Produk::take(10)->get();

        return view('pagesAdmin.dashboard.index', compact('users', 'orders', 'produks'));
    }

    // PROFILE USER
    public function profile(){
        $users = User::where('id', Auth::user()->id)->get();
        return view('pagesUsers.belanja.profile', compact('users'));
    }
}