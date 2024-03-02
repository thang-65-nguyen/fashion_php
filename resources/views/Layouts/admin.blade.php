<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
         rel="stylesheet" crossorigin="anonymous" />
     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">         
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>Trang chủ admin</title>
</head>

<body>`
    <div class="row g-0 " style="margin-top: -25px">
<!-- sidebar -->




<div id="mySidenav" class="sidenav ">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
        <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none "><span class="fs-4">Trang Admin</span></a>
    
    

    <hr>
    <ul class="nav flex-column">
        <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white"><i class="bi bi-bar-chart-line"></i> Dashboard</a></li>
        <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white"><i class="bi bi-laptop"></i> Quản lí sản phẩm</a></li>
        <li><a href="{{ route('admin.user.index') }}" class="nav-link text-white"><i class="bi bi-person-circle"></i> Quản lí tài khoản</a></li>
        <li><a href="{{ route('admin.category.index') }}" class="nav-link text-white"><i class="bi bi-laptop"></i> Quản lí loại sản phẩm</a></li>
        {{-- <li><a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the homepage</a></li> --}}
    </ul> 
  </div>
        <div class="col-lg-12">
            <nav class="shadow d-flex justify-content-between">
                <span style="font-size:30px;cursor:pointer;margin-left: 20px" onclick="openNav()">&#9776;</span>    
               
                <div class="dropdown mt-2">
                    <span class="profile-font mt-3">Admin</span>
                    <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="{{ asset('/img/basic-tee.jpg') }}">
                    </a>    
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="{{route('home.index')}}">LogOut</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col content-grey ">
           
            <div class="m-3">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    {{-- <div class="copyright py-4 text-center text-white bg-dark">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Daniel Correa
                </a>
            </small>
        </div>
    </div> --}}
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>
