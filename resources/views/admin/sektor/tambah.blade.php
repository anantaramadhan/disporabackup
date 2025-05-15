<!DOCTYPE html>
<html lang="id">

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main" style="margin-bottom: 35px;">
    <div class="pagetitle">
      <h1>Tambah Sektor</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Tambah Sektor</h5>

              <form action="{{ url('/sektor/tambah') }}" method="POST" enctype="multipart/form-data" id="addProductForm">
                @csrf

                <div class="row">
                  <div class="col-12">
                    <label for="namaSektor" class="form-label">Nama Sektor</label>
                    <input type="text" name="nama_sektor" class="form-control" id="namaSektor" placeholder="Masukkan nama sektor" required>
                  </div>

                  <div class="col-12 mt-3">
                    <label for="deskripsiSektor" class="form-label">Deskripsi</label>
                    <!-- Ganti textarea dengan div untuk CKEditor -->
                    <div id="deskripsiSektor" class="form-control" style="min-height: 150px; border: 1px solid #ccc;" required></div>
                  </div>

                  <div class="col-12 mt-3">
                    <label for="fotoSektor" class="form-label">Foto Sektor</label>
                    <input type="file" name="foto_sektor" class="form-control" id="fotoSektor" accept="image/*" required>
                  </div>

                  <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary w-100">Tambah Sektor</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- Modal Berhasil Tambah Sektor -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Berhasil Tambah Sektor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Sektor Anda telah berhasil ditambahkan.
        </div>
        <div class="modal-footer">
          <a href="{{ route('datasektor') }}" class="btn btn-success">Kembali ke Data Sektor</a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Gagal Tambah Sektor -->
  <div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="failureModalLabel">Gagal Tambah Sektor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Terjadi kesalahan saat menambahkan sektor. Silakan coba lagi.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Script untuk Modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Menambahkan CKEditor 5 -->
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
  <script>
    // Inisialisasi CKEditor pada elemen dengan ID "deskripsiSektor"
    ClassicEditor
      .create(document.querySelector('#deskripsiSektor'), {
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
    document.getElementById("addProductForm").onsubmit = function (event) {
      event.preventDefault();

      // Simulasikan proses penyimpanan dengan random (gantilah dengan proses sebenarnya)
      let success = Math.random() > 0.5;  // Randomly simulate success or failure

      if (success) {
        // Menampilkan modal Berhasil Tambah Sektor
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
      } else {
        // Menampilkan modal Gagal Tambah Sektor
        var failureModal = new bootstrap.Modal(document.getElementById('failureModal'));
        failureModal.show();
      }
    };
  </script>

</body>

</html>
