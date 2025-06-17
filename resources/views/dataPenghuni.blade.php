<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Penghuni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #fff6ee;
      }
      .btn-custom {
        background-color: #fcae6f;
        border: none;
        color: white;
      }
    </style>
  </head>
  <body>

    <div class="container mt-4">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Data Penghuni</h3>
        <div>
          <button class="btn btn-custom me-2">Tambah</button>
          <button class="btn btn-custom">Edit</button>
        </div>
      </div>

      <!-- Tabel -->
      <div class="card">
        <div class="card-body">
          <h5 class="text-center fw-bold mb-4">TABEL DATA PENGHUNI</h5>
          <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
              <thead class="table-light">
                <tr>
                  <th>ID</th>
                  <th>Nama Lengkap</th>
                  <th>Nama Orang Tua</th>
                  <th>Asal</th>
                  <th>No. Telepon</th>
                  <th>No. Ortu</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Masuk</th>
                  <th>Durasi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>001</td>
                  <td>Andi Wijaya</td>
                  <td>Budi Wijaya</td>
                  <td>Bandung</td>
                  <td>081234567890</td>
                  <td>081987654321</td>
                  <td>Laki-laki</td>
                  <td>2025-01-10</td>
                  <td>6 Bulan</td>
                </tr>
                <tr>
                  <td>002</td>
                  <td>Siti Aminah</td>
                  <td>Samsul Huda</td>
                  <td>Surabaya</td>
                  <td>082112345678</td>
                  <td>082198765432</td>
                  <td>Perempuan</td>
                  <td>2025-02-15</td>
                  <td>1 Tahun</td>
                </tr>
                <tr>
                  <td>003</td>
                  <td>Rama Dwi</td>
                  <td>Wahyudi</td>
                  <td>Yogyakarta</td>
                  <td>085611223344</td>
                  <td>085699887766</td>
                  <td>Laki-laki</td>
                  <td>2025-03-20</td>
                  <td>3 Bulan</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
