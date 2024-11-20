@extends('layoutsAdmin.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Data Laporan</h1>

        <form class="mb-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Produk Terjual</th>
                                            <th>Jumlah Order</th>
                                            <th>Status</th>
                                            <th>Dari Tanggal</th>
                                            <th>Sampai Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($laporans as $index => $laporan)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $laporan->kategori->nama_kategori }}</td>
                                                <td>{{ $laporan->nama_produk }}</td>
                                                <td>{{ $laporan->jumlah_terjual }}</td>
                                                <td>{{ $laporan->status }}</td>
                                                <td>{{ $laporan->dari_tanggal }}</td>
                                                <td>{{ $laporan->sampai_tanggal }}</td>
                                                <td>
                                                    <button class="btn btn-primary" onclick="window.print()">Cetak
                                                        Laporan</button>
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
        </form>
    </div>
@endsection

@section('css')
    <style>
        @media print {
            body {
                font-family: Arial, sans-serif;
                font-size: 12pt;
            }

            .btn,
            .text-end,
            .container {
                display: none;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                border: 1px solid #000;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            /* Mengatur margin untuk cetak */
            .container {
                margin: 0;
                padding: 0;
            }

            .card-body {
                padding: 0;
            }
        }
    </style>
@endsection
