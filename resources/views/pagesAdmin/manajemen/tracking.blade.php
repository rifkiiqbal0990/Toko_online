@extends('layoutsAdmin.app')
@section('content')
    <div class="container">
        <h2 class="text-center">Tracking Order</h2>
        <form class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari nama pembeli atau no resi">
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
                                                <th>Resi</th>
                                                <th>Nama Customer</th>
                                                <th>Status</th>
                                                <th>Estimasi Sampai</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($trackings as $index => $tracking)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $tracking->no_resi }}</td>
                                                    <td>{{ $tracking->user->nama }}</td>
                                                    <td>{{ $tracking->status }}</td>
                                                    <td>{{ $tracking->estimasi }}</td>
                                                    <td>
                                                        <button class="btn btn-success">Detail</button>
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
@endsection
