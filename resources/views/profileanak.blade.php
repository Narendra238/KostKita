<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Anak Kost</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 mb-5"><!-- tambahkan mb-5 agar ada jarak bawah -->
    <div class="card">
        <div class="card-body position-relative">
            <h5 class="text-primary fw-bold d-inline-block">PROFIL ANAK KOST</h5>
            <a href="/" class="position-absolute top-0 end-0 mt-2 me-3" style="color: orange; font-weight: bold; text-decoration: none; font-size: 1.1rem;">HOME</a>
            <table class="table mt-3">
                <tr><th>NIK</th><td>{{ $anak->id }}</td></tr>
                <tr><th>Nama Lengkap</th><td>{{ $anak->namalengkap }}</td></tr>
                <tr><th>Nama Ortu</th><td>{{ $anak->namaortu }}</td></tr>
                <tr><th>KTP Asal</th><td>{{ $anak->asal }}</td></tr>
                <tr><th>No WA</th><td>{{ $anak->no_tlp }}</td></tr>
                <tr><th>No WA Ortu</th><td>{{ $anak->no_ortu }}</td></tr>
                <tr><th>Jenis Kelamin</th><td>{{ $anak->jenis_kelamin }}</td></tr>
                <tr><th>Tanggal Masuk</th><td>{{ $anak->tgl_masuk }}</td></tr>
                <tr><th>Durasi Kost</th><td>{{ $anak->durasi_kost }} Hari</td></tr>
                <tr><th>Selesai Kost</th><td>{{$selesai_kost }}</td></tr>
                <tr><th>ID Kamar</th><td>{{ $anak->id_kmr }}</td></tr>
            </table>
        </div>
    </div>
</div>
    <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn pt-5" data-wow-delay="0.1s" style="position:relative; z-index:1;">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
