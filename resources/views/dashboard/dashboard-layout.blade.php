<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Tiket Com</title>
        <link rel="stylesheet" href="{{ asset('dashboard/css/sb.css') }}">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-primary">
            <a class="navbar-brand text-light" href="{{ url('/admin') }}"><img src="{{ asset('img/logoWhite.webp') }}" alt="" width="100"></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars text-light"></i></button>

            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw text-light"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion bg-info text-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            {{-- user --}}
                            <a class="nav-link collapsed text-light" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon text-light"><i class="fas fa-user"></i></div>
                                User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link  text-light" href="{{ url('admin2') }}">Admin</a>
                                    <a class="nav-link  text-light" href="{{ url('costumer') }}">Costumer</a>
                                </nav>
                            </div>
                            {{-- //user --}}

                            {{-- banner --}}
                            <a class="nav-link collapsed text-light" href="#" data-toggle="collapse" data-target="#Banner" aria-expanded="false" aria-controls="Banner">
                                <div class="sb-nav-link-icon text-light"><i class="fas fa-images"></i></div>
                                Banner
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Banner" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link  text-light" href="{{ url('/admin/bannerWeb') }}">Desktop</a>
                                    <a class="nav-link  text-light" href="{{ url('/admin/bannerMobile') }}">Mobile</a>
                                </nav>
                            </div>
                            {{-- //banner --}}

                            <a class="nav-link text-light" href="/admin/promotion">
                                <div class="sb-nav-link-icon text-light"><i class="fas fa-gift text-light"></i></div>
                                Promosi
                            </a>
                            <a class="nav-link text-light" href="/admin/pesawat">
                                <div class="sb-nav-link-icon"><i class="fas fa-plane text-light"></i></div>
                                Pesawat
                            </a>
                            <a class="nav-link text-light" href="/admin/hotel">
                                <div class="sb-nav-link-icon"><i class="fas fa-hotel text-light"></i></div>
                                Hotel
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="conatiner-fluid m-3">
                        <div class="card bg-light shadow-sm">
                            <div class="card-body">
                               @yield('dashboard-content')
                            </div>
                          </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto border-top">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Copyright &copy; Mohamad Salman Farizi - 20180040048</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('dashboard/js/sb-scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('dashboard/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('dashboard/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('dashboard/assets/demo/datatables-demo.js') }}"></script>
    </body>
</html>
