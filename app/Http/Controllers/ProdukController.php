<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    // STOK PRODUK
    public function stok()
    {
        $produks = Produk::all();
        return view('pagesAdmin.produk.stok', compact('produks'));
    }


    // CREATE PRODUK
    public function tambah()
    {
        $kategories = Kategori::all();
        return view('pagesAdmin.produk.tambahStok', compact('kategories'));
    }

    public function store(Request $request)
    {
        $request->validate( [

            'kategori_id'          => 'required',
            'nama_produk'          => 'required|max:255',
            'harga'                => 'required',
            'stok'                 => 'required',
            'foto'                 => 'required|image'

          ], [

            'kategori_id.required'           => 'Kategori harus diisi',
            'nama_produk.required'           => 'Nama Produk harus diisi',
            'nama_produk.max'                => 'Nama Produk maksimal 255 karakter',
            'harga.required'                 => 'Harga harus diisi',
            'stok.required'                  => 'Stok harus diisi'

          ]);

          if ($request->hasFile('foto')){
            $file = $request -> file('foto');
            $fileName = time() .'.'. $file->getClientOriginalExtension();
            $file -> move(public_path('foto'),$fileName);
        }

        $storeDataProduk = [

            'nama_produk'          => $request -> nama_produk,
            'harga'                => $request -> harga,
            'stok'                 => $request -> stok,
            'kategori_id'          => $request -> kategori_id,
            'foto'                 => $fileName
           ];

            Produk::create($storeDataProduk);
            return redirect('/stok');
    }


    // UPDATE PRODUK
    public function edit($id)
    {
        $dataProduk = Produk::find($id);
        $kategories = Kategori::all();
        return view('pagesAdmin.produk.edit', compact('dataProduk','kategories'));
    }


    public function update(Request $request, $id)
    {
        $request->validate( [

            'kategori_id'          => 'required',
            'nama_produk'          => 'required|max:255',
            'harga'                => 'required',
            'stok'                 => 'required'

          ], [

            'kategori_id.required'           => 'Kategori harus diisi',
            'nama_produk.required'           => 'Nama Produk harus diisi',
            'nama_produk.max'                => 'Nama Produk maksimal 255 karakter',
            'harga.required'                 => 'Harga harus diisi',
            'stok.required'                  => 'Stok harus diisi'

          ]);

          if ($request->hasFile('foto')){
            $file = $request -> file('foto');
            $fileName = time() .'.'. $file->getClientOriginalExtension();
            $file -> move(public_path('foto'),$fileName);
        }

        $storeDataProduk = [

            'nama_produk'          => $request -> nama_produk,
            'harga'                => $request -> harga,
            'stok'                 => $request -> stok,
            'kategori_id'          => $request -> kategori_id
           ];

           $dataProduk = Produk::find($id)->update($storeDataProduk);

            return redirect('/stok');
    }


    // DELETE PRODUK
    public function destroy($id)
    {
        $produks = Produk::find($id);

        if($produks->foto && file_exists(public_path('foto/'. $produks->foto))){
                unlink(public_path('foto/'. $produks->foto));
        }

        $produks->delete();

       return redirect('/stok');
    }

    // SHOW PRODUK SESUAI KATEGORI
    public function shopKategori($kategori)
    {
        // Jika kategori adalah "All", ambil semua produk
        if ($kategori === 'all') {
            $produks = Produk::all();
        } else {
            // Jika kategori spesifik, filter produk berdasarkan kategori
            $produks = Produk::where('kategori_id', $kategori)->get();
        }

        // Return view dengan data produk
        return view('pagesUsers.belanja.shopKategori', compact('produks', 'kategori'));
    }


}