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
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <form action="/storeLaporan" method="POST">
                                        @csrf
                                        <label>Dari Tanggal</label>
                                        <input type="date" name="dari_tanggal" class="form-control"
                                            placeholder="Pilih Tanggal Akhir">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Sampai Tanggal</label>
                                    <input type="date" name="sampai_tanggal" class="form-control"
                                        placeholder="Pilih Tanggal Akhir">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kategori Produk</label>
                                    <select name="kategori_id" id="" class="form-control">
                                        <option value="" selected>Pilih Kategori</option>
                                        @foreach ($kategories as $kategori)
                                            <option {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}
                                                value="{{ $kategori->id }}">
                                                {{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Produk</label>
                                    <input type="text" name="nama_produk" class="form-control"
                                        placeholder="Masukan Nama Produk">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jumlah Terjual</label>
                                    <input type="text" name="jumlah_terjual" class="form-control"
                                        placeholder="Masukan Jumlah Terjual">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Status Penjualdan</label>
                                    <select name="status" class="form-control" required>
                                        <option value="">Pilih Status</option>
                                        <option value="Terjual">Terjual</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Dibatalkan">Dibatalkan</option>
                                    </select>

                                </div>
                                <a href="" class="btn btn-danger"><i class="bi bi-arrow-return-left"></i>
                                    Kembali</a> |
                                <button type="submit" class="btn btn-primary">Tambahkan Laporan <i
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
