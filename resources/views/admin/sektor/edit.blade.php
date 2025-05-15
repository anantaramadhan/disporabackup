<!DOCTYPE html>
<html lang="id">

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main" style="margin-bottom: 35px;">
    <div class="pagetitle">
      <h1>Edit Sektor</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Edit Sektor</h5>

              <form method="POST" action="#" enctype="multipart/form-data" id="editProductForm">
                @csrf

                <div class="row">
                  <!-- Nama sektor -->
                  <div class="col-12">
                    <label for="namasektor" class="form-label">Nama sektor</label>
                    <input type="text" name="nama_sektor" class="form-control" id="namasektor" placeholder="Masukkan nama sektor" required>
                  </div>

                  <!-- Deskripsi sektor -->
                  <div class="col-12 mt-3">
                    <label for="deskripsisektor" class="form-label">Deskripsi sektor</label>
                    <!-- Ganti textarea dengan div untuk CKEditor -->
                    <div id="deskripsisektor" class="form-control" style="min-height: 150px; border: 1px solid #ccc;" required></div>
                  </div>

                  <!-- Foto sektor -->
                  <div class="col-12 mt-3">
                    <label for="fotosektor" class="form-label">Foto sektor</label>
                    <input type="file" name="foto_sektor" class="form-control" id="fotosektor" accept="image/*">
                    <small class="text-muted">Kosongkan jika tidak ingin mengganti foto sektor</small>
                    <!-- Menampilkan foto sektor yang sudah ada -->
                    <div class="mt-2">
                      <img src="https://via.placeholder.com/100" alt="Foto sektor" width="100">
                    </div>
                  </div>

                  <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- Modal Berhasil Simpan -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Berhasil Simpan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Sektor Anda berhasil disimpan.
        </div>
        <div class="modal-footer">
          <a href="{{ route('datasektor') }}" class="btn btn-success">Kembali ke Daftar sektor</a>
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
          Terjadi kesalahan saat menyimpan sektor Anda. Silakan coba lagi.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Script untuk Bootstrap (Untuk Modal dan Interaksi Lainnya) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Menambahkan CKEditor 5 -->
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
  <script>
    // Inisialisasi CKEditor pada elemen dengan ID "deskripsisektor"
    ClassicEditor
      .create(document.querySelector('#deskripsisektor'), {
        toolbar: [
          'undo', 'redo', '|',
          'bold', 'italic', '|',
          'link', 'imageUpload', 'numberedList', 'bulletedList', '|',
          'blockQuote', 'insertTable'
        ],
        ckfinder: {
          uploadUrl: '/upload-image' // Ganti dengan URL untuk menangani upload gambar
        }
      })
      .catch(error => {
        console.error(error);
      });
  </script>

  <script>
    // Menangani form submission
    document.getElementById("editProductForm").onsubmit = function (event) {
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
