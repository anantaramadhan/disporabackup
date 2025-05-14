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
        <form method="POST" action="#" enctype="multipart/form-data" id="editArticleForm">
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
            <div class="ms-auto">
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

  <!-- Modal Berhasil Simpan -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Berhasil Simpan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Artikel Anda berhasil disimpan.
        </div>
        <div class="modal-footer">
          <a href="{{ route('artikel') }}" class="btn btn-success">Kembali ke Artikel</a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Gagal Simpan -->
  <div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="failureModalLabel">Gagal Simpan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Terjadi kesalahan saat menyimpan artikel. Silakan coba lagi.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Script untuk Modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Menangani form submission
    document.getElementById("editArticleForm").onsubmit = function (event) {
      event.preventDefault();

      // Simulasikan proses penyimpanan dengan random (gantilah dengan proses sebenarnya)
      let success = Math.random() > 0.5;  // Randomly simulate success or failure

      if (success) {
        // Menampilkan modal Berhasil Simpan
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
      } else {
        // Menampilkan modal Gagal Simpan
        var failureModal = new bootstrap.Modal(document.getElementById('failureModal'));
        failureModal.show();
      }
    };
  </script>

</body>

</html>
