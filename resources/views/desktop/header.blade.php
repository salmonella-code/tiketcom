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
                <img src="{{ asset('img/bendera.jpg') }}" alt="" srcset="" />
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item font-weight-bold" type="button">
                    <img src="{{ asset('img/bendera.jpg') }}" alt="" srcset="" class="mr-2" />Bahasa
                    Indonesia
                </button>
                <button class="dropdown-item" type="button">
                    <img src="{{ asset('img/bendera amerika.png') }}" alt="" srcset="" class="mr-2" />English
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
    <a class="navbar-brand pl-2" href="#"><img src="{{ asset('img/logo.webp') }}" width="182" height="40"></a>
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