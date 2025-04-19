<!DOCTYPE html>
<html lang="en">

@include('layouts.head')


<body>

  @include('layouts.header')
  @include('layouts.sidebar')

  <main id="main" class="main">

    <!-- Page Title -->
    <div class="pagetitle mb-4">
      <h1>Tambah Artikel</h1>
    </div>

    <!-- Form Tambah Artikel -->
    <div class="card">
      <div class="card-body">
        <form method="POST" action="#" enctype="multipart/form-data">
          <!-- Judul Artikel -->
          <div class="mb-3">
            <label for="judul" class="form-label">Judul Artikel</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul artikel" required>
          </div>

          <!-- Deskripsi -->
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Tulis deskripsi artikel..." required></textarea>
          </div>

          <!-- Tanggal Dibuat -->
          <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Dibuat</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
          </div>

          <!-- Upload Foto -->
          <div class="mb-3">
            <label for="foto" class="form-label">Upload Foto</label>
            <input class="form-control" type="file" id="foto" name="foto" accept="image/*" required>
          </div>

          <!-- Tombol Simpan -->
          <button type="submit" class="btn btn-success">
            <i class="bi bi-check-lg"></i> Simpan Artikel
          </button>
        </form>
      </div>
    </div>

  </main>

  @include('layouts.scripts')

</body>
</html>
