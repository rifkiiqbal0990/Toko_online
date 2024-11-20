@extends('layoutsUsers.app')
@section('content')
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q"
                        placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($produks as $index => $produk)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="{{ asset('foto/' . $produk->foto) }}" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left align-self-center">
                                    <h1 class="h1 text-success"><b>xC</b> eCommerce</h1>
                                    <h3 class="h2">{{ $produk->nama_produk }}</h3>
                                    <p>
                                        Jaket parasut adalah pilihan sempurna bagi Anda yang menginginkan kombinasi antara
                                        gaya, kenyamanan, dan fungsi. Dibuat dari bahan parasut berkualitas tinggi, jaket
                                        ini dirancang untuk memberikan perlindungan maksimal sekaligus tampilan modis dalam
                                        berbagai situasi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Awal Baru, Gaya Baru</h1>
                <p>
                    Produk: Jaket hangat, peralatan elektronik, atau produk untuk megenyangkan perut anda.
                </p>
                <p>
                    Promo: Diskon Awal Tahun atau Paket Hemat "Resolusi Baru."
                </p>
            </div>
        </div>
        <div class="row">
            @foreach ($produks as $produk)
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="/shopDetail/{{ $produk->id }}"><img src="{{ asset('foto/' . $produk->foto) }}"
                            class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">{{ $produk->nama_produk }}</h5>
                    <p class="text-center"><a href="/shop" class="btn btn-success">Go Shop</a></p>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End Categories of The Month -->

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Produk di Toko Kami</h1>
                    <p>
                        Kualitas Premium: Dibuat dengan bahan terbaik yang tahan lama dan nyaman digunakan.
                    </p>
                    <p>
                        Fitur Inovatif: tahan air, desain ergonomis, atau teknologi terbaru.
                    </p>
                    <p>
                        Desain Elegan: Tampil modis di segala suasana, cocok untuk aktivitas sehari-hari maupun acara
                        spesial.
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach ($produks as $produk)
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="/shopDetail/{{ $produk->id }}">
                                <img src="{{ asset('foto/' . $produk->foto) }}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                    </li>
                                    <li class="text-muted text-right">{{ $produk->harga }}</li>
                                </ul>
                                <a href="/shopDetail/{{ $produk->id }}"
                                    class="h2 text-decoration-none text-dark">{{ $produk->nama_produk }}</a>
                                <p class="card-text">
                                    Jaket parasut adalah pilihan sempurna bagi Anda yang menginginkan kombinasi antara
                                    gaya, kenyamanan, dan fungsi. Dibuat dari bahan parasut berkualitas tinggi, jaket
                                    ini dirancang untuk memberikan perlindungan maksimal sekaligus tampilan modis dalam
                                    berbagai situasi.
                                </p>
                                <p class="text-muted">Reviews (24)</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
@endsection
