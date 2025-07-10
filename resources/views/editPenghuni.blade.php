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
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary">Kost KITA</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="#" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary">kost KITA</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="d-flex justify-content-end w-100 align-items-center">
                          <a href="/dashboardadmin" class="fw-bold text-decoration-none" style="color: #FEA116; font-size: 2rem;">Dashboard Admin</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Form Edit -->
<div class="container mt-4">
  <h4 class="fw-bold mb-3">Edit Data Penghuni</h4>
  <form action="{{ url('/tambahpenghuni') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">NIK</label>
      <input type="text" class="form-control" name="id" placeholder="Masukkan NIK" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" name="namalengkap" placeholder="Masukkan nama lengkap" required>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" name="jenis_kelamin" placeholder="L/P" required>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Nomor Telpon</label>
      <input type="text" class="form-control" name="no_tlp" placeholder="Masukkan Nomor Telpon" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Asal Daerah</label>
      <input type="text" class="form-control" name="asal" placeholder="Asal Daerah" required>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label class="form-label">Nama Ortu</label>
        <input type="text" class="form-control" name="namaortu" placeholder="Nama Ortu" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">No. HP Ortu</label>
        <input type="text" class="form-control" name="no_ortu" placeholder="08xxxxxx" required>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Nomor Kamar</label>
      <input type="text" class="form-control" name="id_kmr" placeholder="Contoh: R002" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Tanggal Masuk</label>
      <input type="date" class="form-control" name="tgl_masuk" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Durasi Kost (hari)</label>
      <input type="number" class="form-control" name="durasi_kost" placeholder="Contoh: 180" required>
    </div>

    <button type="submit" class="btn btn-warning">Update</button>
  </form>
</div>

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