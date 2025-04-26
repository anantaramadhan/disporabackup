<!DOCTYPE html>
<html lang="en">
  

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">

    <!-- Page Title -->
    <div class="pagetitle mb-4">
      <h1>Edit Artikel</h1>
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

          <!-- Tombol Aksi -->
          <div class="d-flex justify-content-between">
            <!-- Tombol Kembali -->
            <a href="/artikel" class="btn btn-secondary">
              <i class="bi bi-arrow-left"></i> Kembali
            </a>

            <!-- Tombol Batal dan Simpan -->
            <div>
              <button type="reset" class="btn btn-danger me-2">
                <i class="bi bi-x-circle"></i> Batal
              </button>
              <button type="submit" class="btn btn-success">
                <i class="bi bi-check-lg"></i> Simpan Artikel
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </main>
</body>
</html>
