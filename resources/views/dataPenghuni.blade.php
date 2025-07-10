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
                    <a href="#" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary">Kost KITA</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary">kost KITA</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                           
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

            </div>
        </div>
        <!-- Page Header End -->

        <div class="container mt-4">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Data Penghuni</h3>
        <div class="ms-auto">
          <a href="/dashboardadmin" class="btn btn-custom px-4 py-2"><strong>Dashboard Admin</strong></a>
        </div>
        <div>
          <a href="/tambahpenghuni" class="btn btn-custom me-2"><strong>Tambah</strong></a>
        </div>
      </div>

      <!-- Tabel -->
      <div class="card">
        <div class="card-body">
          <h5 class="text-center fw-bold mb-4">TABEL DATA PENGHUNI</h5>
          <div class="table-responsive">
            <table class="table table-bordered text-center align-middle table-sm small">
              <thead class="table-light">
                <tr>
                  <th>ID</th>
                  <th>Nama Lengkap</th>
                  <th>Nama Orang Tua</th>
                  <th>Asal</th>
                  <th>No.Telepon</th>
                  <th>No.Ortu</th>
                  <th>JK</th>
                  <th>Tanggal Masuk</th>
                  <th>Durasi</th>
                  <th>Tanggal Selesai</th>
                  <th>ID Kamar</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>
                @foreach($penghuni as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->namalengkap }}</td>
                  <td>{{ $item->namaortu }}</td>
                  <td>{{ $item->asal }}</td>
                  <td>{{ $item->no_tlp }}</td>
                  <td>{{ $item->no_ortu }}</td>
                  <td>{{ $item->jenis_kelamin }}</td>
                  <td>{{ $item->tgl_masuk }}</td>
                  <td>{{ $item->durasi_kost }}</td>
                  <td class="fw-bold">
                      {{ \Carbon\Carbon::parse($item->tgl_masuk)->addDays($item->durasi_kost)->format('Y-m-d') }}
                  </td>
                  <td>{{ $item->id_kmr }}</td>
                  <td>
                    <a href="/editPenghuni/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="/hapusPenghuni/{{ $item->id }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

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