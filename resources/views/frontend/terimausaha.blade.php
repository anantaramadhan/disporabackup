<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
@include('layouts.scripts')

<body>

  @include('layouts.header')
  @include('layouts.sidebar')

  <main id="main" class="main">

    <!-- Header: Judul + Search -->
    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap">
      <!-- Page Title -->
      <div class="pagetitle">
        <h1>Terima Usaha</h1>
      </div>

      <!-- Search Bar -->
      <div class="flex-grow-1 d-flex justify-content-center">
        <form class="d-flex w-50" method="GET" action="{{ route('terimausaha') }}">
          <div class="input-group w-100">
            <input type="text" class="form-control" name="query" placeholder="Cari Usaha" aria-label="Search">
            <button class="btn btn-primary" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Filter Button -->
    <div class="d-flex justify-content-end mb-4">
      <div class="dropdown me-2">
        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-funnel"></i> Filter
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Filter 1</a></li>
          <li><a class="dropdown-item" href="#">Filter 2</a></li>
        </ul>
      </div>
    </div>

    <!-- Data Table -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card recent-sales overflow-auto">
          <div class="card-body">
            <table class="table table-hover align-middle">
              <thead class="table-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Usaha</th>
                  <th scope="col">Pengelola</th>
                  <th scope="col">Nomor Telepon</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Sosial Media</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>PT Hus Creative</td>
                  <td>Hermawan</td>
                  <td>0965748398475</td>
                  <td>Ds Bajulan, Kecamatan Ngetos, Kab Nganjuk</td>
                  <td>Hus_Creative</td>
                  <td>
                    <button class="btn btn-sm btn-primary">Info</button>
                    <button class="btn btn-sm btn-danger">Tolak</button>
                    <button class="btn btn-sm btn-success">Terima</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Kriya.IN</td>
                  <td>Saputra w</td>
                  <td>9678454354355</td>
                  <td>Ds Bajulan, Kecamatan Ngetos, Kab Nganjuk</td>
                  <td>KriyaIn.Indo</td>
                  <td>
                    <button class="btn btn-sm btn-primary">Info</button>
                    <button class="btn btn-sm btn-danger">Tolak</button>
                    <button class="btn btn-sm btn-success">Terima</button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>KehidupanKu</td>
                  <td>Wati Pur</td>
                  <td>0897656545767</td>
                  <td>Ds Bajulan, Kecamatan Ngetos, Kab Nganjuk</td>
                  <td>KehidupanKU_24</td>
                  <td>
                    <button class="btn btn-sm btn-primary">Info</button>
                    <button class="btn btn-sm btn-danger">Tolak</button>
                    <button class="btn btn-sm btn-success">Terima</button>
                  </td>
                </tr>
              </tbody>
            </table>

            <!-- Pagination (Diletakkan setelah tabel) -->
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-end mt-4">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item"><a class="page-link" href="#">11</a></li>
              </ul>
            </nav>

          </div>
        </div>
      </div>
    </div>

  </main>

</body>

</html>
