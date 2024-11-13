@extends('layoutsAdmin.app')
@section('content')
    <div class="container">
        <h1 class="text-center">History Penjualan</h1>

        <form class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari nama pengguna atau produk">
                <button class="btn btn-primary" type="button">Cari</button>
            </div>
        </form>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>Nama Pengguna</th>
                                        <th>Produk Dibeli</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Andi</td>
                                        <td>Kolor</td>
                                        <td>2 Item</td>
                                        <td>2024-10-01</td>
                                        <td><button class="btn btn-info">Detail</button></td>
                                    </tr>
                                    <tr>
                                        <td>Budi</td>
                                        <td>Kaos</td>
                                        <td>1 Item</td>
                                        <td>2024-10-02</td>
                                        <td><button class="btn btn-info">Detail</button></td>
                                    </tr>
                                    <tr>
                                        <td>Cici</td>
                                        <td>Jaket</td>
                                        <td>1 Item</td>
                                        <td>2024-10-03</td>
                                        <td><button class="btn btn-info">Detail</button></td>
                                    </tr>
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
