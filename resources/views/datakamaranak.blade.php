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
        <h3 class="fw-bold">Data Kamar</h3>
        <div>
        </div>
      </div>

      <!-- Tabel -->
      <div class="card">
        <div class="card-body">
          <h5 class="text-center fw-bold mb-4">TABEL DATA KAMAR</h5>
          <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
              <thead class="table-light">
                <tr>
                  <th>No</th>
                  <th>Jenis Kamar</th>
                  <th>Harga</th>
                  <th>Perempuan/Laki-Laki</th>
                  <th>Status Kamar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Besar</td>
                  <td>Rp.600.000</td>
                  <td>Perempuan</td>
                  <td>Terisi</td>
                  <td><button class="btn btn-custom">Edit</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Sedang</td>
                  <td>Rp.500.000</td>
                  <td>Perempuan</td>
                  <td>Kosong</td>
                  <td><button class="btn btn-custom">Edit</button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Kecil</td>
                  <td>Rp.250.000</td>
                  <td>Perempuan</td>
                  <td>Terisi</td>
                  <td><button class="btn btn-custom">Edit</button></td>s
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