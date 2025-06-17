<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Penghuni</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #fff6ee; }
    .nav-link, .navbar-brand { color: white !important; }
    footer { background-color: #002244; color: white; padding: 20px 0; }
    .form-control, .form-select {
      background-color: #fddbbd;
      border: none;
    }
    .form-label {
      font-weight: 500;
    }
  </style>
</head>
<body>

<!-- Form Tambah -->
<div class="container mt-4">
  <h4 class="fw-bold mb-3">Tambah Data Penghuni</h4>
  <form>
    <div class="mb-3">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" placeholder="Laki-laki / Perempuan">
      </div>
      <div class="col-md-6">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control">
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Alamat</label>
      <input type="text" class="form-control" placeholder="Alamat lengkap">
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="email@example.com">
      </div>
      <div class="col-md-6">
        <label class="form-label">No. HP</label>
        <input type="tel" class="form-control" placeholder="08xxxxxx">
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Nomor Kamar</label>
      <input type="text" class="form-control" placeholder="Contoh: Kamar No.1">
    </div>

    <button type="submit" class="btn btn-warning">Tambah</button>
  </form>
</div>

</body>
</html>