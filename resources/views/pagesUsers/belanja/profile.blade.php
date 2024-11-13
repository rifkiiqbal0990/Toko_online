@extends('layoutsUsers.app')
@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Profil Pengguna</h1>
            <p>
                Silakan lihat informasi akun Anda di bawah ini.
            </p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h4>Informasi Pengguna</h4>
                <div class="mb-3">
                    <strong>Nama:</strong> Hardtwo
                </div>
                <div class="mb-3">
                    <strong>Alamat:</strong> Jl. Awkwok No. 123, hiohoho
                </div>
                <div class="mb-3">
                    <strong>Nomor Telepon:</strong> 0812-3456-7890
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row">

        <div class="col-md-4 col-lg-2 pb-3">
            <a href="/tracking" class="text-decoration-none text-dark">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Delivery Services</h2>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-lg-2 pb-3">
            <a href="/history" class="text-decoration-none text-dark">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="bi bi-clock-history"></i></div>
                    <h2 class="h5 mt-4 text-center">History</h2>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-lg-2 pb-3">
            <a href="/keranjang" class="text-decoration-none text-dark">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class=""></i></div>
                    <h2 class="h5 mt-4 text-center">Ditunda</h2>
                </div>
            </a>
        </div>
    </div>
    </div>
@endsection
