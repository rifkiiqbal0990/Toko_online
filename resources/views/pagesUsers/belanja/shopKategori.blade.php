@extends('layoutsUsers.app')
@section('content')
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Product
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="{{ route('kategori.shopKategori', 1) }}">Fashion</a>
                            </li>
                            <li><a class="text-decoration-none" href="{{ route('kategori.shopKategori', 2) }}">Makanan</a>
                            </li>
                            <li><a class="text-decoration-none" href="{{ route('kategori.shopKategori', 3) }}">Minuman</a>
                            </li>
                            <li><a class="text-decoration-none"
                                    href="{{ route('kategori.shopKategori', 5) }}">Elektronik</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3"
                                    href="{{ route('kategori.shopKategori', 'all') }}">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3"
                                    href="{{ route('kategori.shopKategori', 1) }}">Fashion</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none"
                                    href="{{ route('kategori.shopKategori', 2) }}">Makanan</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none"
                                    href="{{ route('kategori.shopKategori', 3) }}">Minuman</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none"
                                    href="{{ route('kategori.shopKategori', 5) }}">Elektronik</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                        </div>
                    </div>
                </div>
                @if ($produks->count() > 0)
                    <div class="row">
                        @foreach ($produks as $item)
                            <div class="col-md-4">
                                <div class="card mb-4 product-wap rounded-0">
                                    <div class="card rounded-0">
                                        <img class="card-img rounded-0 img-fluid" src="{{ asset('foto/' . $item->foto) }}"
                                            alt="{{ $item->nama_produk }}">
                                        <div
                                            class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                            <ul class="list-unstyled">
                                                <li><a class="btn btn-success text-white mt-2"
                                                        href="/shopDetail/{{ $item->id }}"><i
                                                            class="far fa-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="/shopDetail" class="h3 text-decoration-none">{{ $item->nama_produk }}</a>
                                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                            <li class="pt-2">
                                                <span
                                                    class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                                <span
                                                    class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                                <span
                                                    class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                                <span
                                                    class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                                <span
                                                    class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                            </li>
                                        </ul>
                                        <p class="text-center mb-0">{{ $item->harga }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>Tidak ada produk dalam kategori ini.</p>
                @endif
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Brand Kami</h1>
                    <p>
                        POKOKNYA PRODUK KAMI BERKUALITAS
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example"
                                data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_01.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_02.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_03.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_04.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_01.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_02.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_03.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_04.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_01.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_02.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_03.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('assetsfrontend/img/brand_04.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->
@endsection
