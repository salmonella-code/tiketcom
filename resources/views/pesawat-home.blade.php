@extends('layouts.app')
@section('content')

    <!-- container carausel -->
    <div class="jumbotron jumbotron-fluid justify-content-center pt-0">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" width="908" height="300">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach($bannerWeb as $key => $items)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block mx-auto" src="{{ url('/bannerWeb/'.$items->banner) }}" alt="First slide" width="908" height="300">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- //container carausel -->

    <!-- card -->
    <div class="d-flex justify-content-center mb-5" id="card-container">
        <div class="card bg-light shadow" style="width: 1180px;">
            <div class="card-body" id="card-container-body">
                <!-- header -->
                <div class="product-list d-flex justify-content-between align-items-end">
                    <div class="product-list-text">
                        <h4>Hey, Kamu</h4>
                        <h3 class="font-weight-bold">Mau ke mana?</h3>
                    </div>
                    <div class="title-img d-flex" id="title-img">
                        <div class="title-img-items">
                            <img src="img/img1.webp" alt="" width="76" />
                            <p class="text-center mb-0">Pesawat</p>
                        </div>
                        <div class="title-img-items ml-3">
                            <img src="img/img2.webp" alt="" width="76" />
                            <p class="text-center mb-0">Hotel</p>
                        </div>
                        <div class="title-img-items ml-3">
                            <img src="img/img3.webp" alt="" width="76" />
                            <p class="text-center mb-0">To Do</p>
                        </div>
                    </div>
                </div>
                <!-- //header -->
                <!-- middle -->
                <div class="product-form d-flex justify-content-between mt-4">
                    <div class="form">
                        <h4><i class="fas fa-plane" style="
                              border-radius: 100px;
                              background-color: rgb(0, 100, 210);
                              color: white;
                              padding: 5px;
                            "></i> Cari harga tiket pesawat murah & promo di sini</h4>
                        <div class="d-flex align-items-start">
                            <div class="input-group d-flex align-items-baseline mr-3" style="width: 140px;">
                                <input type="radio" aria-label="Radio button for following text input">
                                <p class="ml-2">Sekali Jalan</p>
                            </div>
                            <div class="input-group d-flex align-items-baseline">
                                <input type="radio" aria-label="Radio button for following text input">
                                <p class="ml-2">Pulang - Pergi</p>
                            </div>
                        </div>
                    </div>

                    <div class="produck-form-right">
                        <a href="#" class="font-weight-bold">Pencarian Terakhir ></a>
                    </div>

                </div>
                <!-- //midle -->

                <!-- bottom -->
                <div class="row">
                    <div class="col border border-secondary pt-3 pb-3 pr-0">
                        <p class="text-muted mb-2" style="font-size: 14px;">Dari</p>
                        <h6 class="text-muted font-weight-bold">
                            <i class="fas fa-plane-departure" style="color: rgb(0, 100, 210)"></i>
                            Mau ke mana?
                        </h6>
                    </div>
                    <div class="col border border-secondary pt-3 pb-3">
                        <p class="text-muted mb-2" style="font-size: 14px;">Ke</p>
                        <h6 class="text-muted font-weight-bold">
                            <i class="fas fa-plane-arrival" style="color: rgb(0, 100, 210)"></i>
                            Mau ke mana?
                        </h6>
                    </div>
                    <div class="col border border-secondary pt-3 pb-3">
                        <p class="text-muted mb-2" style="font-size: 14px;">Berangkat</p>
                        <h6 style="color: rgb(53, 64, 90)" class="font-weight-bold"><i class="fa fa-calendar"
                                aria-hidden="true" style="color: rgb(0, 100, 210)"></i> Jum, 01 Januari 2021</h6>
                    </div>
                    <div class="col border border-secondary pt-3 pb-3">
                        <div class="input-group d-flex align-items-baseline">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                            <p class="text-muted ml-1 mb-2" style="font-size: 14px;">Pulang</p>
                        </div>
                        <h6 style="color: rgb(53, 64, 90)" class="font-weight-bold"><i class="fa fa-calendar"
                                aria-hidden="true" style="color: rgb(0, 100, 210)"></i> Sab, 10 Januari 2021</h6>
                    </div>
                    <div class="col border border-secondary pt-3 pb-3">
                        <p class="text-muted mb-2" style="font-size: 14px;">Penumpang & kelas kabin</p>
                        <h6 style="color: rgb(53, 64, 90)" class="font-weight-bold">1 Penumpang, Ekonomi</h6>
                    </div>
                </div>
                <!-- //bottom -->

                <!-- footer card -->
                <div class="d-flex align-items-center">
                    <div class="input-group mt-3 d-flex align-items-start">
                        <input class="mt-1" type="checkbox" aria-label="Checkbox for following text input">
                        <div class="ml-2 text">
                            <h5 class="font-weight-bold mb-0">Tampilkan tiket FLEXI</h5>
                            <p>
                                Tiket fleksibel yang bebas di-reschedule.
                                <a href="#">Lihat detail.</a>
                            </p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning rounded-pill text-muted text-nowrap">CARI
                        PENERBANGAN</button>
                </div>
                <!-- //footer card -->
            </div>
        </div>
    </div>
    <!-- //card -->

    <!-- feature box -->
    <div class="feature-box mx-auto border-bottom" style="width: 1180px;">
        <div class="row mb-4">
            <div class="col d-flex align-items-center p-0">
                <img src="img/book.webp" alt="" width="100" height="86">
                <div class="text">
                    <h5 class="font-weight-bold mb-0">Simple Profile</h5>
                    <p class="text-muted">Pesan lebih cepat, isi data penumpang dengan sekali klik.
                    </p>
                </div>
            </div>
            <div class="col d-flex align-items-center p-0">
                <img src="img/simple-reschedule.webp" alt="" width="82" height="63">
                <div class="text">
                    <h5 class="font-weight-bold mb-0">Simple Reschedule</h5>
                    <p class="text-muted">Memudahkan kamu mengatur ulang penerbangan.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col d-flex align-items-center p-0">
                <img src="img/easy-ticket.webp" alt="" width="100" height="86">
                <div class="text">
                    <h5 class="font-weight-bold mb-0">Simple Booking Process</h5>
                    <p class="text-muted">Pemesanan tanpa ribet di mana pun dan kapan pun.
                    </p>
                </div>
            </div>
            <div class="col d-flex align-items-center p-0">
                <img src="img/simple-refund.webp" alt="" width="82" height="63">
                <div class="text ml-2">
                    <h5 class="font-weight-bold mb-0">Simple Refund</h5>
                    <p class="text-muted">Simple Refund
                        Refund tiket tanpa ribet dari aplikasi maupun website.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //feature box -->

    <!-- feature container -->
    <div class="feature-container mx-auto mt-5 border-bottom">
        <h3 class="font-weight-bold text-center mb-4">Fitur Baru untuk Liburan Lebih Aman!</h3>
        <h6 class="font-weight-bold text-center ">Dari tiket CLEAN untuk memastikan kebersihan, sampai tiket FLEXI yang
            bisa dipakai sampai 1 tahun kedepan.</h6>
        <div class="d-flex justify-content-between mt-3">
            <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/original/home/2020/09/28/4e8075bc-662a-4055-a0ed-71d40018f525-1601278341856-c8149f87067ac62653dd10df7231515c.jpg"
                alt="" width="280" height="170" class="rounded shadow">
            <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/original/home/2020/09/28/2847aa1b-7e68-42c9-b59b-7025e79723dd-1601278359707-9b80f43511f7562d2db15fcf224b5b8c.jpg"
                alt="" width="280" height="170" class="rounded shadow">
            <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/original/home/2020/09/28/2665baaa-57cb-4d02-991b-3f1b622f98fb-1601278375646-b7dda288704319ea992185c1f9ba8ae4.jpg"
                alt="" width="280" height="170" class="rounded shadow">
            <img src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/original/home/2020/09/28/028dd8ac-b14e-41ac-96b6-3807e077e37a-1601278390376-e072679e768e01880c6e7a38c9ed092f.jpg"
                alt="" width="280" height="170" class="rounded shadow">
        </div>
        <div class="d-flex justify-content-center mt-5 mb-5">
            <button type="button" class="btn btn-outline-warning">Info Selengkapnya</button>
        </div>
    </div>
    <!-- //feature container -->

    <!-- simple tiket -->
    <div class="simple-tiket pt-5">
        <h2 class="text-center font-weight-bold">Partner Maskapai</h2>
        <div class="container mb-5">
            <div class="card mx-auto mt-5" style="width: 1180px;">
                <div class="card-body">
                    @foreach ($plane->chunk(3) as $items)
                    <div class="row mt-3 mb-5">
                        @foreach($items as $item)
                        <div class="col">
                            <img src="{{ url('/plane_logo/'.$item->logo_plane) }}" alt="" width="100" height="82" class=" d-flex mx-auto" data-toggle="tooltip" data-placement="top" title="{{ $item->brand_plane }}">                        
                            <h5 class=" text-center font-weight-bold mt-4 mb-2">{{ $item->brand_plane }}</h5>
                            <p class="text-center text-muted">{{ $item->description_plane }}</p>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="img-footer mx-auto">
            <img src="img/adccc810.svg" alt="" width="380" height="247">
        </div>
        <h2 class="text-center font-weight-bold mt-5 pb-5">mau ke mana? semua ada tiketnya!</h2>
    </div>
    <!-- //simple tiket -->

    <!-- easy-simple-installment -->
    <div class="easy-simple-installment mx-auto pt-5" style="width: 1180px;">
        <div class=" row align-items-center">
            <div class="col"><img src="img/dompet.webp" alt="" width="660" height="368"></div>
            <div class="col">
                <h3 class="font-weight-bold">Cicilan Mudah dan Simpel</h3>
                <p class="text-muted mb-5 mt-3">Pesan tiket dan hotelmu sekarang, lalu cicil pembayarannya dengan sekali
                    klik. Iya, semudah itu mencicil
                    di tiket.com! Program cicilan ini bisa kamu gunakan untuk membeli tiket pesawat, hotel, tiket
                    hiburan,
                    dan sewa mobil. Mau bayar dalam waktu 3, 6, atau 12 bulan, semua tergantung pilihanmu! Program
                    cicilan
                    ini bisa dinikmati oleh pemegang kartu bank yang telah berpartner dengan tiket.com.</p>
                <a href="#" class="font-weight-bold mt-5">SELENGKAPNYA</a>
            </div>
        </div>
    </div>
    <!-- //easy-simple-installment -->

    <!-- partner-of-tiket -->
    <div class="partner-of-tiket pt-5">
        <div class="row align-items-center mx-auto pt-5 pb-5" style="width: 1180px;">
            <div class="col">
                <h3 class="font-weight-bold text-right">Partner tiket.com</h3>
                <p class="text-muted mb-5 mt-3 text-right">Kamu adalah prioritas kami! Karena itu, tiket.com bekerjasama
                    dengan berbagai penyedia jasa transportasi, jaringan hotel, sewa mobil, dan penyedia tiket hiburan
                    untuk memastikan liburan kamu selalu nyaman dan menyenangkan.</p>
                <a href="#" class="font-weight-bold text-right d-flex justify-content-end">SELENGKAPNYA</a>
            </div>
            <div class="col">
                <img src="img/c85b03c5.svg" alt="" width="660" height="368">
            </div>
        </div>
    </div>
    <!-- //partner-of-tiket -->

    <!-- footer -->
    <div class="footer">
        <!-- footer top -->
        <div class="footer-top d-flex justify-content-center mx-auto p-5 row">
            <div class="footer-content">
                <img src="img/logo.webp" alt="logo" width="185" />
                <div class="footer-content-items d-flex align-items-center mt-3">
                    <img src="img/message.webp" alt="message" width="50" height="40" />
                    <div class="footer-text">
                        <span class="span-gray d-block ml-3">Whatsapp</span>
                        <span class="ml-3">0858 1150 0888</span>
                    </div>
                </div>

                <div class="footer-content-items d-flex align-items-center mt-3">
                    <img src="img/email.webp" alt="" width="50" height="40" />
                    <div class="footer-text">
                        <span class="span-gray d-block ml-3">Email</span>
                        <span class="ml-3">cs@tiket.com</span>
                    </div>
                </div>

                <div class="footer-content-items d-flex align-items-center mt-3">
                    <img src="img/call.png" alt="" width="50" height="40" />
                    <div class="footer-text">
                        <span class="span-gray d-block ml-3">Call Center</span>
                        <span class="ml-3">
                            0804 1500 878 (Indonesia only)
                        </span>
                        <br>
                        <span class="ml-3">+6221 3973 0888</span>
                    </div>
                </div>
            </div>

            <div class="footer-list col">
                <h6 class="font-weight-bold mb-4 text-dark">Perusahaan</h6>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Karir</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Corporate</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Partner</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Elit Rewards</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Perlindugan</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Cililan</a></li>
                </ul>
            </div>

            <div class="footer-list col">
                <h6 class="font-weight-bold mb-4 text-dark">Produk</h6>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Tiket Pesawat</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Hotel</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">To Do</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Tiket Kereta Api</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Sewa Mobil</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Event</a></li>
                </ul>
            </div>

            <div class="footer-list col">
                <h6 class="font-weight-bold mb-4 text-dark">Dukungan</h6>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Pusat Bantuan</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Kebijakan Privasi</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Syarat & Ketentuan</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Daftarkan Hotel Anda</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Informasi Coronavirus</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">Group Booking</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">tiket Anti Galau</a></li>
                    <li class="nav-item"><a class="nav-link pb-0" href="#">tiket CLEAN</a></li>
                </ul>
            </div>

            <div class="footer-list col">
                <h6 class="font-weight-bold mb-4 text-dark">Download tiket.com app</h6>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link pb-0" href="#"><img src="img/playstore.webp" alt="" /></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pb-0" href="#"><img src="img/appstore.webp" alt="" srcset="" /></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--//footer top -->

        <!-- footer midle -->
        <div class="footer-middel d-flex justify-content-center align-items-start p-5 row mx-auto">
            <div class="wonderfull-indonesia d-flex col p-0">
                <img src="img/wonderfulIndonesia.webp" alt="wi" width="148">
                <span class="ml-2">
                    Official Partner <br>
                    Kementerian Pariwisata <br>
                    Republik Indonesia <br>
                </span>
            </div>

            <div class="footer-middle-items d-inline col p-0">
                <h3 class="font-weight-bold mb-3">Keamanan Transaksi Anda</h3>
                <img height="27" class="mr-3 mb-3" src="img/verified-visa.webp" alt="Visa">
                <img height="27" class="mr-3 mb-3" src="img/master-card.webp" alt="MasterCard">
                <img height="27" class="mr-3 mb-3" src="img/geoTrust.webp" alt="GeoTrust">
                <br>
                <img height="27" class="mr-3 mb-3" id="jcb-secure" src="img/jcb-secure.webp" alt="jcb secure">
                <img height="27" class="mr-3 mb-3" src="img/superbrand.webp" alt="Superbrand" class="super-brand">
            </div>

            <div class="footer-middle-items d-inline col p-0">
                <h3 class="font-weight-bold mb-3">Penghargaan</h3>
                <img height="30" class="mr-3" src="img/iata.webp" alt="Iata" class="iata">
                <img height="30" class="mr-3" src="img/topBrand.webp" alt="TopBrand" class="top-brand">
                <img height="30" src="img/superbrand.webp" alt="Superbrand" class="super-brand">
            </div>

            <div class="footer-middle-items d-inline col p-0">
                <h3 class="font-weight-bold mb-3">Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-square mr-2 mb-2"></i></a>
                <a href="#"><i class="fab fa-twitter-square mr-2 mb-2"></i></a>
                <a href="#"><i class="fab fa-linkedin mr-2 mb-2"></i></a>
                <a href="#"><i class="fab fa-youtube mr-2 mb-2"></i></a>
                <br>
                <a href="#"><i class="fab fa-instagram mr-2 mb-2"></i></a>
                <a href="#"><i class="fab fa-tiktok mr-2 mb-2"></i></a>
            </div>

        </div>
        <!-- //footer midle -->

        <!-- footer bottom -->
        <div class="footer-buttom d-flex justify-content-center border-top pt-3">
            <p class="text-center"><img src="img/blibli.webp" alt="" width="145"> © 2011-2020 PT. Global Tiket
                Network. All Rights Reserved</p>
        </div>
        <!-- //footer bottom -->

    </div>
    <!-- //footer -->

    <!-- help center -->
    <div class="help-center-button">
        <div class="help-center-image-container d-flex justify-content-center align-items-center shadow">
            <img src="img/tman.webp" alt="whatsapp-tiket" width="42">
            <span class="help-center-text font-weight-bold">Pusat Bantuan</span>
        </div>
    </div>
    <!-- //help center -->


@endsection