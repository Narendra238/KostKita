<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #fff6ee;
      }
      .btn-status {
        padding: 4px 10px;
        font-size: 0.9rem;
        border-radius: 4px;
        color: white;
        border: none;
      }
      .sudah {
        background-color: #28a745;
      }
      .belum {
        background-color: #dc3545;
      }
    </style>
  </head>
  <body>

    <div class="container mt-4">
      <!-- Header -->
      <h3 class="fw-bold">Pembayaran</h3>

      <!-- Tabel -->
      <div class="card mt-3">
        <div class="card-body">
          <h5 class="text-center fw-bold mb-4">TABEL DATA PEMBAYARAN</h5>

          <!-- Pencarian dan Jumlah Tampilkan -->
          <div class="d-flex justify-content-between mb-2">
            <div>
              <label>Menampilkan
                <select class="form-select d-inline w-auto">
                  <option>10</option>
                  <option>25</option>
                  <option>50</option>
                </select>
                entri
              </label>
            </div>
            <div>
              <input type="search" class="form-control" placeholder="Pencarian...">
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
              <thead class="table-light">
                <tr>
                  <th>No</th>
                  <th>Kode Kamar</th>
                  <th>Nomor Kamar</th>
                  <th>Konsumen/Penghuni Aktif</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>K0001</td>
                  <td>Kamar No.1</td>
                  <td>Pajo</td>
                  <td><span class="btn-status sudah">Sudah Bayar</span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>K0002</td>
                  <td>Kamar No.2</td>
                  <td>Sigit Dwi Prasetya</td>
                  <td><span class="btn-status sudah">Sudah Bayar</span></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>K0003</td>
                  <td>Kamar No.3</td>
                  <td>Yuvi Priyana</td>
                  <td><span class="btn-status sudah">Sudah Bayar</span></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>K0004</td>
                  <td>Kamar No.4</td>
                  <td>Dwi Setyo</td>
                  <td><span class="btn-status belum">Belum Bayar</span></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>K0005</td>
                  <td>Kamar No.5</td>
                  <td>Rizal Feizal</td>
                  <td><span class="btn-status belum">Belum Bayar</span></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Pagination Dummy -->
          <nav>
            <ul class="pagination justify-content-end mt-3">
              <li class="page-item disabled"><a class="page-link">Awal</a></li>
              <li class="page-item disabled"><a class="page-link">Sebelumnya</a></li>
              <li class="page-item active"><a class="page-link">1</a></li>
              <li class="page-item"><a class="page-link">Selanjutnya</a></li>
              <li class="page-item"><a class="page-link">Akhir</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>