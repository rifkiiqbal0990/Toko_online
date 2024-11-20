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
            @foreach ($users as $user)
                <div class="col-md-12">
                    <h4>Informasi Pengguna</h4>
                    <div class="mb-3">
                        <strong>Nama :</strong> {{ $user->nama }}
                    </div>
                    <div class="mb-3">
                        <strong>Alamat :</strong> {{ $user->alamat }}
                    </div>
                    <div class="mb-3">
                        <strong>Nomor Telepon :</strong> {{ $user->no_telp }}
                    </div>
                </div>
        </div>
        @endforeach
    </div>
    </div>
    </div>
@endsection
