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
        <a class="navbar-brand pl-2" href="{{ url('/') }}"><img src="img/logo.webp" width="182" height="40"></a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link" href="/pesawat">Tiket Pesawat</a>
                <a class="nav-item nav-link" href="#">Hotel</a>
                <a class="nav-item nav-link" href="#">To Do</a>
                <a class="nav-item nav-link" href="#">Tiket Kereta Api</a>
                <a class="nav-item nav-link" href="#">Sewa Mobil</a>
                <a class="nav-item nav-link" href="#">Even</a>
            </div>
            <div class="navbar-nav d-flex align-items-baseline">
                <a class="nav-item nav-link font-weight-bold text-dark" href="#">Elit Rewards</a>
                <a class="nav-item nav-link font-weight-bold text-dark" href="#">Cek Order</a>
                @guest
                <a class="nav-item nav-link font-weight-bold text-dark mr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="btn rounded-pill shadow font-weight-bold" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                @endif
                @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold text-capitalize" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->role == 'admin')                         
                                        <a href="{{ url('/admin') }}" class="dropdown-item">Dashboard</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                @endguest
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
        <div class="navbar-mobile-buttom d-flex justify-content-between border-top fixed-bottom pl-3 pr-3 pt-2 pb-1 bg-white">
            <div class="navbar-mobile-buttom-items d-flex flex-column">
                <a href="{{ url('/') }}" class="text-center text-dark">
                    <i class="fas fa-home">
                        <br>
                        <span class="text-center">Home</span>
                    </i>
                </a>
            </div>
            <div class="navbar-mobile-buttom-items d-flex flex-column">
                <a href="#" class="text-center text-dark">
                    <i class="fas fa-list">
                        <br>
                        <span class="text-center">My Order</span>
                    </i>
                </a>
            </div>
            <div class="navbar-mobile-buttom-items d-flex flex-column">
                <a href="#" class="text-center text-dark">
                    <i class="fas fa-star">
                        <br>
                        <span class="text-center">Rewards</span>
                    </i>
                </a>
            </div>
            <div class="navbar-mobile-buttom-items d-flex flex-column">
                <a href="{{ url('/AccountMobile') }}" class="text-center text-dark">
                    <i class="fas fa-user-circle">
                        <br>
                        <span class="text-center">Account</span>
                    </i>
                </a>
            </div>
        </div>
        <!-- //navbar button -->


            @yield('ContentMobile')


        <footer class="p-3 mb-5" style="background-color: #35405a;">
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