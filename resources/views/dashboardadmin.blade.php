<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kost - KostKITA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Fonts -->
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

    <style>
        .room-box {
            background-color: #fca65f;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            color: white;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 150px;
        }

        .room-box i {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .room-box h5 {
            margin-bottom: 5px;
        }

        .room-box h3 {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="/" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary">Kost KITA</h1>
                    </a>
                </div>
                <div class="col-lg-9 d-flex justify-content-end align-items-center pe-4" style="height: 100px;">
                    <a href="{{ url('/buatakun') }}" class="btn btn-primary me-2" style="margin-top: 10px;">Buat Akun</a>
                    <a href="{{ url('/lihatakun') }}" class="btn btn-info me-2" style="margin-top: 10px; color: white;">Lihat Akun</a>
                    <a href="{{ url('/logout') }}" class="btn btn-danger" style="margin-top: 10px;">Logout</a>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{asset('assets/img/dashboard.jpg')}}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="section-title text-white text-uppercase mb-3 animated slideInDown">KostKITA</h1>
                            </div>
                            <!-- Room Summary Start -->
                            <div class="container pb-5">
                                <div class="row justify-content-center g-4">
                                    <!-- Anak Kost -->
                                    <div class="col-md-4">
                                        <a href="{{ url('/dataPenghuni') }}" style="text-decoration:none;">
                                            <div class="room-box shadow" style="cursor:pointer;">
                                                <i class="fas fa-bed"></i>
                                                <h5>Anak Kost</h5>
                                                <h3 class="fw-bold mb-0"></h3>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4">
                                        <a href="{{ url('/dataPembayaran') }}" style="text-decoration:none;">
                                            <div class="room-box shadow" style="cursor:pointer;">
                                                <i class="fas fa-bed"></i>
                                                <h5>Data Pembayaran</h5>
                                                <h3 class="fw-bold mb-0"></h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ url('/datakamaranak') }}" style="text-decoration:none;">
                                            <div class="room-box shadow" style="cursor:pointer;">
                                                <i class="fas fa-bed"></i>
                                                <h5>Data Kamar</h5>
                                                <h6 class="mb-1">Kosong Kamar Cewe: <span class="fw-bold">{{ $ceweKosong ?? 0 }}</span></h6>
                                                <h6 class="mb-1">Kosong Kamar Cowo: <span class="fw-bold">{{ $cowoKosong ?? 0 }}</span></h6>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <!-- Room Summary End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- JS Libraries -->
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
        <script src="{{asset('assets/js/main.js')}}"></script>
    </div>
</body>

</html>
