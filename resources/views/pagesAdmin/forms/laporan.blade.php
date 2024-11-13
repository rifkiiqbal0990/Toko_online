@extends('layoutsAdmin.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Laporan Penjualan</h1>
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Laporan Penjualan</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Dari Tanggal</label>
                                        <input type="date" class="form-control" placeholder="Pilih Tanggal Akhir">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Sampai Tanggal</label>
                                        <input type="date" class="form-control" placeholder="Pilih Tanggal Akhir">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>kategori Produk</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Pilih katrgori</option>
                                            <option>Fashion</option>
                                            <option>Makanan</option>
                                            <option>Minuman</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nama Produk</label>
                                        <input type="text" class="form-control" placeholder="Masukan Nama Produk">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Jumlah Terjual</label>
                                        <input type="text" class="form-control" placeholder="Masukan Jumlah Terjual">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Status Penjualdan</label>
                                        <select name="status_penjualan" class="form-control" aria-label="status_penjualan">
                                            <option value="semua">Semua</option>
                                            <option value="terjual">Terjual</option>
                                            <option value="pending">Pending</option>
                                            <option value="dibatalkan">Dibatalkan</option>
                                        </select>
                                    </div>
                                    <a href="" class="btn btn-danger"><i class="bi bi-arrow-return-left"></i>
                                        Kembali</a> |
                                    <button type="submit" class="btn btn-primary">Tampilkan Laporan <i
                                            class="bi bi-printer"></i></button>
                            </form>
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
