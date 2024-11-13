@extends('layoutsUsers.app')
@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Shopping Cart</h1>
            <p>
                Berikut ini adalah item yang telah Anda tambahkan ke keranjang belanja. Tinjau pilihan Anda di bawah ini.
            </p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Jumlah Produk</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kaos</td>
                            <td>
                                <input name="jumlah_produk" type="number" class="form-control" value="1" min="1">
                            </td>
                            <td>150K</td>
                            <td>150K</td>
                            <td>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jaket</td>
                            <td>
                                <input type="number" class="form-control" value="2" min="1">
                            </td>
                            <td>250K</td>
                            <td>500K</td>
                            <td>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kolor</td>
                            <td>
                                <input type="number" class="form-control" value="3" min="1">
                            </td>
                            <td>100K</td>
                            <td>300K</td>
                            <td>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-end">
                <h4>Total: 950K</h4>
            </div>
        </div>
        <div class="row">
            <div class="col text-end mt-3">
                <a href="/checkout" class="btn btn-success btn-lg">Checkout</a>
            </div>
        </div>
    </div>
@endsection
