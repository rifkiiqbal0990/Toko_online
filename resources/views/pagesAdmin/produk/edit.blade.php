@extends('layoutsAdmin.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Edit Stok</h1>
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Stok</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <form action="/update/{{ $dataProduk->id }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <label>Nama Produk</label>
                                        <input name="nama_produk" type="text" value="{{ $dataProduk->nama_produk }}"
                                            class="form-control" placeholder="Masukan nama produk">
                                        @error('nama_produk')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Harga</label>
                                    <input name="harga" type="text" value="{{ $dataProduk->harga }}"
                                        class="form-control" placeholder="Masuka nominal harga">
                                    @error('harga')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>stok</label>
                                    <input name="stok" type="text" value="{{ $dataProduk->stok }}"
                                        class="form-control" placeholder="Masukan jumlah stok">
                                    @error('stok')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>kategori</label>
                                    <select name="kategori_id" id="" class="form-control">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($kategories as $kategori)
                                            <option {{ $dataProduk->kategori_id == $kategori->id ? 'selected' : '' }}
                                                value="{{ $kategori->id }}"> {{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" placeholder="Masukan deskripsi produk">{{ $dataProduk->deskripsi }}</textarea>
                                    @error('deskripsi')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="">Foto</label>
                                        <input name="foto" type="file" class="form-control">
                                        @error('foto')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-right mt-3">
                                <a href="/stok" class="btn btn-danger"><i class="bi bi-arrow-return-left"></i> Kembali</a>
                                |
                                <button type="submit" class="btn btn-primary">Edit Produk <i
                                        class="bi bi-plus"></i></button>
                            </div>
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
