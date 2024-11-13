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
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h4>Detail Pesanan</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Jumlah Produk</th>
                            <th>Harga</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kaos</td>
                            <td>1</td>
                            <td>150K</td>
                            <td>150K</td>
                        </tr>
                        <tr>
                            <td>Jaket</td>
                            <td>2</td>
                            <td>250K</td>
                            <td>500K</td>
                        </tr>
                        <tr>
                            <td>Kolor</td>
                            <td>3</td>
                            <td>100K</td>
                            <td>300K</td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="text-end">Total: 950K</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Informasi Pengiriman</h4>
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="nomor_hp" class="form-label">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="nomor_hp" required>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5>Metode Pengiriman</h5>
                <div class="form-group">
                    <select class="form-select" required>
                        <option value="">Pilih Metode Pengiriman</option>
                        <option value="standard">Pengiriman Standar</option>
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
                    <select class="form-select" required>
                        <option value="">Pilih Metode Pembayaran</option>
                        <option value="credit_card">Kartu Kredit</option>
                        <option value="cash_on_delivery">Cash on Delivery</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-end mt-3">
                <a href="/dikemas" class="btn btn-success btn-lg">Selesaikan Pembayaran</a>
            </div>
        </div>
    </div>
@endsection
