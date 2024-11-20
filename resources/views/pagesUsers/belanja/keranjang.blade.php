@extends('layoutsUsers.app')
@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Shopping Cart</h1>
            <p>
                Berikut ini adalah item yang telah Anda tambahkan ke keranjang belanja. Tinjau pilihan Anda di bawah ini.
            </p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>Jumlah Produk</th>
                            <th>Harga</th>
                            <th>Aksi</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keranjangs as $index => $keranjang)
                            @csrf
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $keranjang->nama_produk }}</td>
                                <td>{{ $keranjang->jumlah_order }}</td>
                                <td>{{ $keranjang->harga }}</td>
                                <td>
                                    <a onClick="return confirm('apakah anda yakin ingin menghapus data tersebut?')"
                                        href="/destroyKeranjang/{{ $keranjang->id }}" class="btn btn-danger text-">Hapus</a>
                                </td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-end">
                <h4> {{ $total }}K</h4>
            </div>
        </div>
        <div class="row">
            <div class="col text-end mt-3">
                <a href="/checkout" class="btn btn-success btn-lg">Checkout</a>
            </div>
        </div>
    </div>
@endsection
