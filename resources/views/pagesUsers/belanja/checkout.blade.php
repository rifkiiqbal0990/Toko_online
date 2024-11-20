@extends('layoutsUsers.app')
@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Checkout</h1>
            <p>
                Silakan lengkapi informasi berikut untuk menyelesaikan pembelian Anda.
            </p>
        </div>
    </div>
    <form action="/storeCheckout" method="POST">
        @csrf
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <h4>Detail Pesanan</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Produk</th>
                                <th>Jumlah Produk</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keranjangs as $index => $keranjang)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><input name="produk_id[]" type="hidden"
                                            value="{{ $keranjang->produk_id }}">{{ $keranjang->nama_produk }}</td>
                                    <td><input name="jumlah_order[]" type="hidden"
                                            value="{{ $keranjang->jumlah_order }}">{{ $keranjang->jumlah_order }}</td>
                                    <td><input name="harga[]" type="hidden" value="{{ $keranjang->harga }}">{{ $keranjang->harga }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h4 class="text-end">Total: 0K</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>Informasi Pengiriman</h4>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Pembelian</label>
                        <input type="date" name="tanggal_order" class="form-control" id="tanggal_order" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5>Metode Pengiriman</h5>
                    <div class="form-group">
                        <select name="metode_pengiriman" class="form-select" required>
                            <option value="">Pilih Metode Pengiriman</option>
                            <option value="standar">Pengiriman Standar</option>
                            <option value="express">Pengiriman Ekspres</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <h5>Metode Pembayaran</h5>
                    <div class="form-group">
                        <select name="metode_pembayaran" class="form-select" required>
                            <option value="">Pilih Metode Pembayaran</option>
                            <option value="kartu_kredit">Kartu Kredit</option>
                            <option value="cod">Cash on Delivery</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-end mt-3">
                    <button type="submit" class="btn btn-success btn-lg">Selesaikan Pembayaran<i></i></button>
                </div>
            </div>
        </div>
    </form>
@endsection
