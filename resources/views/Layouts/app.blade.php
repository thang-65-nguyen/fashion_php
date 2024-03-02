<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>See Ever</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/contact.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="/" class="text-decoration-none" style="font-family: Brush Script MT">
                    <span class="h3 text-uppercase px-2">See</span>
                    <span class="h3 text-uppercase px-2 ml-n1">Ever</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="{{ route('product.search')}}" type="get">
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="query" />
                                <span class="input-group-text bg-transparent" style="color: #ffc1c1">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0 text-uppercase">Hotline</p>
                <h5 class="m-0">+0285 555 555</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;background-color: #ffc1c1">
                    <h6 class="text-white m-0"><i class="fa fa-bars mr-2"></i>Danh mục sản phẩm</h6>
                    <i class="fa fa-angle-down text-white"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tops <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Áo thun</a>
                                <a href="" class="dropdown-item">Áo sơ mi</a>
                                <a href="" class="dropdown-item">Đầm</a>
                                <a href="" class="dropdown-item">Hoodie</a>
                                <a href="" class="dropdown-item">Cardigan</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Bottoms | Skirt | Pants <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Chân váy</a>
                                <a href="" class="dropdown-item">Quần dài</a>
                                <a href="" class="dropdown-item">Quần jeans</a>
                                <a href="" class="dropdown-item">Quần đùi</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sets <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Individual Sets</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Other<i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Túi sách</a>
                                
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg  navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('home.index') }}" class="nav-item nav-link ">Home</a>
                            <a href="{{route('product.index')}}" class="nav-item nav-link">Shop</a>
                            <a href="{{ route('home.about') }}" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto d-none d-lg-block">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16" style="color: #ffc1c1;font-weight: 700">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                    </svg>
                                </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                @guest
                                    <a class="nav-link-a active" href="{{ route('login') }}">Login</a>
                                    <a class="nav-link-a active" href="{{ route('register') }}">Register</a>
                                    @csrf
                                @else
                                
                                    <form id="logout" action="{{ route('logout') }}" method="POST">
                                        <a role="button" class="nav-link active"
                                            onclick="document.getElementById('logout').submit();">
                                            Logout
                                        </a>
                                        @csrf
                                    </form>
                                    <a href="{{route('myaccount.orders')}}" class=" nav-link-a nav-item">My Orders</a>
                                @endguest
                                </div>
                            </div>
                            <a href="{{route('cart.index')}}" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart" style="color: #ffc1c1"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Nơi liên hệ</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt mr-3" style="color: #ffc1c1"></i>Công viên Phần mềm Quang Trung, Tòa nhà SaigonTech, Lô 14 Đường Số 5, Tân Chánh Hiệp, Quận 12, 700000, Việt Nam</p>
                <p class="mb-2"><i class="fa fa-envelope  mr-3" style="color: #ffc1c1"></i>SeeEver@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt  mr-3" style="color: #ffc1c1"></i>+012 555 555</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#" style="background-color: #ffc1c1"><i class="fab fa-twitter" ></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#" style="background-color: #ffc1c1"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#" style="background-color: #ffc1c1"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#" style="background-color: #ffc1c1"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a style="color: #ffc1c1" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a style="color: #ffc1c1" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('/js/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('/js/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>