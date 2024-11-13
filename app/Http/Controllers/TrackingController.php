<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
     // TRACKING ORDER
     public function tracking()
     {
         $trackings = Tracking::all();
         $users = User::all();
         return view('pagesAdmin.manajemen.tracking', compact('trackings', 'users'));
     }
}
