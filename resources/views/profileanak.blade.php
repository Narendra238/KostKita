<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Anak Kost</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
