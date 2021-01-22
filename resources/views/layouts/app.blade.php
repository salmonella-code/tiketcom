<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mohamad Salman Farizi</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap"
        rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
</head>

<body>

    <!-- navbar covid -->
    <div class="d-flex justify-content-center align-items-center" id="covid-navbar">
        <p class="m-0">
            Cek info terbaru tentang
            <a href="https://www.tiket.com/info/tiket-clean">tiket CLEAN </a>dan
            <a href="https://www.tiket.com/tiketsafe">kebijakan pemesanan & perjalanan</a>
            selama COVID-19.
        </p>
    </div>
    <!-- //navbar covid -->

    <!-- navbar top -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar-top">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftarkan Hotel Anda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pusat Bntuan</a>
                </li>
            </ul>
            <div class="btn-group">
                <button type="button" class="btn btn-transparent btn-sm dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="img/bendera.jpg" alt="" srcset="" />
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item font-weight-bold" type="button">
                        <img src="img/bendera.jpg" alt="" srcset="" class="mr-2" />Bahasa
                        Indonesia
                    </button>
                    <button class="dropdown-item" type="button">
                        <img src="img/bendera amerika.png" alt="" srcset="" class="mr-2" />English
                    </button>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-transparent btn-sm dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    IDR
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item font-weight-bold" type="button">
                        IDR - Rupiah Indonesia
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- //navbar top -->

    <!-- navbar bottom -->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar-bottom">
        <a class="navbar-brand pl-2" href="#"><img src="img/logo.webp" width="182" height="40"></a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link" href="#">Tiket Pesawat</a>
                <a class="nav-item nav-link" href="#">Hotel</a>
                <a class="nav-item nav-link" href="#">To Do</a>
                <a class="nav-item nav-link" href="#">Tiket Kereta Api</a>
                <a class="nav-item nav-link" href="#">Sewa Mobil</a>
                <a class="nav-item nav-link" href="#">Even</a>
            </div>
            <div class="navbar-nav d-flex align-items-baseline">
                <a class="nav-item nav-link font-weight-bold text-dark" href="#">Elit Rewards</a>
                <a class="nav-item nav-link font-weight-bold text-dark" href="#">Cek Order</a>
                <a class="nav-item nav-link font-weight-bold text-dark mr-3" href="#">Login</a>
                <div class="btn rounded-pill shadow font-weight-bold">Daftar</div>
            </div>
        </div>
    </nav>
    <!-- //navbar bottom -->

    {{-- content --}}
    @yield('content')
    {{-- //content --}}


    <!-- mobile view -->
    <div class="mobile container-mobile">
        <!-- navbar top -->
        <div class="navbar-mobile-top fixed-top d-flex justify-content-between align-items-center p-3">
            <img src="img/logoWhite.webp" alt="" width="100" height="30">
            <button type="button" class="btn"><i class="fas fa-ellipsis-v text-white"></i></button>
        </div>
        <!-- //navbar top -->

        <!-- navbar button -->
        <div class="navbar-mobile-buttom d-flex justify-content-between border-top fixed-bottom pl-3 pr-3 bg-white">
            <div class="navbar-mobile-buttom-items d-flex flex-column">
                <button type="button" class="btn btn-light p-0"><i class="fas fa-home"></i></button>
                <span class="text-center">Home</span>
            </div>
            <div class="navbar-mobile-buttom-items d-flex flex-column">
                <button type="button" class="btn btn-light p-0"><i class="fas fa-list"></i></button>
                <span class="text-center">My Order</span>
            </div>
            <div class="navbar-mobile-buttom-items d-flex flex-column">
                <button type="button" class="btn btn-light p-0"><i class="fas fa-star"></i></button>
                <span class="text-center">Rewards</span>
            </div>
            <div class="navbar-mobile-buttom-items d-flex flex-column">
                <button type="button" class="btn btn-light p-0"><i class="fas fa-user-circle"></i></button>
                <span class="text-center">Account</span>
            </div>
        </div>
        <!-- //navbar button -->

        <!-- jumbotron carausel -->
        <div class="jumbotron-mobile jumbotron-fluid" id="jumbotron-mobile">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/m1.webp" alt="..." class="d-block mx-auto" width="320" height="200">
                    </div>
                    <div class="carousel-item">
                        <img src="img/m2.webp" alt="..." class="d-block mx-auto" width="320" height="200">
                    </div>
                    <div class="carousel-item">
                        <img src="img/m3.webp" alt="..." class="d-block mx-auto" width="320" height="200">
                    </div>
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
                    <p class="h6 font-weight-bold mb-0">Covid Test dengan Kimia Homecare24</p>
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
                    <div class="carousel-item p-5 active">
                        <img src="img/customer-service.webp" alt="..." class="d-block mx-auto" width="100" height="80">
                        <p class="h6 font-weight-bold text-center">24/7 Customer Care</p>
                        <p class="text-muted text-center"> <small>Melalui pelayanan 24/7 Customer Care, kami akan selalu ada buat kamu. Dapatkan bantuan untuk
                            pemesanan hotel dan tiketmu dengan pelayanan 24/7 Customer Care dari tiket.com.</small></p>
                    </div>
                    <div class="carousel-item p-5">
                        <img src="img/easy-ticket.webp" alt="..." class="d-block mx-auto" width="100" height="80">

                        <p class="h6 font-weight-bold text-center">Mudahnya Pesan Tiket dan Hotel</p>
                        <p class="text-muted text-center"><small>Pesan tiket sekaligus hotel dengan mudah dan cepat. Tidak perlu risau, hanya dengan satu
                            sentuhan jari, tiket dan hotel yang kamu butuhkan bisa didapatkan dengan mudah.</small></p>

                    </div>
                    <div class="carousel-item p-5">
                        <img src="img/elite-rewards.webp" alt="..." class="d-block mx-auto" width="100" height="80">

                        <p class="h6 font-weight-bold text-center">Benefit tiket Elite Rewards</p>
                        <p class="text-muted text-center"><small>Dapatkan benefit tiket Elite Rewards berupa tiket Points yang bisa kamu tukarkan dengan
                            diskon. Juga berbagai benefit eksklusif sesuai produk yang kamu beli!</small></p>
                    </div>
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

        <footer class="p-3 mb-4" style="background-color: #35405a;">
            <img src="img/logoWhite.webp" alt="" width="95" class="mb-2">
            <div class="border border-bottom border-secondary"></div>
            <p class="text-light pt-5 pb-0"><small>Download tiket.com App</small></p>
            <div class="d-flex">
                <img src="img/google-play-logo.webp" alt="" width="141" height="40" class="mr-3">
                <img src="img/app-store-logo.webp" alt="" width="141" height="40">
            </div>
            <div class="border border-bottom border-secondary mt-5"></div>
            <p class="text-light mb-0"><small>Follow Us</small></p>
            <div class="d-flex">
                <a href="#"><i class="fab fa-facebook-square mr-2 mb-2 text-white h4"></i></a>
                <a href="#"><i class="fab fa-twitter-square mr-2 mb-2 text-white h4"></i></a>
                <a href="#"><i class="fab fa-linkedin mr-2 mb-2 text-white h4"></i></a>
                <a href="#"><i class="fab fa-youtube mr-2 mb-2 text-white h4"></i></a>
            </div>
        </footer>

    </div>
    <!-- //mobile view -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>