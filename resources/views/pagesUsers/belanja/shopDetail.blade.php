@extends('layoutsUsers.app')
@section('content')
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{ asset('foto/' . $dataProduk->foto) }}" alt="Card image cap"
                            id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{ $dataProduk->nama_produk }}</h1>
                            <p class="h3 py-2">{{ $dataProduk->harga }}</p>
                            <h6>Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li> Kualitas Premium : Dibuat dengan bahan terbaik yang tahan lama dan nyaman digunakan.
                                </li>
                                <li> Fitur Inovatif : tahan air, desain ergonomis, atau teknologi terbaru.</li>
                                <li>Desain Elegan : Tampil modis di segala suasana, cocok untuk aktivitas sehari-hari maupun
                                    acara
                                    spesial.</li>
                            </ul>
 
                            <form action="/storeKeranjang" method="POST">
                                @csrf
                                <input type="hidden" name="nama_produk" value="{{ $dataProduk->nama_produk }}">
                                <input type="hidden" name="harga" value="{{ $dataProduk->harga }}">
                                <input type="hidden" name="produk_id" value="{{ $dataProduk->id }}">
                                <div class="row">
                                    <div class="col-auto">
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            Quantity
                                            <input type="number" name="jumlah_order" value="1" min="1"
                                                class="form-control">
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg">Cart</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </section>
    <!-- End Article -->
@endsection
