@extends('layoutsAdmin.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Tambah Kategori</h1>
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Kategori</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="form-row">
                                <div class="form-group col-md-10">
                                    <form action="/storeKategori" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <label>Nama Kategori</label>
                                        <input name="nama_kategori" type="text" value="{{ old('nama_kategori') }}"
                                            class="form-control" placeholder="Masukan nama kategori">
                                        @error('nama_kategori')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                            <div class="text-right mt-3">
                                <a href="/stok" class="btn btn-danger"><i class="bi bi-arrow-return-left"></i>
                                    Kembali</a>
                                |
                                <button type="submit" class="btn btn-primary">Tambah Kategori <i
                                        class="bi bi-plus"></i></button>
                            </div>
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
@endsection
