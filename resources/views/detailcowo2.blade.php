<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kost - KostKITA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/animate/animate.min.css')}}">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
                <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="/" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary">Kost KITA</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="/" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary">kost KITA</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="/" class="nav-item nav-link active">Home</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Room</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="/roomcewe" class="dropdown-item">Perempuan</a>
                                        <a href="/roomcowo" class="dropdown-item">Laki - laki</a>
                                    </div>
                                </div>
                                <a href="/about" class="nav-item nav-link">About Us</a>
                                <a href="/contact" class="nav-item nav-link">Contact</a>
                            </div>
                            </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('assets/img/about.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Kamar Laki-Laki</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Kamar Mandi Dalam</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Size Medium Kamar Mandi Dalam</h6>
                    <h1 class="mb-5">Explore Kamar <span class="text-primary text-uppercase">Laki-laki</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('assets/img/CowoKamarMandiDalam.jpg')}}" alt="">
                            </div>
                            <div class="p-4 mt-2">
                            </div>
                        </div><br>
                        <h3>Kamar Laki-Laki Size Medium</h3>
                        <p class="text-body mb-3">Tipe kamar ini terdiri dari 11 unit kamar tanpa perabotan (kosongan).</p>
                        <p>Harga dengan tipe ini Rp.650.000,00/Bulan.</p>
                    </div><br><br><br>
                    <div class="col-md-4 bg-white pt-3">
                          <h2 class="font-weight-bold mb-2">Fasilitas</h2>
                          <ul>
                                <li>Luas kamar (3 x 3.5).</li>
                                <li>Kamar mandi Dalam.</li>
                                <li>Listrik.</li>
                                <li>Jemuran.</li>
                                <li>Lahan Parkir.</li>
                                <li>Sampah.</li>
                                <li>Exclude WIFI (+ Rp50.000,00).</li>
                          </ul>
                        </div>
                </div>
            </div>
            <!-- Info Kamar Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-8">
                        <div class="card shadow-sm border-primary mb-4">
                            <div class="card-body d-flex justify-content-around align-items-center">
                                <div class="text-center">
                                    <i class="fa fa-bed fa-2x text-primary mb-2"></i>
                                    <h5 class="mb-1">Total Kamar</h5>
                                    <h3 class="fw-bold text-primary">{{ $total }}</h3>
                                </div>
                                <div class="text-center">
                                    <i class="fa fa-user-check fa-2x text-success mb-2"></i>
                                    <h5 class="mb-1">Kamar Terisi</h5>
                                    <h3 class="fw-bold text-success">{{ $terisi }}</h3>
                                </div>
                                <div class="text-center">
                                    <i class="fa fa-door-open fa-2x text-info mb-2"></i>
                                    <h5 class="mb-1">Kamar Ready</h5>
                                    <h3 class="fw-bold text-info">{{ $ready }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info Kamar End -->
        </div><br><br><br>
        <!-- Room End -->        

        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="/"><h1 class="text-white mb-3">Kost KITA</h1></a>
                           
                        </div><br><br>
                            <p>Solusi Hunian Nyaman dan Praktis</p>
                            <p>Proses sewa mudah, tanpa ribet. <br>Lingkungan bersih dan aman. <br>Tanpa drama, langsung tinggal.</p>
                            <p>Kost rasa rumah sendiri? kostKITA aja!</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>RT 18 RW 6, Desa Demangan, Kecamatan Godokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="https://wa.me/62895417305050" target = _blank>+62 895-4173-05050</a></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>kostKITA@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Kost KITA</a>, All Right Reserved, 2025 
							Designed By <a class="border-bottom" href="#">Ultra Tech Company</a>
                            <br>Distributed By: <a class="border-bottom" href="#">Ultra Tech Comp.</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="/">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
   <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>