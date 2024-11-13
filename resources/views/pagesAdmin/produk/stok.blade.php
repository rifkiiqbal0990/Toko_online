@extends('layoutsAdmin.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Stok Barang</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Stok Toko</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Foto</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produks as $index => $produk)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $produk->nama_produk }}</td>
                                            <td><img width="50" src="{{ asset('foto/' . $produk->foto) }}"
                                                    alt=""></td>
                                            <td>{{ $produk->harga }}</td>
                                            <td>{{ $produk->stok }}</td>
                                            <td>{{ $produk->kategori->nama_kategori }}
                                            </td>
                                            <td>
                                                <a href="/edit/{{ $produk->id }}"
                                                    class="btn btn-warning text-white">Edit</a>
                                                |
                                                <a onClick="return confirm('apakah anda yakin ingin menghapus data tersebut?')"
                                                    href="/destroy/{{ $produk->id }}"
                                                    class="btn btn-danger text-">Hapus</a>
                                            </td>
                                            </tfoot>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
