<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
     // SHOW LAPORAN
     public function showLaporan()
     {

         $kategories = Kategori::all();
         $laporans = Laporan::all();
         return view('pagesAdmin.forms.showLaporan', compact('kategories', 'laporans'));
     }

     // CREATE LAPORAN
     public function tambahLaporan()
     {

         $kategories = Kategori::all();
         $laporans = Laporan::all();
         return view('pagesAdmin.forms.laporan', compact('kategories', 'laporans'));
     }


     public function storeLaporan(Request $request)
    {
        $request->validate( [

            'kategori_id'                   => 'required',
            'nama_produk'                   => 'required|max:255',
            'jumlah_terjual'                => 'required',
            'status'                        => 'required',
            'dari_tanggal'                  => 'required',
            'sampai_tanggal'                => 'required'

          ], [

            'kategori_id.required'           => 'Kategori harus diisi',
            'nama_produk.required'           => 'Nama Produk harus diisi',
            'nama_produk.max'                => 'Nama Produk maksimal 255 karakter',
            'jumlah_terjual.required'        => 'Jumlah terjual harus diisi',
            'status.required'                => 'Status harus diisi',
            'dari_tanggal.required'          => 'Dari tanggal harus diisi',
            'sampai_tanggal.required'        => 'Sampai tanggal harus diisi'

          ]);

        $storeDataLaporan = [

            'nama_produk'                   => $request -> nama_produk,
            'jumlah_terjual'                => $request -> jumlah_terjual,
            'status'                        => $request -> status,
            'kategori_id'                   => $request -> kategori_id,
            'dari_tanggal'                  => $request -> dari_tanggal,
            'sampai_tanggal'                => $request -> sampai_tanggal

           ];

            Laporan::create($storeDataLaporan);
            return redirect('/laporan');
    }
}
