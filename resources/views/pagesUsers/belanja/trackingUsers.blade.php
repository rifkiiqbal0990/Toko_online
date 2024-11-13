@extends('layoutsUsers.app')
@push('custom-css')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .header {
            background-color: slategrey;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        .order-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .status-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
        }

        .status-item img {
            width: 30px;
            /* Ukuran ikon */
            height: 30px;
            /* Ukuran ikon */
            margin-right: 10px;
            /* Spasi antara ikon dan teks */
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
        }
    </style>
@endpush
@section('content')
    <div class="header">
        <h1>Tracking Order</h1>
    </div>

    <div class="container mt-4">
        <div class="order-card">
            <h5>Nomor Pesanan: #123456</h5>
            <p>Status: Dalam Pengiriman</p>
            <p>Estimasi Tiba: 25 Oktober 2024</p>
            <p>Kurir: JNE</p>
        </div>

        <div class="mt-4">
            <h3>Estimasi Pengiriman</h3>
            <div class="order-card">
                <div class="status-item">
                    <img src="https://img.icons8.com/ios-filled/50/000000/package.png" alt="Kemasan">
                    <span>Kemasan Diterima</span>
                    <span class="text-muted ms-auto">22 Oktober 2024</span>
                </div>
                <div class="status-item">
                    <img src="https://img.icons8.com/ios-filled/50/000000/shipped.png" alt="Dikirim">
                    <span>Dikirim</span>
                    <span class="text-muted ms-auto">23 Oktober 2024</span>
                </div>
                <div class="status-item">
                    <span class="bg-primary py-2 px-3" style="border-radius: 100px"><i
                            class="bi bi-truck text-white"></i></span>
                    <span>Pesanan Tiba</span>
                    <span class="text-muted ms-auto">25 Oktober 2024</span>
                </div>
            </div>
        </div>

        <div class="button-container">
            <a href="/profile" class="btn btn-danger">Kembali</a>
        </div>
    </div>
@endsection
