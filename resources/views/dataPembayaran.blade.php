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

    <style>
      .text-success { color: green; font-weight: bold; }
      .text-danger { color: red; font-weight: bold; }
    </style>
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
                        <a href="#" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary">kost KITA</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        </div>
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

        <div class="container mt-4">
      <!-- Header -->
      <h3 class="fw-bold">Pembayaran</h3>

      <!-- Tabel -->
      <div class="card mt-3">
        <div class="card-body">
          <h5 class="text-center fw-bold mb-4">TABEL DATA PEMBAYARAN</h5>
          <div class="table-responsive">
            <table class="table table-bordered align-middle text-center table-sm small">
                <thead class="table-light">
                  <tr>
                    <th>No</th>
                    <th>Kode Kamar</th>
                    <th>Penghuni Aktif</th>
                    <th>Status Bayar</th>
                    <th>Tanggal Bayar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($kamars as $index => $kamar)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $kamar->id_kmr }}</td>
                    <td>{{ $kamar->penghuniAktif->namalengkap ?? '-' }}</td>
                    <td>
                      @if($kamar->penghuniAktif)
                        <input type="checkbox" class="status-bayar" data-id="{{ $kamar->penghuniAktif->id }}"
                          {{ $kamar->penghuniAktif->status_bayar ? 'checked' : '' }}>
                      @else
                        <span class="text-muted">-</span>
                      @endif
                    </td>
                    <td>
                      @if($kamar->penghuniAktif?->tanggal_bayar)
                        {{ \Carbon\Carbon::parse($kamar->penghuniAktif->tanggal_bayar)->timezone('Asia/Jakarta')->format('d-m-Y H:i') }}
                      @else
                        <span class="text-muted">-</span>
                      @endif
                    </td>

                  </tr>
                  @endforeach
                </tbody>
            </table>

          </div>

          <!-- Pagination Dummy -->
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
    <!-- Custom JavaScript for status bayar -->
    <script>
      document.querySelectorAll('.status-bayar').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
          const id = this.dataset.id;
          const status = this.checked;

          fetch('{{ route('updateStatusBayar') }}', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
              id: id,
              status_bayar: status
            })
          })
          .then(response => response.json())
          .then(data => {
            alert('Status pembayaran berhasil diupdate!');
            location.reload(); // kalau mau reload tabel
          })
          .catch(error => console.error('Gagal:', error));
        });
      });
    </script>

    <!-- Template Javascript -->
   <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>