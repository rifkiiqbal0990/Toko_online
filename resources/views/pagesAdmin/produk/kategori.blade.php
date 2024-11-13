@extends('layoutsAdmin.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Kategori Produk</h1>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Kategori</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Daftar Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($kategories as $index => $kategori)
                                    <tbody>
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $kategori->nama_kategori }}</td>
                                            <td>
                                                <a onClick="return confirm('apakah anda yakin ingin menghapus data tersebut?')"
                                                    href="/destroyKategori/{{ $kategori->id }}"
                                                    class="btn btn-danger text-">Hapus</a>
                                            </td>
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
@endsection
