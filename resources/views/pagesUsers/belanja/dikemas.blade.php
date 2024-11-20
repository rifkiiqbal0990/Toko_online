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
            @foreach ($users as $user)
                <div class="col-md-12">
                    <h4>Informasi Pengguna</h4>
                    <div class="mb-3">
                        <strong>Nama:</strong> {{ $user->nama }}
                    </div>
                    <div class="mb-3">
                        <strong>Alamat:</strong> {{ $user->alamat }}
                    </div>
                    <div class="mb-3">
                        <strong>Nomor Telepon:</strong> {{ $user->no_telp }}
                    </div>
                </div>
            @endforeach
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
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->produk->nama_produk }}</td>
                                <td>{{ $order->jumlah_order }}</td>
                                <td>{{ $order->produk->harga }}</td>
                                <td>{{ $order->status }}</td>
                            </tr>
                        @endforeach
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
