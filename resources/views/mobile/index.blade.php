@extends('layouts.app')
@section('ContentMobile')
<!-- jumbotron carausel -->
<div class="jumbotron-mobile jumbotron-fluid" id="jumbotron-mobile">
    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($data as $key => $items)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                <img src="{{ url('/bannerMobile/'.$items->bannerMobile) }}" alt="..." class="d-block mx-auto" width="320" height="200">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- jumbotron carausel -->

<!-- card container -->
<div class="container-mobile container">
    <h6 class="text-center pt-3 mb-3 font-weight-bold">Hey kamu, mau ke mana?</h6>
    <div class="row d-flex justify-content-center">
        <div class="col-3 shadow rounded m-1 p-2 d-flex flex-column align-items-center">
            <img src="img/img1.webp" alt="plan" width="50">
            <h6 class="font-weight-bold">Pesawat</h6>
        </div>

        <div class="col-3 shadow rounded m-1 p-2 d-flex flex-column align-items-center">
            <img src="img/img2.webp" alt="plan" width="50">
            <h6 class="font-weight-bold">Hotel</h6>
        </div>

        <div class="col-3 shadow rounded m-1 p-2 d-flex flex-column align-items-center">
            <img src="img/img3.webp" alt="plan" width="50">
            <h6 class="font-weight-bold">To Do</h6>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-3 shadow rounded m-1 p-2 d-flex flex-column align-items-center">
            <img src="img/img1.webp" alt="plan" width="50">
            <h6 class="font-weight-bold">Pesawat</h6>
        </div>

        <div class="col-3 shadow rounded m-1 p-2 d-flex flex-column align-items-center">
            <img src="img/img2.webp" alt="plan" width="50">
            <h6 class="font-weight-bold">Hotel</h6>
        </div>

        <div class="col-3 shadow rounded m-1 p-2 d-flex flex-column align-items-center">
            <img src="img/img3.webp" alt="plan" width="50">
            <h6 class="font-weight-bold">To Do</h6>
        </div>
    </div>
</div>
<!-- //card container -->

<!-- search card -->
<div
    class="text-box-mobile d-flex justify-content-around align-items-center rounded shadow-sm m-3 pl-1 pr-1 pt-2 pb-2">
    <p class="m-0">Log in untuk dapatkan diskon khusus dan benefit eksklusif!</p>
    <button class="btn">LOG IN</button>
</div>
<!-- //search card -->

<!-- covid mobile -->
<div class="covid-mobile ml-3 mr-3 mb-3">
    <p class="h5 font-weight-bold mb-0">COVID-19 Test</p>
    <p class="m-0"><small class="text-muted">Sebelum melakukan perjalanan, lakukan Rapid & Swab Test COVID-19
            dengan partner kesehatan</small></p>
    <div class="covid-mobile-carausel d-flex">
        <div class="covid-mobile-items mr-3">
            <img src="img/covid1.webp" alt="" width="152" height="184" class="rounded">
            <p class="h6 font-weight-bold mb-0">Covid Test dengan Kimia Farma</p>
            <p class="m-0"><small class="text-muted">Beli vouchernrya disini!</small></p>
        </div>

        <div class="covid-mobile-items mr-3">
            <img src="img/covid2.webp" alt="" width="152" height="184" class="rounded">
            <p class="h6 font-weight-bold mb-0">Covid Test dengan Kimia Homecare24
            </p>
            <p class="m-0"><small class="text-muted">Beli vouchernrya disini!</small></p>
        </div>
    </div>
</div>
<!-- //covid mobile -->

<!-- harga mobile -->
<div class="harga-mobile ml-3 mr-3">
    <p class="h5 font-weight-bold mb-0">Belum Kesamber Harga Gledek?</p>
    <p class="m-0"><small class="text-muted">Tenang! Masih ada promo buatmu. Diskon s.d 60% dan ada diskon
            tambahan s.d IDR 1.000.000.</small></p>
    <div class="harga-mobile-carausel d-flex">
        <div class="harga-mobile-items mr-3">
            <img src="img/harga1.webp" alt="" width="152" height="184" class="rounded">
            <p class="h6 font-weight-bold mb-0">Holiday Resort Lombok</p>
            <p class="m-0"><small class="text-muted">Mulai dari IDR 470.000 </small></p>
        </div>

        <div class="harga-mobile-items mr-3">
            <img src="img/harga2.webp" alt="" width="152" height="184" class="rounded">
            <p class="h6 font-weight-bold mb-0">Melia Bali</p>
            <p class="m-0"><small class="text-muted">Mulai dari IDR 1.150.000</small></p>
        </div>
    </div>
</div>
<!-- //harga mobile -->

<!-- jumbotron carausel 2 -->
<div class="jumbotron-mobile jumbotron-fluid bg-light">
    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($promosi as $key => $items)
            <div class="carousel-item p-5 {{$key == 0 ? 'active' : '' }}">
                <img src="{{ url('/promosi/'.$items->picture_promotions) }}" alt="..." class="d-block mx-auto" width="100" height="80">
                <p class="h6 font-weight-bold text-center">{{ $items->title_promotions }}</p>
                <p class="text-muted text-center"> <small>{{ $items->description_promotions }}</small></p>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- jumbotron carausel 2 -->

<!-- jumbotron carausel 3 -->
<div class="jumbotron-mobile jumbotron-fluid bg-light">
    <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($plane as $key => $planes)
            <div class="carousel-item p-5 {{$key == 0 ? 'active' : '' }}">
                <img src="{{ url('/plane_logo/'.$planes->logo_plane) }}" alt="..." class="d-block mx-auto" width="100" height="80">
                <p class="h6 font-weight-bold text-center">{{ $planes->brand_plane }}</p>
                <p class="text-muted text-center"> <small>{{ $planes->description_plane }}</small></p>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- jumbotron carausel 3 -->
@endsection