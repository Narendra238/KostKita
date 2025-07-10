<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- <div class="container my-5">
  <div class="card shadow-sm">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="text-primary fw-bold mb-0">PROFIL ANAK KOST</h5>
      </div>

      <div class="row mb-3">
        <div class="col-md-3 fw-semibold">NIK</div>
        <div class="col-md-9">2200018269001122</div>
      </div>

      <div class="row mb-3">
        <div class="col-md-3 fw-semibold">Nama Lengkap</div>
        <div class="col-md-9">Ammara Desma Marzooqa</div>
      </div>

      <div class="row mb-3">
        <div class="col-md-3 fw-semibold">Nama Ortu</div>
        <div class="col-md-9">Rucika</div>
      </div>

      <div class="row mb-3">
        <div class="col-md-3 fw-semibold">KTP Asal</div>
        <div class="col-md-9">Palembang</div>
      </div>

      <div class="row mb-3">
        <div class="col-md-3 fw-semibold">No WA</div>
        <div class="col-md-9">6283812345391</div>
      </div>

      <div class="row mb-3">
        <div class="col-md-3 fw-semibold">No WA Ortu</div>
        <div class="col-md-9">6281212345391</div>
      </div>

      <div class="row mb-3">
        <div class="col-md-3 fw-semibold">Jenis Kelamin</div>
        <div class="col-md-9">P</div>
      </div>

      <div class="row mb-3">
        <div class="col-md-3 fw-semibold">Tanggal Masuk</div>
        <div class="col-md-9">2024-5-1</div>
      </div>

      <div class="row mb-3">
        <div class="col-md-3 fw-semibold">Durasi Kost</div>
        <div class="col-md-9">730</div>
      </div>

      <div class="row mb-3">
        <div class="col-md-3 fw-semibold">ID Kamar</div>
        <div class="col-md-9">R011</div>
      </div>
    </div>
  </div>
</div> -->
<div class="container mt-5">
    <div class="card">
        <div class="card-body position-relative">
            <h5 class="text-primary fw-bold d-inline-block">PROFIL ANAK KOST</h5>
            <a href="{{ url('/logout') }}" class="btn btn-danger position-absolute top-0 end-0 mt-2" style="margin-right: 10px;">Logout</a>
            <table class="table mt-3">
                <tr><th>NIK</th><td>{{ $anak->id }}</td></tr>
                <tr><th>Nama Lengkap</th><td>{{ $anak->namalengkap }}</td></tr>
                <tr><th>Nama Ortu</th><td>{{ $anak->namaortu }}</td></tr>
                <tr><th>KTP Asal</th><td>{{ $anak->asal }}</td></tr>
                <tr><th>No WA</th><td>{{ $anak->no_tlp }}</td></tr>
                <tr><th>No WA Ortu</th><td>{{ $anak->no_ortu }}</td></tr>
                <tr><th>Jenis Kelamin</th><td>{{ $anak->jenis_kelamin }}</td></tr>
                <tr><th>Tanggal Masuk</th><td>{{ $anak->tgl_masuk }}</td></tr>
                <tr><th>Durasi Kost</th><td>{{ $anak->durasi_kost }}</td></tr>
                <tr><th>Selesai Kost</th><td><strong>{{$selesai_kost }}</strong></td></tr>
                <tr><th>ID Kamar</th><td>{{ $anak->id_kmr }}</td></tr>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
