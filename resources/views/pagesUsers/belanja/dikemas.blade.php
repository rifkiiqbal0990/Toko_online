@extends('layoutsUsers.app')
@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Kemasan Pesanan</h1>
            <p>
                Silakan lihat informasi dan estimasi pengiriman Anda di bawah ini.
            </p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h4>Informasi Pengguna</h4>
                <div class="mb-3">
                    <strong>Nama:</strong> Hardtwo
                </div>
                <div class="mb-3">
                    <strong>Alamat:</strong> Jl. Awkwok No. 123, hiohoho
                </div>
                <div class="mb-3">
                    <strong>Nomor Telepon:</strong> 0812-3456-7890
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Estimasi Pengiriman</h4>
                <p>
                    Metode Pengiriman: <strong>Pengiriman Ekspres</strong>
                </p>
                <p>
                    Estimasi Waktu Pengiriman: <strong>1-3 Hari Kerja</strong>
                </p>
                <p>
                    Status Pengiriman: <strong>Dalam Proses</strong>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Riwayat Pesanan</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kaos</td>
                            <td>1</td>
                            <td>150K</td>
                            <td>150K</td>
                            <td>Dikemas</td>
                        </tr>
                        <tr>
                            <td>Jaket</td>
                            <td>2</td>
                            <td>250K</td>
                            <td>500K</td>
                            <td>Dikemas</td>
                        </tr>
                        <tr>
                            <td>Kolor</td>
                            <td>3</td>
                            <td>100K</td>
                            <td>300K</td>
                            <td>Dikemas</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col text-end mt-3">
                <a href="/profile" class="btn btn-primary btn-lg">Kembali</a>
            </div>
        </div>
    </div>
@endsection
