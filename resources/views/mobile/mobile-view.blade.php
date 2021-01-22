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

    @yield('mobile-content')

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