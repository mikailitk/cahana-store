@extends('dashboard.layout')

@section('content')
<!-- BEGIN SLIDER -->
<div class="page-slider margin-bottom-35">
    <div id="carousel-example-generic" class="carousel slide carousel-slider">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="item carousel-item-four active">
                <div class="container">
                    <div class="carousel-position-four text-center">
                        <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                            <span class="color-red-v2">Betta</span><br/> Fish
                        </h2>
                        <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">Toko Ikan Hias Beserta Alat-Alat Ikan</p>
                    </div>
                </div>
            </div>
            
            <!-- Second slide -->
            <div class="item carousel-item-five">
                <div class="container">
                    <div class="carousel-position-four text-center">
                        <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                            Kualitas Bagus
                        </h2>
                        <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                            Harga Murah
                        </p>
                        <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                            Proses Cepat
                        </p>
                        <a class="carousel-btn" href="#best-seller-anchor" data-animation="animated fadeInUp">Belanja Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Third slide -->
            <div class="item carousel-item-seven">
                <div class="center-block">
                    <div class="center-block-wrap">
                        <div class="center-block-body">
                            <h2 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                                Dapatkan Ikan Hias Yang <br/>
                                Lebih Murah </br>
                                Daripada Abang2 Ikan di Depan Sekolah 
                            </h2>
                            <a class="carousel-btn" href="#best-seller-anchor" data-animation="animated fadeInUp">Belanja Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</div>
<!-- END SLIDER -->

<div class="main">
    <div class="container">
    <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
    <div class="row margin-bottom-40" id="best-seller-anchor">
        <!-- BEGIN SALE PRODUCT -->
        <div class="col-md-12 sale-product">
        <h2>Best Product</h2>
        <div class="owl-carousel owl-carousel5">
            @foreach($produks as $p)
            <div>
                <div class="product-item">
                    <div class="pi-img-wrapper">
                    <img src="/images/{{ $p->gambar_produk }}" class="img-responsive" alt="{{ $p->nama_produk }}">
                    <div>
                        <a href="#product-pop-up-{{ $p->id }}" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                    </div>
                    <h3><a href="shop-item.html">{{ $p->nama_produk }}</a></h3>
                    <div class="pi-price">RP. {{ $p->harga_produk }}</div>
                    <a href="#" class="btn btn-default add2cart">Add to cart</a>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        <!-- END SALE PRODUCT -->
    </div>
    <!-- END SALE PRODUCT & NEW ARRIVALS -->
    <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
    <div class="row margin-bottom-40" id="ikan-anchor">
        <!-- BEGIN SALE PRODUCT -->
        <div class="col-md-12 sale-product">
        <h2>Ikan</h2>
        <div class="owl-carousel owl-carousel5">
            @foreach($ikans as $i)
            <div>
                <div class="product-item">
                    <div class="pi-img-wrapper">
                    <img src="/images/{{ $i->gambar_produk }}" class="img-responsive" alt="{{ $i->nama_produk }}">
                    <div>
                        <a href="#product-pop-up-{{ $i->id }}" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                    </div>
                    <h3><a href="shop-item.html">{{ $i->nama_produk }}</a></h3>
                    <div class="pi-price">RP. {{ $i->harga_produk }}</div>
                    <a href="#" class="btn btn-default add2cart">Add to cart</a>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        <!-- END SALE PRODUCT -->
    </div>
    <!-- END SALE PRODUCT & NEW ARRIVALS -->
    <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
    <div class="row margin-bottom-40" id="pelet-anchor">
        <!-- BEGIN SALE PRODUCT -->
        <div class="col-md-12 sale-product">
        <h2>Pelet</h2>
        <div class="owl-carousel owl-carousel5">
            @foreach($pelets as $pe)
            <div>
                <div class="product-item">
                    <div class="pi-img-wrapper">
                    <img src="/images/{{ $pe->gambar_produk }}" class="img-responsive" alt="{{ $pe->nama_produk }}">
                    <div>
                        <a href="#product-pop-up-{{ $pe->id }}" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                    </div>
                    <h3><a href="shop-item.html">{{ $pe->nama_produk }}</a></h3>
                    <div class="pi-price">RP. {{ $pe->harga_produk }}</div>
                    <a href="#" class="btn btn-default add2cart">Add to cart</a>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        <!-- END SALE PRODUCT -->
    </div>
    <!-- END SALE PRODUCT & NEW ARRIVALS -->
    <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
    <div class="row margin-bottom-40" id="alat-anchor">
        <!-- BEGIN SALE PRODUCT -->
        <div class="col-md-12 sale-product">
        <h2>Alat</h2>
        <div class="owl-carousel owl-carousel5">
            @foreach($alats as $a)
            <div>
                <div class="product-item">
                    <div class="pi-img-wrapper">
                    <img src="/images/{{ $a->gambar_produk }}" class="img-responsive" alt="{{ $a->nama_produk }}">
                    <div>
                        <a href="#product-pop-up-{{ $a->id }}" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                    </div>
                    <h3><a href="shop-item.html">{{ $a->nama_produk }}</a></h3>
                    <div class="pi-price">RP. {{ $a->harga_produk }}</div>
                    <a href="#" class="btn btn-default add2cart">Add to cart</a>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        <!-- END SALE PRODUCT -->
    </div>
    <!-- END SALE PRODUCT & NEW ARRIVALS -->
    </div>
</div>
@endsection

@section('product-view')
@foreach($all_produks as $ap)
<div id="product-pop-up-{{ $ap->id }}" style="display: none; width: 700px;">
    <div class="product-page product-pop-up">
        <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-3">
            <div class="product-main-image">
            <img src="/images/{{ $ap->gambar_produk }}" alt="{{ $ap->nama_produk }}" class="img-responsive">
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-9">
            <h2>{{ $ap->nama_produk }}</h2>
            <div class="price-availability-block clearfix">
            <div class="price">
                <strong><span>Rp. </span>{{ $ap->harga_produk }}</strong>
            </div>
            <div class="availability">
                Availability: <strong>In Stock</strong>
            </div>
            </div>
            <div class="description">
            <p>{{ $ap->desc_produk }}</p>
            </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection