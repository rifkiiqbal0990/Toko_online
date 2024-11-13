@extends('layoutsAdmin.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Proses Penjualan</h1>

        <form class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari nama pembeli atau produk">
                <button class="btn btn-primary" type="button">Cari</button>
            </div>
            <form action="/storeOrder" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pembeli</th>
                                                <th>Produk Dibeli</th>
                                                <th>Jumlah</th>
                                                <th>Tanggal Order</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $index => $order)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $order->user->nama }}</td>
                                                    <td>{{ $order->produk->nama_produk }}</td>
                                                    <td>{{ $order->jumlah_order }}</td>
                                                    <td>{{ $order->tanggal_order }}</td>
                                                    <td>
                                                        <form action="/update/{{ $order->id }}" method="POST">
                                                            @csrf
                                                            <select name="status" class="form-control">
                                                                <option>Pilih Status</option>
                                                                <option value="diproses"
                                                                    {{ old('status', $order->status) == 'diproses' ? 'selected' : '' }}>
                                                                    Diproses</option>
                                                                <option value="dikemas"
                                                                    {{ old('status', $order->status) == 'dikemas' ? 'selected' : '' }}>
                                                                    Dikemas</option>
                                                                <option value="dikirim"
                                                                    {{ old('status', $order->status) == 'dikirim' ? 'selected' : '' }}>
                                                                    Dikirim</option>
                                                            </select>
                                                            @error('status')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                    </td>
                                                    <td>
                                                        <a href="/tracking/{{ $order->id }}" class="btn btn-info"><i
                                                                class="bi bi-arrow-return-left"></i>
                                                            Detail</a> |
                                                        <button class="btn btn-success">Update</button>
                                                    </td>
            </form>
            </tr>
            @endforeach
            </tbody>
            </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
