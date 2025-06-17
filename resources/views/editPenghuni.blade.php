<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Penghuni</title>
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

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: #002244;">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Kost Kita</a>
    <div class="collapse navbar-collapse">
    </div>
  </div>
</nav>

<!-- Form Edit -->
<div class="container mt-4">
  <h4 class="fw-bold mb-3">Edit Data Penghuni</h4>
  <form>
    <div class="row mb-3">
      <div class="col-md-6">
        <label class="form-label">Nomor Kamar</label>
        <input type="text" class="form-control" value="Kamar No.3">
      </div>
      <div class="col-md-6">
        <label class="form-label">Durasi</label>
        <select class="form-select">
          <option>1 Bulan</option>
          <option selected>3 Bulan</option>
          <option>6 Bulan</option>
        </select>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">No. HP</label>
      <input type="tel" class="form-control" value="08123456789">
    </div>

    <button type="submit" class="btn btn-warning">Edit</button>
  </form>
</div>

</body>
</html>
