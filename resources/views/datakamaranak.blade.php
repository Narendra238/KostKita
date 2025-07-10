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
        <h3 class="fw-bold mb-0">Data Kamar</h3>
        <div class="ms-auto">
          <a href="/dashboardadmin" class="btn btn-custom px-4 py-2"><strong>Dashboard Admin</strong></a>
        </div>
      </div>

      <!-- Tabel -->
      <div class="card">
        <div class="card-body">
          <h5 class="text-center fw-bold mb-4">TABEL DATA KAMAR</h5>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID Kamar</th>
                  <th scope="col">Jenis Kamar</th>
                  <th scope="col">Dimensi</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($kamars as $kamar)
                <tr>
                  <td>{{ $kamar->id_kmr }}</td>
                  <td>{{ $kamar->jenis_kamar }}</td>
                  <td>{{ $kamar->dimensi }}</td>
                  <td>Rp. {{ number_format($kamar->harga, 0, ',', '.') }}</td>
                  <td>
                    @if($kamar->profileUsersKost->count() > 0)
                      <span class="badge bg-success">Terisi</span>
                    @else
                      <span class="badge bg-secondary">Kosong</span>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>