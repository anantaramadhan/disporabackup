<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">

    <!-- Header: Judul + Search -->
    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap">
      
      <!-- Page Title -->
      <div class="pagetitle">
        <h1>Artikel</h1>
      </div>

      <!-- Search Bar -->
      <div class="flex-grow-1 d-flex justify-content-center">
        <form class="d-flex w-50" method="GET" action="{{ route('artikel') }}">
          <div class="input-group w-100">
            <input type="text" class="form-control" name="query" placeholder="Search artikel..." aria-label="Search">
            <button class="btn btn-primary" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
      </div>

      <!-- Spacer (Untuk keseimbangan visual kanan) -->
      <div style="width: 100px;"></div>

    </div>

    <!-- Filter dan Tombol Tambah di sebelah kanan -->
    <div class="d-flex justify-content-end mb-4 w-100">
      <div class="dropdown me-2">
        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-funnel"></i> Filter
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Filter 1</a></li>
          <li><a class="dropdown-item" href="#">Filter 2</a></li>
        </ul>
      </div>

      <a href="{{ route('artikel.tambah') }}" class="btn btn-success btn-sm">
        <i class="bi bi-plus-lg"></i> Tambah
      </a>
    </div>

    <!-- Artikel Cards -->
    <div class="row">
      
      <!-- Artikel Card -->
      @for ($i = 1; $i <= 4; $i++)
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="assets/img/logoekraf.png" class="card-img-top" alt="Gambar Artikel" style="max-height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 1.1rem;">Judul Artikel {{ $i }}</h5>
            <p class="card-text" style="font-size: 0.9rem;">Keterangan artikel singkat {{ $i }}.</p>
            <div class="d-flex justify-content-start gap-2">
              <a href="{{ route('artikel.edit') }}" class="btn btn-primary btn-sm">
                <i class="bi bi-pencil-square"></i> Edit
              </a>
              <button type="button" class="btn btn-danger btn-sm" onclick="confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                <i class="bi bi-trash"></i> Hapus
              </button>
            </div>
          </div>
        </div>
      </div>
      @endfor
      <!-- End Artikel Card -->

    </div>
    <!-- End Artikel Cards -->

  </main>
</body>
</html>
