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

        <!-- Header Start -->
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
                            <h1 class="m-0 text-primary">Kost KITA</h1>
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
                                <a href="/login" class="nav-item nav-link">Login</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('assets/img/ContactAset.png')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Hubungi Kami</h6>
                    <h1 class="mb-5"><span class="text-primary text-uppercase">Hubungi</span> Disini !</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                    </div>
                    <div class="container">
                    <div class="row">
                        <!-- Kolom Map -->
                        <div class="col-md-8 wow fadeIn" data-wow-delay="0.1s">
                          <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5528.703229459831!2d110.38774950196574!3d-7.7875286908345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59ed0c8938a1%3A0xb047846ec1455a5d!2sKos%20KITA%20Putra%20dan%20kos%20putri%20(Bukan%20Kos%20Campur)!5e0!3m2!1sid!2sid!4v1749975590022!5m2!1sid!2sid"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                          </iframe>
                        </div>

                        <!-- Kolom Teks -->
                        <div class="col-md-4 bg-white pt-3">
                          <h2 class="font-weight-bold mb-2">Lokasi Strategis, Akses Mudah!</h2>
                          <h4 class="font-weight-bold mb-2">Tinggal di Sini, Ke Mana-Mana Dekat!</h4><br>
                          <p>Fasilitas Umum:</p>
                            8 menit menuju Balaikota Yogyakarta<br>
                            6 menit menuju Stadion Mandala Krida<br>
                            6 menit menuju Plaza Ambarukmo Yogyakarta<br>
                            2 menit menuju Lippo Plaza Yogyakarta<br>
                            15 menit menuju Pakuwon Mall Yogyakarta
                          <br>
                          <p>
                            <p>Kampus:</p>
                            3  menit menuju UIN Sunan Kalijaga<br>
                            8  menit menuju UNY<br>
                            6  menit menuju UAD 1<br>
                            16 menit menuju UAD 2<br>
                            14 menit menuju UAD 3<br>
                            18 menit menuju UAD 4<br>
                            12 menit menuju UGM<br>
                            16 menit menuju UPN Veteran Pusat<br>
                            11 menit menuju UPN Veteran Babarsari<br>
                          </p>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="row g-2">
                                    <div class="contact-warp w-100 p-md-5 p-4">
                                        <h3 class="mb-4">Kirim Pesan Yuk!</h3>
                                        <h4>Kenalan lebih dekat dengan hubungi kami pada kontak WhatsApp dibawah ini :</h4>
                                        <a href="https://wa.me/62895417305050" target = _blank><i class="fab fa-whatsapp"></i> +62 8954 1730 5050</a>
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
        <!-- Contact End -->
        

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
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
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