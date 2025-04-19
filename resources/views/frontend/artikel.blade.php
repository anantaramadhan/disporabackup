<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
@include('layouts.scripts')

<body>
    
@include('layouts.header')
@include('layouts.sidebar')

<main id="main" class="main">
  <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap">
    <!-- Page Title di kiri -->
    <div class="pagetitle">
      <h1>Artikel</h1>
    </div>

    <!-- Search di tengah -->
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

    <!-- Spacer kanan (biar sejajar secara visual) -->
    <div style="width: 100px;"></div>
  </div>

  <!-- Buttons Filter dan Tambah (Sejajar di bawah search) -->
  <div class="d-flex justify-content-left mb-4 w-100">
    <button class="btn btn-outline-secondary btn-sm me-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="bi bi-funnel"></i> Filter
    </button>
    <!-- Dropdown filter (optional) -->
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Filter 1</a></li>
      <li><a class="dropdown-item" href="#">Filter 2</a></li>
    </ul>

    <!-- Ganti route 'artikel.create' menjadi 'artikel.tambah' -->
    <a href="{{ route('artikel.tambah') }}" class="btn btn-success btn-sm">
      <i class="bi bi-plus-lg"></i> Tambah
    </a>
  </div>

  <!-- Venue Cards Section (1 Baris, 4 Venue) -->
  <div class="row">
    <!-- Venue Card 1 -->
    <div class="col-md-3 mb-4">
      <div class="card">
        <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Gambar Artikel" style="max-height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 1.1rem;">Judul Artikel 1</h5>
          <p class="card-text" style="font-size: 0.9rem;">Keterangan artikel singkat 1.</p>
          <div class="d-flex justify-content-start">
            <a href="{{ route('artikel.tambah') }}" class="btn btn-success btn-sm">
              <i class="bi bi-plus-lg"></i> Tambah
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Venue Card 1 -->

    <!-- Venue Card 2 -->
    <div class="col-md-3 mb-4">
      <div class="card">
        <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Gambar Artikel" style="max-height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 1.1rem;">Judul Artikel 2</h5>
          <p class="card-text" style="font-size: 0.9rem;">Keterangan artikel singkat 2.</p>
          <div class="d-flex justify-content-start">
            <a href="{{ route('artikel.tambah') }}" class="btn btn-success btn-sm">
              <i class="bi bi-plus-lg"></i> Tambah
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Venue Card 2 -->

    <!-- Venue Card 3 -->
    <div class="col-md-3 mb-4">
      <div class="card">
        <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Gambar Artikel" style="max-height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 1.1rem;">Judul Artikel 3</h5>
          <p class="card-text" style="font-size: 0.9rem;">Keterangan artikel singkat 3.</p>
          <div class="d-flex justify-content-start">
            <a href="{{ route('artikel.tambah') }}" class="btn btn-success btn-sm">
              <i class="bi bi-plus-lg"></i> Tambah
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Venue Card 3 -->

    <!-- Venue Card 4 -->
    <div class="col-md-3 mb-4">
      <div class="card">
        <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Gambar Artikel" style="max-height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 1.1rem;">Judul Artikel 4</h5>
          <p class="card-text" style="font-size: 0.9rem;">Keterangan artikel singkat 4.</p>
          <div class="d-flex justify-content-start">
            <a href="{{ route('artikel.tambah') }}" class="btn btn-success btn-sm">
              <i class="bi bi-plus-lg"></i> Tambah
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Venue Card 4 -->



    <!-- Venue Card 5 -->
    <div class="col-md-3 mb-4">
      <div class="card">
        <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Gambar Artikel" style="max-height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 1.1rem;">Judul Artikel 5</h5>
          <p class="card-text" style="font-size: 0.9rem;">Keterangan artikel singkat 5.</p>
          <div class="d-flex justify-content-start">
            <a href="{{ route('artikel.tambah') }}" class="btn btn-success btn-sm">
              <i class="bi bi-plus-lg"></i> Tambah
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Venue Card 4 -->

  </div>
  <!-- End Venue Cards Section -->

</main>

@include('layouts.scripts')
</body>
</html>
