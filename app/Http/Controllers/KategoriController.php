<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

        // KATEGORI
        public function kategori()
        {
            $kategories = kategori::all();
            return view('pagesAdmin.produk.kategori', compact('kategories'));
        }


         // CREATE KATEGORI
      public function tambahKategori()
      {
          $kategories = Kategori::all();
          return view('pagesAdmin.produk.tambahKategori', compact('kategories'));
      }

      public function storeKategori(Request $request)
      {
          $request->validate( [

              'nama_kategori'          => 'required|max:255'

            ], [

              'nama_kategori.required'           => 'Nama kategori harus diisi',
              'nama_kategori.max'                => 'Nama kategori maksimal 255 karakter'

            ]);

          $storeDataKategori = [

              'nama_kategori'          => $request -> nama_kategori

             ];

              Kategori::create($storeDataKategori);
              return redirect('/kategori');
      }


        // DELETE KARTEGORI
      public function destroyKategori($id)
        {
            $kategories = Kategori::find($id);

            $kategories->delete();

        return redirect('/kategori');
        }

}
